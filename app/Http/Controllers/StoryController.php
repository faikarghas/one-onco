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
      // get all atribut pages
      $slugKat = $request->segment(1);
      $listAttribute = $this->getPages($slugKat);
      // $segment = $request->segment(1);
      // $content_kategori = DB::table('kategori_artikel')->where('slug',$segment)->first();

      $id_kategori =  $listAttribute->id;
      $title_header = $listAttribute->title;
      $tagline_header = $listAttribute->intro;
      $img_header =$listAttribute->image;

      $model  = new Artikel_model();
      $listingStory  = $model->all_kategori($id_kategori);

      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('publishDate', 'DESC')->get();

      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
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

      $slugKat = $request->segment(1);
      $listAttribute = $this->getPages($slugKat);
      $title_header = $listAttribute->title;
      $tagline_header = $listAttribute->intro;

      // other artikel
      $id =  $detailStory->id;
      $otherModel  = new Artikel_model();
      $otherStory  = $model->otherArticle($id, $id_kategori);

      // listing news 3 rows
      $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('id', 'DESC')->get();

      // dd($listingNews);
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'titleStory'=>$detailStory->title,
                    'authorStory'=>$detailStory->shortContent,
                    'contentStory'=>$detailStory->content,
                    'imageStory'=>$detailStory->imgDesktop,
                    'otherStory'=>$otherStory,
                    'slugStory' => 'testt',
                    'listingNews'=>$listingNews,
                    'title_header' =>$title_header,
                    'tagline_header' => $tagline_header
                  );
      return view ('v_ceritaSurvivorDetail', $data);
    }
  
    public function load_data(Request $request)
  {  
    $slugKat = $request->segment(1);
    $listAttribute = $this->getPages($slugKat);
    $id_Kat = $listAttribute->id;

    $test = "loadMore";

    if($request->ajax())
     {
      if($request->id > 0)
      {
       $data = DB::table('artikel')
          ->where('id','<', $request->id)
          ->where('idKat', $id_Kat)
          ->orderBy('publishDate', 'DESC')
          ->limit(8)
          ->skip(5)
          ->get();
        dd( $request->id);
      }
      $output = '';
      $last_id = '';
      
      if(!$data->isEmpty())
      {
       foreach($data as $row)
       {

        $date =  date('d-M-Y', strtotime($row->publishDate));
        $output .= '
        <div class="col-12 col-lg-3 mt-5">
          <div class="boxNews smallBox">
            <div class="boxImage">
              <img src="/data_artikel/'.$row->imgDesktop.'" alt="">
            </div>
            <div class="boxInformation">     
                <div class="title">
                    <h3 class="mt-2">'.$row->title.'</h3>
                    <p class="author">'.$row->shortContent.'</p>
                </div>
              <div class="dateFormat">
                  <p>'.$date.'</p>
              </div>
              </div>
          </div>
        </div>
        ';
        $last_id = $row->id;
       }

       
      }
      else
      {
      
      }
      echo $output;
     }
  }
}
