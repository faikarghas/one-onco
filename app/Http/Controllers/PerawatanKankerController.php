<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;

class PerawatanKankerController extends Controller
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

      // header title and image

      // main page

      //listing kategori artikel bedasarkan url dan kategori
      $listingKatArtikel = DB::table('artikel')->where('idKat',7)->orderBy('id', 'DESC')->get();

      $viewData = DB::table('artikel')->where('id',98)->first();  

      // content about us
      // $kat=6;
      // $content  = new News_model();
      // $contentDetail  = $content->contentBySlug($kat,$slug);


      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',7)->limit(3)->orderBy('id', 'DESC')->get();


      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin,
                    'slugStory' => 'testt',
                    'listingNews'=>$listingNews,
                    'listingKatArtikel'=>$listingKatArtikel,
                    'titlePages' => $viewData->title,
                    'contentPages' => $viewData->content
                    // 'listingSlugKatArtikel'=>$listingKatArtikel->slug,
                    // 'contentKatArtikel'=>$listingKatArtikel->content,


                  );

      return view ('v_perawatanKanker', $data);
    }
    public function detail($slug){

      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();
      // check sebagai customer apa bukan
      if(Session()->get('username')=="") {
        $statusLogin = "<a href='/login'>LOGIN</a>";
      } else {
        $statusLogin = "<a href='/logout'>LOGOUT</a>";
      }

      // header title and image

      // main page

      //listing kategori artikel bedasarkan url dan kategori
      $listingKatArtikel = DB::table('artikel')->where('idKat',7)->orderBy('id', 'DESC')->get();

      $viewDataDetail =  DB::table('artikel')->where('slug',$slug)->first();

      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('id', 'DESC')->get();
      $data = array('title' =>  $viewDataDetail->title,
                    'copyright'=>$viewDataDetail->content,
                    'statusLogin'=>$statusLogin,
                    'slugStory' => 'testt',
                    'listingNews'=>$listingNews,
                    'listingKatArtikel'=>$listingKatArtikel,
                    'titlePages'=>$viewDataDetail->title,
                    'shortContent'=>$viewDataDetail->shortContent,
                    'Content'=>$viewDataDetail->content
                  );
      return view ('v_perawatanKankerDetail', $data);
    }
}
