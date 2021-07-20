<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artikel_model;
use App\Models\ArtikelKategori_model;
use App\Models\Customer_model;
use Illuminate\Pagination\Paginator;

class BeritaDanJurnalController extends Controller
{
    public function index(Request $request){
      $siteConfig   = DB::table('global_data')->first();
      $listnews = $this->getnews();

      // get all atribut pages
      $slugKat = $request->segment(1);
      //dd($slugKat);
      $listAttribute = $this->getPages($slugKat);
      //dd($listAttribute);

      $id_kategori = $listAttribute->id;
      ($id_kategori);
      $titleHeader = $listAttribute->title;
      $taglineHeader = $listAttribute->intro;
      $img_header = $listAttribute->image;


      // $column_name= array('idKat','publishDate');
      // if (!in_array($request->firstname, $column_name, true)){
      //   //you can add whatever result here if not found
      //  return;
      // }


      $model  = new Artikel_model();

      //$listingStory  = $model->all_kategori($id_kategori);
      $listingStory  = Artikel_model::join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat',)->where('artikel.idKat','=',$id_kategori)->orderBy('artikel.publishDate','desc')->paginate(5);

     // dd($listingStory);


     

      // listing news 3 rows
      // $listingNews = DB::table('artikel')->where('idKat',$id_kategori)->limit(5)->orderBy('publishDate', 'DESC')->get();
      
      // model raws
      //$listingNews = DB::table('artikel')->whereRaw('idKat=?',[$id_kategori])->orderBy('publishDate', 'DESC')->paginate(5);

      // elequent 
      $listingNews = Artikel_model::where('idkat' ,'=', $id_kategori)->skip(0)->take(5)->orderBy('publishDate','desc')->get();
      
      //dd($listingNews);

      $moreDatas = Artikel_model::select('*')->limit(8)->skip('5')->get();
      //dd($moreDatas);

      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'img_header' =>$img_header,
                    'titleHeader' =>$titleHeader,
                    'taglineHeader' => $taglineHeader,
                    'listingStory' => $listingStory,
                    'pagesStory' => $listingStory,
                    'listingNews'=>$listingNews,
                    'moreData'=>$moreDatas
                  );

      // dd($segment);
      return view ('v_beritaTerkini', $data);
    }
    public function detail($slug, Request $request){
      $siteConfig   = DB::table('global_data')->first();

      // header title and image
      $segment = $request->segment(1);
      
      // sqlRaw
      //$content_kategori = DB::table('kategori_artikel')->whereRaw('slug=?',[$segment])->first();
      
      $content_kategori = ArtikelKategori_model::where('slug', '=' , $segment)->first(); 

      $id_kategori = $content_kategori->id;
      $title_header = $content_kategori->intro;
      $tagline_header = $content_kategori->content;
      $img_header = $content_kategori->image;


      // detail News/artikel/story
      $segment2 = $request->segment(2);
      $model  = new Artikel_model();
      
      $detailStory  = Artikel_model::join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat',)->where('artikel.slug','=',$slug)->orderBy('artikel.id','desc')->first();

      $yearCurrent  = date('Y');
      $dateNewsDetail =  date('Y', strtotime($detailStory->publishDate));
      if ($yearCurrent == $dateNewsDetail ){
          $dateDetail =  date('d M', strtotime($detailStory->publishDate));
      } else {
          $dateDetail =  date('Y-d-mm', strtotime($detailStory->publishDate));
      }


      // other artikel
      $id =  $detailStory->id;
      $otherModel  = new Artikel_model();
      //$otherStory  = $model->otherArticle($id, $id_kategori);
      $otherStory  = Artikel_model::join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat')->where('artikel.idKat','=',$id_kategori)->whereNotIn('artikel.id',[$id])->orderBy('artikel.publishDate','desc')->paginate(3);

      //dd($otherStory);
     
      // listing news 3 rows
      //$listingNews = DB::table('artikel')->whereRaw('idKat=?',1)->limit(3)->orderBy('publishDate', 'DESC')->get();
      $listingNews = Artikel_model::where('idkat' ,'1')->skip(0)->take(3)->orderBy('publishDate','desc')->get();

      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'titleStory'=>$detailStory->title,
                    'dateStory'=>$dateDetail,
                    'authorStory'=>$detailStory->shortContent,
                    'contentStory'=>$detailStory->content,
                    'otherStory'=>$otherStory,
                    'slugStory' => 'testt',
                    'listingNews'=>$listingNews,
                    'imageNews' => $detailStory->imgDesktop
                  );
      return view ('v_beritaTerkiniDetail', $data);
  }

  public function loadMore($offset,$idKat){

    

    //$data = DB::table('artikel')->whereRaw('idKat=?',[$idKat])->skip($offset)->take(8)->orderBy('publishDate', 'DESC')->get();

    $data = Artikel_model::where('idkat' ,'=', $idKat)->skip($offset)->take(8)->orderBy('publishDate','desc')->get();


    return response()->json($data);
  }
}
