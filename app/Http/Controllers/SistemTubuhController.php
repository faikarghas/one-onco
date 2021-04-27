<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;

class SistemTubuhController extends Controller
{
    public function index($lokasi,Request $request){

        $listnews = $this->getnews();
        $data = [
            
            'lokasi'=>$lokasi,
            'jenis'=>$jenis,
            'listingNews'=>$listnews
        ];
        return view ('v_sistemJenisKanker', $data);
    }

    public function sistemTubuhDetail($jenis){
        $listnews = $this->getnews();
        $katKankers = DB::table('kategori_kanker')->pluck("title","id");

        // view data sistem tubuh 

        $viewData = DB::table('kanker')
                    ->where('slug',$jenis)
                    ->first();
        $data = [
            'jenis'=>$jenis,
            'titleKanker'=>$viewData->title,
            'contentKanker'=>$viewData->content,
            'listingNews'=>$listnews,
            'katKankers'=>$katKankers
        ];
        return view ('v_sistemJenisKanker', $data);
    }

}
