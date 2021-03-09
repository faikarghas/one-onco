<?php

use Illuminate\Support\Facades\Route;

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
// FRONTEND 
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/tentang-kami', 'App\Http\Controllers\AboutController@index');
Route::get('/tentang-kami/{slug}', 'App\Http\Controllers\AboutController@pages');

Route::get('jenisKanker/get/{id}', 'App\Http\Controllers\HomeController@getJenisKanker');
// Route::get('faskes/get/{id}', 'App\Http\Controllers\FaskesController@getFaskes');

Route::get('/cerita-survivor', 'App\Http\Controllers\StoryController@index');
Route::get('/cerita-survivor/{slug}', 'App\Http\Controllers\StoryController@detail');

Route::get('/direktori', 'App\Http\Controllers\DirectoryController@index');
Route::get('/direktori/dokter', 'App\Http\Controllers\DirectoryController@dokter');
Route::get('/direktori-dokter', 'App\Http\Controllers\DirectoryController@dokter');
Route::get('faskes/get/{id}', 'App\Http\Controllers\DirectoryController@getFaskes');
Route::get('dokter/get/{id}', 'App\Http\Controllers\DirectoryController@getDokter');




// Route::get('/direktori-dokter/{slug}', function ($slug) {
//     return view('v_direktoriDokterDetail',['slug'=>$slug]);
// });



// Login
Route::get('login', 'App\Http\Controllers\LoginController@index');
Route::post('login/auth', 'App\Http\Controllers\LoginController@auth');
Route::get('forgot', 'App\Http\Controllers\LoginController@forgot');
Route::get('logout', 'App\Http\Controllers\LoginController@logout');






////////////////////////////////////////
// CARI SESUAI KATEGORI KANKER HOME PAGE

Route::get('/sistem-tubuh', function () {
    $slug = 'test';
    return view('v_sistemTubuh',['slug'=>$slug]);
});

Route::get('/sistem-tubuh/{lokasi}', function ($lokasi) {
    $jenis = 'test';
    return view('v_sistemLokasiKanker',['lokasi'=>$lokasi,'jenis'=>$jenis]);
});

Route::get('/sistem-tubuh/{lokasi}/{jenis}', function ($lokasi,$jenis) {
    return view('v_sistemJenisKanker',['lokasi'=>$lokasi,'jenis'=>$jenis]);
});

////////////////////////////////////////

// Route::get('/login', function () {
//     return view('v_login');
// });

Route::get('/register', function () {
    return view('v_register');
});

Route::get('/pengaturan', function () {
    return view('v_pengaturan');
});

Route::get('/sukses', function () {
    return view('v_success');
});

// Route::get('/tentang-kami', function () {
//     return view('v_tentang');
// });

// Route::get('/tentang-kami/{slug}', function ($slug) {
//     return view('v_tentangDetail',['slug'=>$slug]);
// });

Route::get('/untuk-pasien', function () {
    return view('v_untukPasien');
});

Route::get('/untuk-pasien/{slug}', function ($slug) {
    return view('v_untukPasienDetail',['slug'=>$slug]);
});

Route::get('/untuk-pendamping', function () {
    return view('v_untukPendamping');
});

Route::get('/untuk-pendamping/{slug}', function ($slug) {
    return view('v_untukPendampingDetail',['slug'=>$slug]);
});

// Route::get('/cerita-survivor', function () {
//     return view('v_ceritaSurvivor');
// });

// Route::get('/cerita-survivor/{slug}', function ($slug) {
//     return view('v_ceritaSurvivorDetail',['slug'=>$slug]);
// });

Route::get('/perawatan-kanker', function () {
    return view('v_perawatanKanker');
});

Route::get('/perawatan-kanker/{slug}', function ($slug) {
    return view('v_perawatanKankerDetail',['slug'=>$slug]);
});

Route::get('/berita-terkini', function () {
    return view('v_beritaTerkini');
});

Route::get('/berita-terkini/{slug}', function ($slug) {
    return view('v_beritaTerkiniDetail',['slug'=>$slug]);
});

Route::get('/jurnal-onkologi', function () {
    return view('v_jurnalOnkologi');
});

Route::get('/jurnal-onkologi/{slug}', function ($slug) {
    return view('v_jurnalOnkologiDetail',['slug'=>$slug]);
});

// Route::get('/direktori', function () {
//     return view('v_direktoriKanker');
// });

// Route::get('/direktori-dokter', function () {
//     return view('v_direktoriDokter');
// });

// Route::get('/direktori-dokter/{slug}', function ($slug) {
//     return view('v_direktoriDokterDetail',['slug'=>$slug]);
// });

Route::get('/direktori-care', function () {
    return view('v_direktoriCare');
});

Route::get('/direktori-care/{slug}', function ($slug) {
    return view('v_direktoriCareDetail',['slug'=>$slug]);
});

Route::get('/direktori-lab', function () {
    return view('v_direktoriLab');
});
