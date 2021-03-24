<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\BeritaDanJurnalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SistemTubuhController;
use App\Http\Controllers\UntukPasienDanPendampingController;
use App\Http\Controllers\PerawatanKankerController;

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
Route::get('login', [LoginController::class,'index']);
Route::post('login/auth',[LoginController::class,'auth']);
Route::get('forgot',[LoginController::class,'forgot']);
Route::get('logout',[LoginController::class,'logout']);

Route::get('/register', function () {
    return view('v_register');
});

Route::get('/pengaturan', function () {
    return view('v_pengaturan');
});

Route::get('/sukses', function () {
    return view('v_success');
});

// Main
Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index']);
Route::get('/tentang-kami',[AboutController::class,'index']);
Route::get('/tentang-kami/{slug}',[AboutController::class,'pages']);

Route::get('jenisKanker/get/{id}', [HomeController::class,'getJenisKanker']);

Route::get('/cerita-survivor',[StoryController::class,'index']);
Route::get('/cerita-survivor/{slug}',[StoryController::class,'detail']);

Route::get('/untuk-pasien',[UntukPasienDanPendampingController::class,'pasien']);
Route::get('/untuk-pasien/{slug}',[UntukPasienDanPendampingController::class,'detailPasien']);
Route::get('/untuk-pendamping',[UntukPasienDanPendampingController::class,'pendamping']);
Route::get('/untuk-pendamping/{slug}',[UntukPasienDanPendampingController::class,'detailPendamping']);

Route::get('/perawatan-kanker',[PerawatanKankerController::class,'index']);
Route::get('/perawatan-kanker/{slug}',[PerawatanKankerController::class,'detail']);

// Route::get('/perawatan-kanker/{slug}', function ($slug) {
//     return view('v_perawatanKankerDetail',['slug'=>$slug]);
// });


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

Route::get('/berita-terkini',[BeritaDanJurnalController::class,'berita']);
Route::get('/berita-terkini/{slug}',[BeritaDanJurnalController::class,'beritaDetail']);
Route::get('/jurnal-onkologi',[BeritaDanJurnalController::class,'jurnal']);
Route::get('/jurnal-onkologi/{slug}',[BeritaDanJurnalController::class,'jurnalDetail']);


Route::get('/sukses', function () {
    return view('v_success');
});

// Route::get('/perawatan-kanker', function () {
//     return view('v_perawatanKanker');
// });

// Route::get('/perawatan-kanker/{slug}', function ($slug) {
//     return view('v_perawatanKankerDetail',['slug'=>$slug]);
// });


// Route::get('/jurnal-onkologi', function () {
//     return view('v_jurnalOnkologi');
// });

// Route::get('/jurnal-onkologi/{slug}', function ($slug) {
//     return view('v_jurnalOnkologiDetail',['slug'=>$slug]);
// });

// Route::get('/direktori-care', function () {
//     return view('v_direktoriCare');
// });





////////////////////////////////////////
// CARI SESUAI KATEGORI KANKER HOME PAGE



Route::get('/sistem-tubuh', function () {
    $katKankers = DB::table('kategori_kanker')->pluck("title","id");
    return view('v_sistemTubuh',['katKankers'=>$katKankers]);
});

Route::get('/sistem-tubuh/{lokasi}', function ($lokasi) {
    $jenis = 'test';
    return view('v_sistemLokasiKanker',['lokasi'=>$lokasi,'jenis'=>$jenis]);
});

Route::get('/sistem-tubuh/{lokasi}/{jenis}', function ($lokasi,$jenis) {
    return view('v_sistemJenisKanker',['lokasi'=>$lokasi,'jenis'=>$jenis]);
});

// Route::get('/sistem-tubuh/{lokasi}/{jenis}',[SistemTubuhController::class,'sistemTubuhDetail']);




////////////////////////////////////////


Route::get('/search', [SearchController::class,'index']);
