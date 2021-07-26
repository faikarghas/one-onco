<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;
use App\Models\Artikel_model;
use App\Models\DokterMapped_model;
use App\Models\Faskes_model;

class SearchController extends Controller
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

      $data = ['statusLogin'=>$statusLogin];

      $searchTerm = $request->textInput;
      
      $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
      $searchTerm = str_replace($reservedSymbols, ' ', $searchTerm);
      
      $searchValues = preg_split('/\s+/', $searchTerm, -1, PREG_SPLIT_NO_EMPTY);
      
      $res = Artikel_model::join('kategori_artikel', 'artikel.idKat', '=', 'kategori_artikel.id')->select('artikel.id','artikel.title','artikel.shortContent','artikel.publishDate','artikel.slug as slug1','kategori_artikel.slug as slug2')->where(function ($q) use ($searchValues) {
        foreach ($searchValues as $value) {
          $q->orWhere('artikel.title', 'like', "%{$value}%");
          }
      })->get();

      //dd($res);
  
      $resDokter = DokterMapped_model::where(function ($q) use ($searchValues) {
        foreach ($searchValues as $value) {
          $q->orWhere('fullname', 'like', "%{$value}%");
          }
      })->get();

      $resFaskes = Faskes_model::where(function ($q) use ($searchValues) {
        foreach ($searchValues as $value) {
          $q->orWhere('namaFaskes', 'like', "%{$value}%");
          }
      })->get();

    



      $data = array(
      'titleResult'  => $searchTerm,
      'resultArtikel' => $res,
      'resultDokter'=> $resDokter,
      'resultFaskes'=> $resFaskes
    );

       return view ('v_searchResult', $data);
    }
}
