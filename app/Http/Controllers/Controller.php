<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\News_model;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getnews(){
        $listingNews = DB::table('artikel')->where('idKat',1)->limit(3)->orderBy('id', 'DESC')->get();
        return $listingNews;
    }

    public function checkLogin(){
        // check sebagai customer apa bukan
        if(Session()->get('username')=="") {
          $statusLogin = "<a href='/login'>LOGIN</a>";
        } else {
          $statusLogin = "<a href='/logout'>LOGOUT</a>";
        }
        return $statusLogin;
    }
}
