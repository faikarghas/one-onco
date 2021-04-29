<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\BeritaDanJurnalController;
//use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SistemTubuhController;
use App\Http\Controllers\UntukPasienDanPendampingController;
use App\Http\Controllers\PerawatanKankerController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BelanjaSehatController;
use App\Http\Controllers\KonsultasiOnlineController;
use App\Http\Controllers\JenisKankerController;

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

// Auth

Route::get('login', [AuthController::class,'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::get('pengaturan', [AuthController::class, 'forgotPassword'])->name('Forgot Password');

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/sukses', function () {
    return view('v_success');
});

// Main
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/tentang-kami',[PagesController::class,'index']);
Route::get('/tentang-kami/{slug}',[PagesController::class,'index']);

Route::get('jenisKanker/get/{id}', [HomeController::class,'getJenisKanker']);
Route::get('/cerita-survivor',[StoryController::class,'index']);
Route::get('/cerita-survivor/{slug}',[StoryController::class,'detail']);
Route::get('/untuk-pasien',[PagesController::class,'index']);
Route::get('/untuk-pasien/{slug}',[PagesController::class,'index']);
Route::get('/untuk-pendamping',[PagesController::class,'index']);
Route::get('/untuk-pendamping/{slug}',[PagesController::class,'index']);
Route::get('/perawatan-kanker',[PagesController::class,'index']);
Route::get('/perawatan-kanker/{slug}',[PagesController::class,'index']);
Route::get('/get-more-dokters', [DirectoryController::class,'getMoreDokters'])->name('dokters.get-more-dokters');
Route::get('/get-more-faskes', [DirectoryController::class,'getMoreFaskes'])->name('faskes.get-more-faskes');
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

Route::get('/direktori-care',[DirectoryController::class,'carehome']);
Route::get('/direktori-care/{id}',[DirectoryController::class,'care']);

Route::get('/berita-terkini',[BeritaDanJurnalController::class,'index']);
Route::get('/berita-terkini/{slug}',[BeritaDanJurnalController::class,'detail']);
Route::get('/artikel-kanker',[BeritaDanJurnalController::class,'index']);
Route::get('/artikel-kanker/{slug}',[BeritaDanJurnalController::class,'detail']);

Route::get('/belanja-sehat',[BelanjaSehatController::class,'index']);
Route::get('/konsultasi-online',[KonsultasiOnlineController::class,'index']);

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

// Route::get('/sistem-tubuh/{lokasi}', function ($lokasi) {
//     $lokasi = DB::table('kanker')
//                     ->leftJoin('kategori_kanker', 'kategori_kanker.id', '=', 'kanker.idKat')
//                     ->select('kanker.*', 'kategori_kanker.slug AS slugkat')
//                     ->where ('kategori_kanker.slug',$lokasi)
//                     ->get();
//     return view('v_sistemLokasiKanker',['lokasi'=>$lokasi]);
// });


Route::get('/jenis-kanker/{slug}',[JenisKankerController::class,'index']);

////////////////////////////////////////


Route::get('/search', [SearchController::class,'index']);


// Pages Footer
Route::get('/syaratdanketentuan',[PagesController::class,'index']);
Route::get('/syaratdanketentuan/{slug}',[PagesController::class,'index']);

Route::get('/partner-kami',[PagesController::class,'index']);
Route::get('/partner-kami/{slug}',[PagesController::class,'index']);



