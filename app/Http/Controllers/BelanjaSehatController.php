<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session; 
use Illuminate\Http\Request;

class BelanjaSehatController extends Controller
{
    //
    public function index(Request $request){
        return view('v_belanjaSehat');
    }
}
