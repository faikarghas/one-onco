<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session; 
use Illuminate\Http\Request;

class BelanjaSehatController extends Controller
{
    //
    public function index(Request $request){


        $data = session()->all();
        dd($data);
        return view('v_belanjaSehat');
    }
}
