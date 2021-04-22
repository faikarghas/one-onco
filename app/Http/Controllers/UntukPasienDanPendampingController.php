<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;
use App\Models\Artikel_model;

class UntukPasienDanPendampingController extends Controller
{
    public function pasien(Request $request){
        $segment = $request->segment(1);
        DB::enableQueryLog(); // Enable query log before query
        $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();

        //dd(DB::getQueryLog()); // after query
        //dd($content_kategori);


        $id_kategori = $content_kategori->id;
        $title_header = $content_kategori->intro;
        $tagline_header = $content_kategori->content;
        $img_header = $content_kategori->image;

        $model  = new Artikel_model();
        $slug = 'test';
        $listingStory  = $model->all_kategori($id_kategori);


        $statusLogin = $this->checkLogin();
        
        $listingKatArtikel = DB::table('artikel')->where('idKat',4)->orderBy('id', 'ASC')->get();

        $viewData = DB::table('artikel')->where('id','83')->first();

        $data = [
            'statusLogin'=>$statusLogin,
            
            'listingStory'=>$listingStory,
            'slug'=>$slug,
            'pagesStory' => $listingStory,
            'listingKatArtikel'=>$listingKatArtikel,
            'titlePages' => $viewData->title,
            'contentPages' => $viewData->content
        ];

        return view ('v_untukPasien', $data);
    }

    public function detailPasien(Request $request){
        $segment = $request->segment(1);
        $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();
        $id_kategori = $content_kategori->id;
        $title_header = $content_kategori->intro;
        $tagline_header = $content_kategori->content;
        $img_header = $content_kategori->image;
        $model  = new Artikel_model();

        $listingStory  = $model->all_kategori($id_kategori);

        $statusLogin = $this->checkLogin();

        $listingKatArtikel = DB::table('artikel')->where('idKat',4)->orderBy('id', 'ASC')->get();
        $slug = $request->segment(2);
        $viewDataDetail =  DB::table('artikel')->where('slug',$slug)->first();


        // dd($listingKatArtikel);


        $data = [
            'statusLogin'=>$statusLogin,
            'listingStory'=>$listingStory,
            'slug'=>$slug,
            'pagesStory' => $listingStory,
            'listingKatArtikel'=>$listingKatArtikel,
            'titlePages'=>$viewDataDetail->title,
            'shortContent'=>$viewDataDetail->shortContent,
            'Content'=>$viewDataDetail->content
        ];

        return view ('v_untukPasienDetail', $data);
    }

    public function pendamping(Request $request){
        
        $segment2 = $request->segment(1);
        
        
        
        DB::enableQueryLog(); // Enable query log before query
        $content_kategori = DB::table('kategori_artikel')->where('slug',$segment2)->first();
        //dd(DB::getQueryLog());
        

        $id_kategori = $content_kategori->id;
        $title_header = $content_kategori->intro;
        $tagline_header = $content_kategori->content;
        $img_header = $content_kategori->image;

        $model  = new Artikel_model();
        $slug = $request->segment(1);
        $listingStory  = $model->all_kategori($id_kategori);

        $statusLogin = $this->checkLogin();

        $listingKatArtikel = DB::table('artikel')->where('idKat',5)->orderBy('id', 'ASC')->get();

        $viewData = DB::table('artikel')->where('id',91)->first();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingStory'=>$listingStory,
            'slug'=>$slug,
            'pagesStory' => $listingStory,
            'listingKatArtikel'=>$listingKatArtikel,
            'titlePages' => $viewData->title,
            'contentPages' => $viewData->content
        ];

        return view ('v_untukPendamping', $data);
    }

    public function detailPendamping(Request $request){
        $segment = $request->segment(1);
        $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();
        // dd($content_kategori);
        $id_kategori = $content_kategori->id;
        $title_header = $content_kategori->intro;
        $tagline_header = $content_kategori->content;
        $img_header = $content_kategori->image;
        $model  = new Artikel_model();
        $slug = $request->segment(2);
        $listingStory  = $model->all_kategori($id_kategori);
        $statusLogin = $this->checkLogin();
        $listingKatArtikel = DB::table('artikel')->where('idKat',5)->orderBy('id', 'ASC')->get();

        $viewDataDetail =  DB::table('artikel')->where('slug',$slug)->first();
  

        $data = [
            'statusLogin'=>$statusLogin,
            'listingStory'=>$listingStory,
            'slug'=>$slug,
            'pagesStory' => $listingStory,
            'listingKatArtikel'=>$listingKatArtikel,
            'titlePages'=>$viewDataDetail->title,
            'shortContent'=>$viewDataDetail->shortContent,
            'Content'=>$viewDataDetail->content

        ];

        return view ('v_untukPendampingDetail', $data);
    }
}
