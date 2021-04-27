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
    public function index(Request $request){
      $siteConfig   = DB::table('global_data')->first();
      $listnews = $this->getnews();

      // get all atribut pages
      $slugKat = $request->segment(1);
      $listAttribute = $this->getPages($slugKat);


      $id_kategori = $listAttribute->id;
      $titleHeader = $listAttribute->title;
      $taglineHeader = $listAttribute->intro;
      $img_header = $listAttribute->image;

      $model  = new Artikel_model();
      $listingStory  = $model->all_kategori($id_kategori);

      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',$id_kategori)->limit(3)->orderBy('publishDate', 'DESC')->get();
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'img_header' =>$img_header,
                    'titleHeader' =>$titleHeader,
                    'taglineHeader' => $taglineHeader,
                    'listingStory' => $listingStory,
                    'pagesStory' => $listingStory,
                    'listingNews'=>$listingNews
                  );

      // dd($segment);

      return view ('v_beritaTerkini', $data);
    }
    public function detail($slug, Request $request){
      $siteConfig   = DB::table('global_data')->first();

    
      // header title and image
      $segment = $request->segment(1);
      $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();
      $id_kategori = $content_kategori->id;
      $title_header = $content_kategori->intro;
      $tagline_header = $content_kategori->content;
      $img_header = $content_kategori->image;

      // detail News/artikel/story
      $segment2 = $request->segment(2);
      $model  = new Artikel_model();
      $detailStory  = $model->detail($segment2);
      
      $yearCurrent  = date('Y');
      $dateNewsDetail =  date('Y', strtotime($detailStory->publishDate));
      if ($yearCurrent == $dateNewsDetail ){
          $dateDetail =  date('d M', strtotime($dateNewsDetail));
      } else {
          $dateDetail =  date('Y-d-mm', strtotime($dateNewsDetail));
      }
                                              

      // other artikel
      $id =  $detailStory->id;
      $otherModel  = new Artikel_model();
      $otherStory  = $model->otherArticle($id, $id_kategori);

      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('id', 'DESC')->get();
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'titleStory'=>$detailStory->title,
                    'dateStory'=>$dateDetail,
                    'authorStory'=>$detailStory->shortContent,
                    'contentStory'=>$detailStory->content,
                    'otherStory'=>$otherStory,
                    'slugStory' => 'testt',
                    'listingNews'=>$listingNews
                  );
      return view ('v_beritaTerkiniDetail', $data);
  }
}
