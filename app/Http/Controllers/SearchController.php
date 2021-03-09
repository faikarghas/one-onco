<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;

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

      return view ('v_searchResult', $data);
    }
}
