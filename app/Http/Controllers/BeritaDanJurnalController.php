<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artikel_model;
use App\Models\Customer_model;
use Illuminate\Pagination\Paginator;

class BeritaDanJurnalController extends Controller
{
    public function berita(Request $request){
      $siteConfig   = DB::table('global_data')->first();
      $listnews = $this->getnews();
      $statusLogin = $this->checkLogin();

      // listing all story with load more
      $segment = $request->segment(1);
      $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();
      $id_kategori = $content_kategori->id;
      $title_header = $content_kategori->intro;
      $tagline_header = $content_kategori->content;
      $img_header = $content_kategori->img;
      $model  = new Artikel_model();
      $listingStory  = $model->all_kategori($id_kategori);

      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('id', 'DESC')->get();
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin,
                    'slugStory' => 'testt',
                    'img_header' =>$img_header,
                    'title_header' =>$title_header,
                    'tagline_header' => $tagline_header,
                    'listingStory' => $listingStory,
                    'pagesStory' => $listingStory,
                    'listingNews'=>$listingNews
                  );

      // dd($segment);

      return view ('v_beritaTerkini', $data);
    }
    public function beritaDetail($slug, Request $request){
      $siteConfig   = DB::table('global_data')->first();

      $statusLogin = $this->checkLogin();

      // header title and image
      $segment = $request->segment(1);
      $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();
      $id_kategori = $content_kategori->id;
      $title_header = $content_kategori->intro;
      $tagline_header = $content_kategori->content;
      $img_header = $content_kategori->img;

      // listing detail story
      $segment2 = $request->segment(2);
      $model  = new Artikel_model();
      $detailStory  = $model->detail($segment2);
      // dd($detailStory);

      // other artikel
      $id =  $detailStory->id;
      $otherModel  = new Artikel_model();
      $otherStory  = $model->otherArticle($id, $id_kategori);
      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('id', 'DESC')->get();
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin,
                    'titleStory'=>$detailStory->title,
                    'authorStory'=>$detailStory->shortContent,
                    'contentStory'=>$detailStory->content,
                    'otherStory'=>$otherStory,
                    'slugStory' => 'testt',
                    'listingNews'=>$listingNews
                  );

      return view ('v_beritaTerkini', $data);
    }

    public function jurnal(Request $request){
      $siteConfig   = DB::table('global_data')->first();
      $listnews = $this->getnews();
      $statusLogin = $this->checkLogin();

      // listing all story with load more
      $segment = $request->segment(1);
      $content_kategori = DB::table('kategori_artikel')->where('slug','artikel-kanker')->first();
      $id_kategori = $content_kategori->id;
      $title_header = $content_kategori->intro;
      $tagline_header = $content_kategori->content;
      $img_header = $content_kategori->img;
      $model  = new Artikel_model();
      $listingStory  = $model->all_kategori($id_kategori);

      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',2)->limit(3)->orderBy('id', 'DESC')->get();
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin,
                    'slugStory' => 'testt',
                    'img_header' =>$img_header,
                    'title_header' =>$title_header,
                    'tagline_header' => $tagline_header,
                    'listingStory' => $listingStory,
                    'pagesStory' => $listingStory,
                    'listingNews'=>$listingNews
                  );

      return view ('v_jurnalOnkologi', $data);
    }
    public function jurnalDetail($slug, Request $request){
      $siteConfig   = DB::table('global_data')->first();

      $statusLogin = $this->checkLogin();

      // header title and image
      $segment = $request->segment(1);
      $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();
      $id_kategori = $content_kategori->id;
      $title_header = $content_kategori->intro;
      $tagline_header = $content_kategori->content;
      $img_header = $content_kategori->img;

      // listing detail story
      $segment2 = $request->segment(2);
      $model  = new Artikel_model();
      $detailStory  = $model->detail($segment2);

      // other artikel
      $id =  $detailStory->id;
      $otherModel  = new Artikel_model();
      $otherStory  = $model->otherArticle($id, $id_kategori);

      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',2)->limit(3)->orderBy('id', 'DESC')->get();
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin,
                    'titleStory'=>$detailStory->title,
                    'authorStory'=>$detailStory->shortContent,
                    'contentStory'=>$detailStory->content,
                    'otherStory'=>$otherStory,
                    'slug' => 'testt',
                    'listingNews'=>$listingNews
                  );

      return view ('v_jurnalOnkologiDetail', $data);
    }
}
