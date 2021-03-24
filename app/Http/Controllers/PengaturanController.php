<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\News_model;
use App\Models\Customer_model;

class PengaturanController extends Controller
{

    public function index(){
        $listnews = $this->getnews();
        $statusLogin = $this->checkLogin();

        $data = [
            'statusLogin'=>$statusLogin,
            'listingNews'=>$listnews
        ];

        return view ('v_pengaturan', $data);
    }

}
