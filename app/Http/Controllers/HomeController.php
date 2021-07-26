<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artikel_model;
use App\Models\ArtikelKategori_model;
use App\Models\Customer_model;
use App\Models\Partner_model;

class HomeController extends Controller
{
    public function index(Request $request){
        // GET variable from global data for website
        $siteConfig   = DB::table('global_data')->first();
        //$session = $request->session()->all();

        //dd($session);
        // check sebagai customer apa bukan
        if(Session()->get('username')=="") {
          $statusLogin = "<a href='/login'>LOGIN</a>";
          // tampilakan  slider news story random
          //$sliderArtikel = DB::table('artikel')->whereRaw('idKat=?',3)->select('id','title','shortContent','imgDesktop','themeColor','slug')->orderBy('id', 'DESC')->get();
          $sliderArtikel = Artikel_model::where('idKat',3)->orderBy('id','desc')->get();
          $statusConfig = '';
          } else {
          // tampilakan  slider news story bedasarkan jenis kanker customer
          $statusLogin = "";
          //$sliderArtikel = DB::table('artikel')->select('id')->whereRaw('idKat=?',3)->orderBy('id', 'DESC')->get();
          $sliderArtikel = Artikel_model::where('idKat',3)->orderBy('id','desc')->get();
          $statusConfig = "<a href='/pengaturan'><img src='{{ asset('/images/setting.png') }}' alt='search' width='15px'/></a>";
        }
        //$listSur = DB::table('kategori_artikel')->whereRaw('id=?',3)->first();
        $listSur = ArtikelKategori_model::where('id',3)->first();
        $statusTheme = $listSur->activeTheme;
        $themeColor = $listSur->themeColor;

        if ($statusTheme === 1) {
            $colorSlider [] =  $themeColor;
        } else {
          foreach ($sliderArtikel as $row) {
            $colorSlider [] = $row->themeColor;
          }
        }
        foreach ($sliderArtikel as $row) {
          $idSlider [] = $row->id;
          $titleSlider [] = $row->title;
          $introSlider [] = $row->shortContent;
          $imageSlider [] = url('/data_artikel/'.$row->imgDesktop);
          $linkSlider [] = url('/cerita-survivor/'.$row->slug);
        }
        //variable  data about us ( general)
        //$shortContentAbout = DB::table('kategori_artikel')->whereRaw('id=?',11)->first();
        $shortContentAbout = ArtikelKategori_model::where('id',11)->first();
        // variable jenis kanker dan nama kanker
        //$listingKankers = DB::table('kategori_artikel')->where('type','kanker')->orderBy('id', 'DESC')->get();
        $listingKankers = ArtikelKategori_model::where('type','kanker')->orderBy('sortId','ASC')->get();
        // variable journal onkologi terbaru
        // $listingJurnal = DB::table('artikel')
        //                   ->leftJoin('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat')
        //                   ->select('artikel.*', 'kategori_artikel.slug AS slugkat', 'kategori_artikel.intro' )
        //                   ->where('artikel.idKat',2)
        //                   ->limit(3)
        //                   ->orderBy('artikel.publishDate', 'DESC')
        //                   ->get();

        $listingJurnal = Artikel_model::join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat')
        ->where('artikel.idKat',2)
        ->skip(0)
        ->take(3)
        ->orderBy('artikel.publishDate','desc')
        ->get();

        $listingArtikelKanker  = Artikel_model::select('artikel.*', 'kategori_artikel.slug AS slug_kategori', 'kategori_artikel.intro','kategori_artikel.content','kategori_artikel.image')->join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat',)->where('artikel.idKat','=',2)->orderBy('artikel.publishDate','desc')->paginate(3);

        // variable news terbaru
        //$sliderArtikel = DB::table('artikel')->where('idKat',3)->limit(1)->orderBy('id', 'DESC')->first();
        //$listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('publishDate', 'DESC')->get();
        $listingNews = Artikel_model::where('idKat',1)
          ->skip(0)
          ->take(3)
          ->orderBy('publishDate', 'DESC')
          ->get();
        // all data variable to views
//        $listingPartners = DB::table('partner')->limit(6)->orderBy('id', 'DESC')->get();
        $listingPartners = Partner_model::skip(0)->take(6)->orderBy('id','desc')->get();

        $tentangKamiFirst = DB::table('artikel')
        ->where('artikel.idKat','6')
        ->orderBy('sortId','ASC')
        ->get();

        $data = array('title' => $siteConfig->pvar2,
                      'copyright'=>$siteConfig->pvar3,
                      'statusLogin'=>$statusLogin,
                      'statusConfig'=>$statusConfig,
                      'titleAbout'=>$shortContentAbout->title,
                      'contentAbout'=>$shortContentAbout->intro,
                      'listingArtikelKanker' => $listingArtikelKanker,
                      // 'shortStory' => $sliderArtikel->shortContent,
                      //'slug' => $sliderArtikel->slug,
                      'listingJurnal'=>$listingJurnal,
                      'listingKankers'=>$listingKankers,
                      'listingPartners'=>$listingPartners,
                      'listingNews'=>$listingNews,
                      'sliderArtikel'=>$sliderArtikel,
                      'titleSlider'=>$titleSlider,
                      'introSlider'=> $introSlider,
                      'imageSlider'=>$imageSlider,
                      'colorSlider'=>$colorSlider,
                      'linkSlider'=>$linkSlider
        );

    	return view ('v_home', $data);
    }
    public function getJenisKanker($id) {
      //$jenisKanker = DB::table("kanker")->where("idKat",$id)->pluck("title","id");
      $jenisKanker = Kanker_model::where('idKat',$id)->pluck('title','id');
      //dd($jenisKanker);
      return json_encode($jenisKanker);
    }
}