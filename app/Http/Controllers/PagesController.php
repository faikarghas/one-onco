<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;
use App\Models\Artikel_model;
use App\Models\Partner_model;

class PagesController extends Controller
{
    public function index(Request $request, $slug = NULL){
      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();
      $request_path = explode('/', $slug);
      //dd ($request_path);


      if (isset($request_path[1])){
        $slugDetail = $request_path[1];
      }
      $slugKat = $request_path[0];
      $listAttribute = $this->getPages($slugKat);
      $kategoriId = $listAttribute->id;
      // header title and image
      $imageHeader = $listAttribute->image;
      $titleHeader = $listAttribute->title;
      $subTitleHeader = $listAttribute->intro;
      // side menu by kategori artikel
      //$listingKatArtikel = DB::table('artikel')->whereRaw('idKat = ?', [$kategoriId])->orderBy('sortId', 'ASC')->get();
      $listingKatArtikel = Artikel_model::where('idKat','=',$kategoriId)->orderBy('sortId', 'ASC')->get();
      //dd($listingKatArtikel);

      if (!empty($slugDetail)){
        // $viewDataDetail =  DB::table('artikel')
        //                       ->whereRaw('idKat = ?', [$kategoriId])
        //                       ->whereRaw('slug = ?',[$slugDetail])
        //                       ->first();
        $viewDataDetail =  Artikel_model::where('idKat','=',$kategoriId)->where('slug','=',$slugDetail)->first();

        //dd ($viewDataDetail);
        $titleContentPages = $viewDataDetail->title;
        $mainContent = $viewDataDetail->content;
      } else {
        $titleContentPages = $titleHeader;
        $mainContent = $listAttribute->content;
      }

      // widget
      //$listingNews = DB::table('artikel')->whereRaw('idKat =?',1)->limit(3)->orderBy('publishDate', 'DESC')->get();
      //$listingStory  = DB::table('artikel')->whereRaw('idKat =?',3)->limit(3)->orderBy('publishDate', 'DESC')->get();
      //$listingPartners = DB::table('partner')->limit(4)->orderBy('id', 'DESC')->get();
      $listingNews = Artikel_model::where('idKat','=',1)->skip(0)->take(3)->orderBy('publishDate', 'DESC')->get();
      $listingStory  = Artikel_model::where('idKat','=',3)->skip(0)->take(3)->orderBy('publishDate', 'DESC')->get();
      $listingPartners = Partner_model::skip(0)->take(4)->orderBy('id', 'DESC')->get();
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
      return view ('v_pages', $data);
    }
}
