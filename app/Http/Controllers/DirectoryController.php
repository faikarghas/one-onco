<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Dokter_model;
use App\Models\Kanker_model;
use App\Models\Customer_model;

class DirectoryController extends Controller
{
    public function index(Request $request){

      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();    
      // check sebagai customer apa bukan
      if(Session()->get('username')=="") {
        $statusLogin = "<a href='/login'>LOGIN</a>";
      } else {
        $statusLogin = "<a href='/logout'>LOGOUT</a>";
      }

      // main page

      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin
                  );
      
      return view ('v_direktoriKanker', $data);
    }
    public function dokter(){

      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();    
      // check sebagai customer apa bukan
      if(Session()->get('username')=="") {
        $statusLogin = "<a href='/login'>LOGIN</a>";
      } else {
        $statusLogin = "<a href='/logout'>LOGOUT</a>";
      }

      $cities = DB::table('indonesia_provinces')->pluck("name","id");


    
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin
                  );
      
      return view ('v_direktoriDokter', $data,compact('cities'));
    }

    public function getFaskes($id) {
      $faskes = DB::table("faskes")->where("provinsi",$id)->pluck("namaFaskes","faskesId");
      return json_encode($faskes);
  }

    public function getDokter($id) {
      

      
      return json_encode($faskes);
  }

   

}
