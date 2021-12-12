<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class AuthController extends Controller
{
    public function showFormLogin()
    {
      if (Auth::check()) {
          // true sekalian session field di users nanti bisa dipanggil via Auth
          //Login Success
          return redirect()->route('home');
      }
      return view('v_login');
    }
    public function login(Request $request)
    {

      //dd(session()->all());
      $rules = [
        'email'                 => 'required|email',
        'password'              => 'required|string',
        'captcha'               => 'required|captcha'
      ];
      $messages = [
          'email.required'        => 'Email wajib diisi',
          'email.email'           => 'Email tidak valid',
          'password.required'     => 'Password wajib diisi',
          'password.string'       => 'Password harus berupa string',
          'captcha.required'     =>  'Captcha wajib diisi',
      ];
      
      $validator = Validator::make($request->all(), $rules, $messages);
      if($validator->fails()){
        return redirect('/login')->withErrors($validator)->withInput($request->all);
      } else {
        $data = [
          'email'     => $request->input('email'),
          'password'  => $request->input('password'),
        ];
        $user = DB::table('users')->where('email', '=', $request->email)->first();
        if ($user === null) {
          $msg = 'Email ini belum terdaftar sebagai akun. <a href="'. route('register') . '"> Daftar disini  </a>';
          Session::flash('error', $msg);
          return redirect()->route('login');
        } else {
          $idVerification = $user->isVerified;
          if ($idVerification === 0 ) {
            $msg = 'Email ini belum terverifikasi. <a href="'. route('login') . '"> Daftar disini  </a>';
            Session::flash('error', $msg);
            return redirect()->route('login');
          } else {
            Auth::attempt($data);
            if (Auth::check()) {
              $fullName= $user->name;
              $phone = $user->phone;
              $client_id = "KD-Api-Key";
              $secret = "CffnUrPN1t3iE2O5Y5A6emjwciGe1NRn";
              $url = "https://api.medkomtek.com/kdapi/partner/login";
              $data = [
                        'full_name' => $fullName,
                        'phone' => $phone
                      ];
              $response =  Http::asForm()->withHeaders([$client_id => $secret])->post($url, $data);
              $jsonData = $response->json();
              foreach ($jsonData as $value) {
                $tokenUser =  $value['token'];
              }
              $request->session()->put('tokenUser',$tokenUser);
              return redirect('/')->with(['succes' => 'Anda berhasil login']);
            } else {
              Session::flash('error', 'Email atau password salah');
              return redirect()->route('login');
            }
          }
        }  
      }
    }
    public function showFormRegister()
    {
      return view('v_register');
    }

    public function register(Request $request)
    {
      $rules = [
        'name'                  => 'required|min:3|max:35',
        'email'                 => 'required|email|unique:users,email',
        'password'              => 'required|min:8',
        'phone'                 => 'required|min:9|numeric',
        // 'captcha' => 'required|captcha'
      ];
      $messages = [
        'name.required'         => 'Nama Lengkap wajib diisi',
        'name.min'              => 'Nama lengkap minimal 3 karakter',
        'name.max'              => 'Nama lengkap maksimal 35 karakter',
        'email.required'        => 'Email wajib diisi',
        'email.email'           => 'Email tidak valid',
        'email.unique'          => 'Email sudah terdaftar',
        'password.required'     => 'Kata Sandi wajib diisi',
        'phone.required'        => 'Nomor ponsel wajib diisi',
      ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
          //return redirect()->back()->withErrors($validator)->withInput($request->all);
          return redirect('/register')->withErrors($validator)->withInput($request->all);
        } else {

          $user = new User;
          $user->name = ucwords(strtolower($request->name));
          $user->email = strtolower($request->email);
          $user->password = Hash::make($request->password);
          $user->phone= $request->phone;
          $user->address= $request->address;
          $user->provinsi= $request->provinsi;
          $user->kabupaten= $request->kota;
          $user->kecamatan= $request->kecamatan;
          $user->jenis_kanker= $request->jenis_kanker;
          $user->status= $request->status;
          $user->email_verified_at = \Carbon\Carbon::now();
          $user->remember_token =  str::random(30);
          $user->token_activation =  str::random(6);
          $simpan = $user->save();
          if($simpan){
            Session::flash('success', 'Silahkan buka email Anda untuk mengkonfirmasi alamat email Anda.
            ');
            Mail::send('v_emailActiv', ['token' =>$user->remember_token, 'userName' =>   $user->name], function($message) use($request){
              $message->to($request->email);
              $message->subject('Pendaftaran Akun');
            });
            return redirect()->route('login');
          } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
          }
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }
    public function forgotPassword()
    {
      return view ('v_forgotPassword');
    }

    public function changePassword()
    {
      return view ('v_pengaturan');
    }

    public function storeNewPassword(Request $request)
    {
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Auth::logout();
        return redirect('/login')->with('success', 'Kata sandi berhasil diubah. Silahkan masuk.');
    }

    public function validatePasswordRequest(Request $request)
    {

      //dd($request->email);
      $user = DB::table('users')->where('email', '=', $request->email)->first();
      //dd($user);
      if (is_null($user)) {
          return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
      }

      //Create Password Reset Token
      DB::table('password_resets')->insert([
          'email' => $request->email,
          'token' => str::random(60),
          'created_at' => Carbon::now()
      ]);
      //Get the token just created above

      $tokenData = DB::table('password_resets')->whereRaw('email=?', [$request->email])->first();
      $token = $tokenData->token;

      Mail::send('v_emailVeri', ['token' => $token], function($message) use($request){
        $message->to($request->email);
        $message->subject('Notifikasi Ubah Kata Sandi');
      });

      return redirect()->back()->with('status', trans('Mohon check email Anda untuk membuat kata sandi baru.'));
  }

  private function sendResetEmail($email, $token)
  {
    //Retrieve the user from the database
    $user = DB::table('users')->where('email', $email)->select('name', 'email')->first();
    dd($user);
    //Generate, the password reset link. The token generated is embedded in the link
    $link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);
    try {
        return true;
    } catch (\Exception $e) {
        return false;
    }
  }
  public function getPassword($token) {
    return view('v_pengaturan_withToken', ['token' => $token]);
  }

 public function updatePassword(Request $request)
 {
  $request->validate([
      'email' => 'required|email|exists:users',
      'new_password' => ['required'],
      'new_confirm_password' => ['same:new_password'],
  ]);
  $updatePassword = DB::table('password_resets')
                      ->where(['email' => $request->email, 'token' => $request->token])
                      ->first();
  if(!$updatePassword)
      return back()->withInput()->with('error', 'Invalid token!');
      $user = User::where('email', $request->email)
                ->update(['password' => Hash::make($request->new_password)]);
      DB::table('password_resets')->where(['email'=> $request->email])->delete();
      return redirect('/login')->with('success', 'Kata sandi berhasil diubah. Silahkan masuk.');
  }
  public function verifyRegistration(Request $request)
  {
    $user = User::where('remember_token', $request->token)
                ->update(['isVerified' => '1', 'remember_token' => NULL]);
    if ($user){
      return redirect('/login')->with('success', 'Anda berhasil mengkonfirmasi alamat email Anda. Silahkan Masuk.');
    } else {
      return redirect('/login')->with('success', 'Akun Anda sudah aktif. Silahkan masuk.');
    }
  }
  public function reloadCaptcha()
  {
    return response()->json(['captcha'=> captcha_img()]);
  }


}
