<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer_model;
use App\Helpers\Website;

class LoginController extends Controller
{
    // Main page login 
    public function index()
    {
      
      $siteConfig   = DB::table('global_data')->first();
      if(Session()->get('username')=="") {
        $statusLogin = "<a href='/login'>LOGIN</a>";
      } else {
        $statusLogin = "<a href='/logout'>LOGOUT</a>";
        return redirect('/pengaturan');
      }

      
      
      $data = array(  'title'     => 'Login',
    				  'site'		=> $siteConfig,
                      'statusLogin'		=> $statusLogin
                      
                    
                    );
      return view('v_login',$data);
    }

    // Cek
    public function auth(Request $req)
    {
        $email   = $req->email;
        $password   = $req->password;
        $model      = new Customer_model();
        $customer   = $model->login($email,$password);
        if($customer) {
            $req->session()->put('id', $customer->id);
            $req->session()->put('username', $customer->username);
            return redirect('/home')->with(['succes' => 'Anda berhasil login']);
        }else{
            return redirect('login')->with(['warning' => 'Mohon maaf, Username atau password salah']);
        }
    }

    // Homepage
    public function logout()
    {
        Session()->forget('id');
        Session()->forget('username');
        return redirect('/')->with(['sukses' => 'Anda berhasil logout']);
    }

    // Forgot password
    public function forgot()
    {
    	$site = DB::table('konfigurasi')->first();
       	$data = array(  'title'     => 'Lupa Password',
    					'site'		=> $site);
        return view('login/lupa',$data);
    }
}