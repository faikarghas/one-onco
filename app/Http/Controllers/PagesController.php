<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;
use App\Models\Artikel_model;

class PagesController extends Controller
{
    public function index(Request $request, $slug=NULL){
      
      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();       
      // get all atribut pages
      $slugKat = $request->segment(1);
      //dd($slugKat);
      $listAttribute = $this->getPages($slugKat);
      //dd($listAttribute);
      $kategoriId = $listAttribute->id;
      // header title and image
      $imageHeader = $listAttribute->image;
      $titleHeader = $listAttribute->title;
      $subTitleHeader = $listAttribute->intro;
      //dd($subTitleHeader);         
      // side menu by kategori artikel
      $listingKatArtikel = DB::table('artikel')->where('idKat',$kategoriId)->orderBy('sortId', 'ASC')->get();
      //dd($listingKatArtikel);
        // main content after and before click
      if (!empty($slug)){
        $viewDataDetail =  DB::table('artikel')
                              ->where('idKat',$kategoriId)
                              ->where('slug',$slug)
                              ->first();
        $titleContentPages = $viewDataDetail->title;
        $mainContent = $viewDataDetail->content;
      } else {
        $titleContentPages = $titleHeader;
        $mainContent = $listAttribute->content;
      }
      // widget
      $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('id', 'DESC')->get();
      $listingStory  = DB::table('artikel')->where('idKat',3)->limit(3)->orderBy('id', 'DESC')->get();
      $listingPartners = DB::table('partner')->limit(4)->orderBy('id', 'DESC')->get();

      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'listingKatArtikel'=>$listingKatArtikel,
                    'slugKat'=>$slugKat,
                    'titleHeader' => $titleHeader,
                    'introTitle' => $subTitleHeader,
                    'titleContentPages' => $titleContentPages,
                    'listingNews' => $listingNews,
                    'listingStory' => $listingStory,
                    'contentPages' => $mainContent,
                    'listingPartners' => $listingPartners

                  );

      //dd($data);
      return view ('v_pages', $data);
    }
}
