<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artikel_model;
use App\Models\Customer_model;

class HomeController extends Controller
{
    public function index(Request $request){
        // GET variable from global data for website
        $siteConfig   = DB::table('global_data')->first();
        //$session = $request->session()->all();
        //print_r ($session);
        // check sebagai customer apa bukan
        if(Session()->get('username')=="") {
          $statusLogin = "<a href='/login'>LOGIN</a>";
          // tampilakan  slider news story random
          $sliderArtikel = DB::table('artikel')->where('idKat',3)->select('id','title','shortContent','imgDesktop','themeColor','slug')->orderBy('id', 'DESC')->get();
          $statusConfig = '';
          } else {
          // tampilakan  slider news story bedasarkan jenis kanker customer
          $statusLogin = "";
          $sliderArtikel = DB::table('artikel')->select('id')->where('idKat',3)->orderBy('id', 'DESC')->get();
          $statusConfig = "<a href='/pengaturan'><img src='{{ asset('/images/setting.png') }}' alt='search' width='15px'/></a>";
        }

        $listSur = DB::table('kategori_artikel')->where('id',3)->first();
        // dd($sliderArtikel);

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
        $shortContentAbout = DB::table('kategori_artikel')->where('id',11)->first();

        // variable jenis kanker dan nama kanker
        $listingKankers = DB::table('kanker')->where('published',1)->orderBy('id', 'DESC')->get();
        // variable journal onkologi terbaru
        $listingJurnal = DB::table('artikel')
                          ->leftJoin('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat')
                          ->select('artikel.*', 'kategori_artikel.slug AS slugkat', 'kategori_artikel.intro' )
                          ->where('artikel.idKat',2)
                          ->limit(3)
                          ->orderBy('artikel.publishDate', 'DESC')
                          ->get();
        // variable news terbaru
        //$sliderArtikel = DB::table('artikel')->where('idKat',3)->limit(1)->orderBy('id', 'DESC')->first();
        $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('publishDate', 'DESC')->get();
        // all data variable to views
        $listingPartners = DB::table('partner')->limit(6)->orderBy('id', 'DESC')->get();

        $data = array('title' => $siteConfig->pvar2,
                      'copyright'=>$siteConfig->pvar3,
                      'statusLogin'=>$statusLogin,
                      'statusConfig'=>$statusConfig,
                      'titleAbout'=>$shortContentAbout->title,
                      'contentAbout'=>$shortContentAbout->intro,
                      // 'titleStory' => $sliderArtikel->title,
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
      $jenisKanker = DB::table("kanker")->where("idKat",$id)->pluck("title","id");
      return json_encode($jenisKanker);
    }
}