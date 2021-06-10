<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\BeritaDanJurnalController;
//use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BelanjaSehatController;
use App\Http\Controllers\KonsultasiOnlineController;
use App\Http\Controllers\JenisKankerController;
use App\Http\Controllers\NewsletterController;
// App::forgetMiddleware('Illuminate\Http\FrameGuard');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index']);

// Auth

Route::get('login', [AuthController::class,'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('forgotpassword', [AuthController::class, 'forgotPassword'])->name('forgot.password');


Route::post('reset_password_without_token', [AuthController::class, 'validatePasswordRequest']);
Route::post('reset_password_with_token', [AuthController::class, 'resetPassword']);

// Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
// Route::post('/reset-password', 'ResetPasswordController@updatePassword');

Route::get('/reset-password/{token}', [AuthController::class, 'getPassword']);
Route::post('/reset-password',[AuthController::class, 'updatePassword'])->name('reset.passwordwithToken');

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('pengaturan', [AuthController::class, 'changePassword']);
    Route::post('change-password', [AuthController::class, 'storeNewPassword'])->name('change.password');
    Route::get('/belanja-sehat',[BelanjaSehatController::class,'index']);
    Route::get('/konsultasi-online',[KonsultasiOnlineController::class,'index']);
});

Route::get('/verify-registration/{token}',[AuthController::class, 'verifyRegistration']);


Route::get('/sukses', function () {
    return view('v_success');
});

// Main

Route::get('jenisKanker/get/{id}', [HomeController::class,'getJenisKanker']);

Route::get('/cerita-survivor',[StoryController::class,'index']);
Route::get('/cerita-survivor/{slug}',[StoryController::class,'detail']);
Route::post('cerita-survivor/load_data',[StoryController::class,'load_data'])->name('loadmore_story.load_data');


Route::get('/get-more-dokters', [DirectoryController::class,'getMoreDokters'])->name('dokters.get-more-dokters');
Route::get('/get-more-faskes', [DirectoryController::class,'getMoreFaskes'])->name('faskes.get-more-faskes');
Route::get('/get-more-komunitas', [DirectoryController::class,'getMoreKomunitas'])->name('faskes.get-more-komunitas');
Route::get('/direktori',[DirectoryController::class,'index']);
Route::get('/direktori-dokter',[DirectoryController::class,'dokter']);
Route::get('cities/get/{id}',[DirectoryController::class,'getCities']);
Route::get('dokter/get/{id}',[DirectoryController::class,'getDokter']);
Route::get('faskes/get/{id}',[DirectoryController::class,'getFaskes']);
Route::get('faskesWithPropinsi/get/{id}',[DirectoryController::class,'getFaskesWithPropinsi']);
Route::get('faskesWithKabupaten/get/{id}',[DirectoryController::class,'getFaskesWithKabupaten']);
Route::get('dokterWithKabupaten/get/{id}',[DirectoryController::class,'getDokterWithKabupaten']);

Route::get('dokter-detail/{id}',[DirectoryController::class,'getDokterDetail']);

Route::get('/direktori-lab',[DirectoryController::class,'lab']);
Route::get('/direktori-lab/{id}',[DirectoryController::class,'getLabDetail']);


Route::get('/direktori-care',[DirectoryController::class,'carehome']);
Route::get('/direktori-care/{id}',[DirectoryController::class,'care']);

Route::get('/berita-terkini',[BeritaDanJurnalController::class,'index']);
Route::get('/berita-terkini/{slug}',[BeritaDanJurnalController::class,'detail']);
Route::get('/artikel-kanker',[BeritaDanJurnalController::class,'index']);
Route::get('/artikel-kanker/{slug}',[BeritaDanJurnalController::class,'detail']);
Route::get('beritaload/{offset}/{idKat}',[BeritaDanJurnalController::class,'loadMore']);

Route::post('/berita-terkini/load_data',[BeritaDanJurnalController::class,'load_data'])->name('loadmore.load_data');;



Route::get('/sukses', function () {
    return view('v_success');
});


////////////////////////////////////////
// CARI SESUAI KATEGORI KANKER HOME PAGE

Route::get('/sistem-tubuh', function () {
    // $katKankers = DB::table('kategori_kanker')->pluck("title","id");
    $katKankers = DB::table('kategori_kanker')
                    ->select('id','title','slug')
                    ->get();
    return view('v_sistemTubuh',['katKankers'=>$katKankers]);
});


Route::get('/jenis-kanker/{slug}',[JenisKankerController::class,'index']);

////////////////////////////////////////


Route::get('/search', [SearchController::class,'index']);

Route::post('newsletter/store',[NewsletterController::class,'store']);


// Catch all page controller (place at the very bottom)
Route::get('{slug}',[PagesController::class, 'index'])->where('slug', '([A-Za-z0-9\-\/]+)');