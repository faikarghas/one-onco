<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DeteksiKankerController extends Controller
{
    //
    public function index(Request $request){

        //return view('v_belanjaSehat');
        return view('v_deteksiKanker');
    }
}
