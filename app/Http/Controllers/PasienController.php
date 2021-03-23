<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
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
    
    return view ('v_ceritaSurvivor', $data);
}
