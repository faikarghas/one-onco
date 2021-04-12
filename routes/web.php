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
use App\Http\Controllers\PengaturanController;

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

Route::get('/pengaturan', [PengaturanController::class,'index']);

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
Route::get('/artikel-kanker',[BeritaDanJurnalController::class,'jurnal']);
Route::get('/artikel-kanker/{slug}',[BeritaDanJurnalController::class,'jurnalDetail']);



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

Route::get('/sistem-tubuh/{lokasi}', function ($lokasi) {
    $lokasi = DB::table('kanker')
                    ->leftJoin('kategori_kanker', 'kategori_kanker.id', '=', 'kanker.idKat')
                    ->select('kanker.*', 'kategori_kanker.slug AS slugkat')
                    ->where ('kategori_kanker.slug',$lokasi)
                    ->get();
    return view('v_sistemLokasiKanker',['lokasi'=>$lokasi]);
});

// Route::get('/sistem-tubuh/{lokasi}/{jenis}', function ($lokasi,$jenis) {
//     return view('v_sistemJenisKanker',['lokasi'=>$lokasi,'jenis'=>$jenis]);
// });

Route::get('/sistem-tubuh/{lokasi}/{jenis}',[SistemTubuhController::class,'sistemTubuhDetail']);

////////////////////////////////////////


Route::get('/search', [SearchController::class,'index']);
