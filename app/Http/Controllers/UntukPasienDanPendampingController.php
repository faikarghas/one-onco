<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;

class UntukPasienDanPendampingController extends Controller
{

    public function pasien(){
        $listnews = $this->getnews();
        $statusLogin = $this->checkLogin();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingNews'=>$listnews
        ];

        return view ('v_untukPasien', $data);
    }

    public function detailPasien($slug){
        $listnews = $this->getnews();
        $statusLogin = $this->checkLogin();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingNews'=>$listnews,
            'slug'=>$slug
        ];

        return view ('v_untukPasienDetail', $data);
    }

    public function pendamping(){
        $listnews = $this->getnews();
        $statusLogin = $this->checkLogin();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingNews'=>$listnews
        ];

        return view ('v_untukPendamping', $data);
    }

    public function detailPendamping($slug){
        $listnews = $this->getnews();
        $statusLogin = $this->checkLogin();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingNews'=>$listnews,
            'slug'=>$slug
        ];

        return view ('v_untukPendampingDetail', $data);
    }
}
