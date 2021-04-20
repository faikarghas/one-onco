<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;

class PagesController extends Controller
{
    public function index(Request $request, $slug=NULL){
      
      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();     
      // check sebagai customer apa bukan
      if(Session()->get('username')=="") {
        $statusLogin = "<a href='/login'>LOGIN</a>";
      } else {
        $statusLogin = "<a href='/logout'>LOGOUT</a>";
      }  
      // get all atribut pages
      $slugKat = $request->segment(1);
      $listAttribute = $this->getPages($slugKat);
      //dd($listAttribute);
      $kategoriId = $listAttribute->id;
      // header title and image
      $imageHeader = $listAttribute->image;
      $titleHeader = $listAttribute->title;       
      // side menu by kategori artikel
      $listingKatArtikel = DB::table('artikel')->where('idKat',$kategoriId)->orderBy('sortId', 'ASC')->get();
        // main content after and before click
      if (!empty($slug)){
        $viewDataDetail =  DB::table('artikel')->where('slug',$slug)->first();
        $mainContent = $viewDataDetail->content;
      } else {
        $mainContent = $listAttribute->content;
      } 
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin,
                    'listingKatArtikel'=>$listingKatArtikel,
                    'slugKat'=>$slugKat,
                    'titlePages' => $titleHeader,
                    'contentPages' => $mainContent
                  );   
      return view ('v_pages', $data);
    }
}
