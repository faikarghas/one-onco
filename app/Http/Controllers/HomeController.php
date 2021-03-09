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
        $sliderArtikel = DB::table('artikel')->where('idKat',3)->limit(1)->orderBy('id', 'DESC')->first();
        } else {
        // tampilakan  slider news story bedasarkan jenis kanker customer
        $statusLogin = "<a href='/logout'>LOGOUT</a>";
        $sliderArtikel = DB::table('artikel')->where('idKat',3)->limit(1)->orderBy('id', 'DESC')->first();
        }

        //var_dump ($sliderArtikel);
        //variable  data about us ( general)
        $shortContentAbout = DB::table('kategori_artikel')->where('id',6)->first();
        
        // variable jenis kanker dan nama kanker
        $katKankers = DB::table('kategori_kanker')->pluck("title","id");

        // variable journal onkologi terbaru
        $listingJurnal = DB::table('artikel')->where('idKat',2)->limit(3)->orderBy('id', 'DESC')->get();
        // variable news terbaru
        //$sliderArtikel = DB::table('artikel')->where('idKat',3)->limit(1)->orderBy('id', 'DESC')->first();
        $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('id', 'DESC')->get();
        // all data variable to views 
        
        //var_dump($listingJurnal);

        $data = array('title' => $siteConfig->pvar2,
                      'copyright'=>$siteConfig->pvar3,
                      'statusLogin'=>$statusLogin,
                      'titleAbout'=>$shortContentAbout->title,
                      'contentAbout'=>$shortContentAbout->content,
                      'titleStory' => $sliderArtikel->title,
                      'shortStory' => $sliderArtikel->shortContent,
                    //   'slugStory' => $sliderArtikel->slug
                      'slugStory' => 'testt',
                      'listingJurnal'=>$listingJurnal,
                      'listingNews'=>$listingNews
                    //   'katKankers' => compact('katKankers')
                      

                    );


    	return view ('v_home', $data,compact('katKankers'));
    }
    
    public function getJenisKanker($id) {
        $jenisKanker = DB::table("kanker")->where("idKat",$id)->pluck("title","id");
        return json_encode($jenisKanker);
    }
}