<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Artikel_model;
use App\Models\GlobalData;
use App\Models\ArtikelKategori_model;
use Illuminate\Support\Facades\View;


define('PER_PAGE_LIMIT', 30);

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
      $siteSetting = GlobalData::where('id' ,1)->first();
      View::share('address', $siteSetting->ptext3);
      View::share('copyright', $siteSetting->pvar3);
    }

    public function getnews(){
  
        $listingNews = Artikel_model::where('idKat' ,1)
                      ->skip(0)
                      ->take(3)
                      ->orderBy('id','DESC')
                      ->get();
        return $listingNews;
    }

    public function getPages($slugKat){
        $getAllVariable = ArtikelKategori_model::where('slug' ,'=', $slugKat)->first();
        return $getAllVariable;
    }

    public function getstory(){
      //$listingNews = DB::table('artikel')->where('idKat',3)->limit(3)->orderBy('id', 'DESC')->get(); 
      $listingNews = Artikel_model::where('idKat' ,3)
      ->skip(0)
      ->take(3)
      ->orderBy('id','DESC')
      ->get();
      return $listingNews;
  }

    public function checkLogin(){
        // check sebagai customer apa bukan
        if(Session()->get('username')=="") {
          $statusLogin = "<a href='/login'>LOGIN</a>";
        } else {
          $statusLogin = "<a href='/logout'>LOGOUT</a>";
        }
        return $statusLogin;
    }

  //   public function siteSettings(){
      
  //     // check sebagai customer apa bukan
  //     $siteSetting = GlobalData::where('pvar1' ,'company');
  //     return $globalData;
      
  // }
}
