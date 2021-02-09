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

Route::get('/', function () {
    return view('v_home');
});


Route::get('/login', function () {
    return view('v_login');
});


Route::get('/register', function () {
    return view('v_register');
});

Route::get('/pengaturan', function () {
    return view('v_pengaturan');
});

Route::get('/sukses', function () {
    return view('v_success');
});


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


