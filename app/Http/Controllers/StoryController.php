<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artikel_model;
use App\Models\Customer_model;
use Illuminate\Pagination\Paginator;

class StoryController extends Controller
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
 
      // listing all story with load more
      $segment = $request->segment(1);
      $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first(); 
      $id_kategori = $content_kategori->id;
      $title_header = $content_kategori->intro;
      $tagline_header = $content_kategori->content;
      $img_header = $content_kategori->image;
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
      
      return view ('v_ceritaSurvivor', $data);
    }


    public function detail($slug, Request $request){

      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();    
      // check sebagai customer apa bukan
      if(Session()->get('username')=="") {
        $statusLogin = "<a href='/login'>LOGIN</a>";
      } else {
        $statusLogin = "<a href='/logout'>LOGOUT</a>";
      }
      // header title and image
      $segment = $request->segment(1);
      $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first(); 
      $id_kategori = $content_kategori->id;
      $title_header = $content_kategori->intro;
      $tagline_header = $content_kategori->content;
      $img_header = $content_kategori->image;

      // listing detail story
      $segment2 = $request->segment(2);
      $model  = new Artikel_model();
      $detailStory  = $model->detail($segment2);

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
      
      return view ('v_ceritaSurvivorDetail', $data);
    }
}
