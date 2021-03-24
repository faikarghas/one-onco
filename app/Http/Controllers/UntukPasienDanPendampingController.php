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

    public function pasien(){
        $listnews = $this->getnews();
        $statusLogin = $this->checkLogin();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingNews'=>$listnews
        ];

        return view ('v_untukPasien', $data);
    }

    public function detailPasien(Request $request){
        $segment = $request->segment(1);
        $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();
        $id_kategori = $content_kategori->id;
        $title_header = $content_kategori->intro;
        $tagline_header = $content_kategori->content;
        $img_header = $content_kategori->img;
        $model  = new Artikel_model();
        $slug = 'test';
        $listingStory  = $model->all_kategori($id_kategori);

        $statusLogin = $this->checkLogin();


        // dd($listingStory);


        $data = [
            'statusLogin'=>$statusLogin,
            'listingStory'=>$listingStory,
            'slug'=>$slug,
            'pagesStory' => $listingStory,
        ];

        return view ('v_untukPasienDetail', $data);
    }

    public function pendamping(){
        $listnews = $this->getnews();
        $statusLogin = $this->checkLogin();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingNews'=>$listnews
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
        $img_header = $content_kategori->img;
        $model  = new Artikel_model();
        $slug = 'test';
        $listingStory  = $model->all_kategori($id_kategori);
        $statusLogin = $this->checkLogin();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingStory'=>$listingStory,
            'slug'=>$slug,
            'pagesStory' => $listingStory,

        ];

        return view ('v_untukPendampingDetail', $data);
    }
}
