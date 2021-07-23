<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiOnlineController extends Controller
{
    //
    public function index(Request $request){

        return view('v_indexChat');
    }
    public function chat(Request $request){
        return view('v_konsultasiOnline');
    }
}
