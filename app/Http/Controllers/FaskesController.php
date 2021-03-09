<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;

class FaskesController extends Controller
{
    public function index(){

    
    }
    public function getFaskes($id) {
        $faskes = DB::table("faskes")->where("provinsi",$id)->pluck("namaFaskes","faskesId");
        return json_encode($faskes);
    }
}
