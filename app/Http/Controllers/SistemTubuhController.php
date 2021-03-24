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
        $statusLogin = $this->checkLogin();
        $data = [
            'statusLogin'=>$statusLogin,
            'lokasi'=>$lokasi,
            'jenis'=>$jenis,
            'listingNews'=>$listnews
        ];
        return view ('v_sistemJenisKanker', $data);
    }

    public function sistemTubuhDetail($lokasi,$jenis){
        $listnews = $this->getnews();
        $statusLogin = $this->checkLogin();

        // view data sistem tubuh 

        $viewData = DB::table('kanker')
                    ->where('slug',$jenis)
                    ->first();
        //dd($viewData);

        $data = [
            'statusLogin'=>$statusLogin,
            'lokasi'=>$lokasi,
            'jenis'=>$jenis,
            'titleKanker'=>$viewData->title,
            'contentKanker'=>$viewData->content,
            'listingNews'=>$listnews
        ];

        return view ('v_sistemJenisKanker', $data);
    }

}
