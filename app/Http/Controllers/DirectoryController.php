<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Dokter_model;
use App\Models\Kanker_model;
use App\Models\Customer_model;
use App\Models\Faskes_model;

class DirectoryController extends Controller
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
      // main page
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin
                  );
      return view ('v_direktoriKanker', $data);
    }
    public function dokter(){

      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();
      // check sebagai customer apa bukan
      if(Session()->get('username')=="") {
        $statusLogin = "<a href='/login'>LOGIN</a>";
      } else {
        $statusLogin = "<a href='/logout'>LOGOUT</a>";
      }

      $cities = DB::table('indonesia_provinces')->pluck("name","id");

      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'statusLogin'=>$statusLogin
                  );

      return view ('v_direktoriDokter', $data,compact('cities'));
    }

    public function getCities($id) {
      $faskes = DB::table("indonesia_cities")->where("province_id",$id)->pluck("name","id");
      return json_encode($faskes);
  }

    public function getDokter($id) {

      // DB::table('artikel')->where('idKat',2)->limit(3)->orderBy('id', 'DESC')->get();
      // $viewDokter = DB::table("dokter_mapped")->where("provinsi",$id)->distinct('dokterId','provinsi','kabupaten')->get();
      $viewDokter = DB::table("dokter_mapped")->select('dokterId', 'NamaDokterDenganGelar', 'unit' )->where("provinsi",$id)->distinct()->get();

      return response()->json($viewDokter);
      // return json_encode($viewDokter);
  }


  public function getFaskes($id) {

    $viewFaskes = DB::table("faskes")
    ->join('indonesia_cities', 'indonesia_cities.id', '=', 'faskes.kabupaten','LEFT')
    ->select('faskesId', 'NamaFaskes', 'alamat','kodepos', 'phone','fax', 'email','website', 'indonesia_cities.name AS propinsi')
    ->where("provinsi",$id)
    ->get();
    return response()->json($viewFaskes);
}

public function getFaskesWithPropinsi($id) {

  $faskes = DB::table("faskes")->where("provinsi",$id)->pluck("namaFaskes","faskesid");
  return json_encode($faskes);
}

public function getFaskesWithKabupaten($id) {

  $viewFaskes = DB::table("faskes")
    ->join('indonesia_cities', 'indonesia_cities.id', '=', 'faskes.kabupaten','LEFT')
    ->select('faskesId', 'NamaFaskes', 'alamat','kodepos', 'phone','fax', 'email','website', 'indonesia_cities.name AS propinsi')
    ->where("kabupaten",$id)
    ->get();
    return response()->json($viewFaskes);
}

  public function getDokterDetail($id, Request $request) {


    $siteConfig   = DB::table('global_data')->first();

    // GET variable from global data for website
    $siteConfig   = DB::table('global_data')->first();
    // check sebagai customer apa bukan
    if(Session()->get('username')=="") {
      $statusLogin = "<a href='/login'>LOGIN</a>";
    } else {
      $statusLogin = "<a href='/logout'>LOGOUT</a>";
    }


    // Dokter Detail
    $dokterDetail = DB::table('dokter')
      ->join('jadwal_dokter', 'jadwal_dokter.dokterId', '=', 'jadwal_dokter.dokterId','LEFT')
      ->join('faskes_layanan', 'jadwal_dokter.unitOperasional', '=', 'faskes_layanan.Id','LEFT')
      ->select('dokter.id', 'dokter.fullname', 'faskes_layanan.name','jadwal_dokter.jadwal')
      ->where('dokter.id',$id)
      ->first();

      $fullname = $dokterDetail->fullname;
      $layanan = $dokterDetail->name;
      //$fullname = $dokterDetail->fullname;

    // List Tempat Dokter Praktek

    $idDokter = $id;
    // $faskesModel  = new Faskes_model();
    // $listFaskes  = $faskesModel->allByDokter($idDokter);
    $viewFaskes = DB::table('faskes')
        ->join('jadwal_dokter', 'jadwal_dokter.faskesId', '=', 'faskes.faskesId','LEFT')
        ->select('faskes.faskesId','faskes.namaFaskes', 'faskes.alamat', 'faskes.provinsi', 'faskes.kabupaten','faskes.website')
        ->distinct('faskes.namaFaskes')
        ->where('jadwal_dokter.dokterId', $idDokter)->get();
        // ->dump();

    $cities = DB::table('indonesia_provinces')->pluck("name","id");

    $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'fullname'=>$fullname,
                    'layanan'=>$layanan,
                    'statusLogin'=>$statusLogin,
                    'dokterPraktek'=>$viewFaskes,
                    'cities'=>$cities
                  );
    return view ('v_direktoriDokterDetail', $data);

}

  public function getDokterWithKabupaten($id) {

    // DB::table('artikel')->where('idKat',2)->limit(3)->orderBy('id', 'DESC')->get();
    // $viewDokter = DB::table("dokter_mapped")->where("provinsi",$id)->distinct('dokterId','provinsi','kabupaten')->get();
    $viewDokter = DB::table("dokter_mapped")->select('dokterId', 'NamaDokterDenganGelar' )->where("kabupaten",$id)->distinct()->get();

    return response()->json($viewDokter);
    // return json_encode($viewDokter);
}

public function lab(){

  // GET variable from global data for website
  $siteConfig   = DB::table('global_data')->first();
  // check sebagai customer apa bukan
  if(Session()->get('username')=="") {
    $statusLogin = "<a href='/login'>LOGIN</a>";
  } else {
    $statusLogin = "<a href='/logout'>LOGOUT</a>";
  }

  $provinces = DB::table('indonesia_provinces')->pluck("name","id");


  // main page
  $data = array('title' => $siteConfig->pvar2,
                'copyright'=>$siteConfig->pvar3,
                'statusLogin'=>$statusLogin
              );
  return view ('v_direktoriLab', $data,compact('provinces'));
}

public function carehome(){

  // GET variable from global data for website
  $siteConfig   = DB::table('global_data')->first();
  // check sebagai customer apa bukan
  if(Session()->get('username')=="") {
    $statusLogin = "<a href='/login'>LOGIN</a>";
  } else {
    $statusLogin = "<a href='/logout'>LOGOUT</a>";
  }

  $provinces = DB::table('indonesia_provinces')->pluck("name","id");


  // main page
  $data = array('title' => $siteConfig->pvar2,
                'copyright'=>$siteConfig->pvar3,
                'statusLogin'=>$statusLogin
              );
  return view ('v_direktoriCare', $data,compact('provinces'));
}

  public function care($id,Request $request){

    // GET variable from global data for website
    $siteConfig   = DB::table('global_data')->first();
    // check sebagai customer apa bukan
    if(Session()->get('username')=="") {
      $statusLogin = "<a href='/login'>LOGIN</a>";
    } else {
      $statusLogin = "<a href='/logout'>LOGOUT</a>";
    }

    // view rumah sakit detail

    $viewFaskes = DB::table('faskes')
        ->select('faskes.faskesId','faskes.namaFaskes', 'faskes.alamat', 'faskes.provinsi', 'faskes.kabupaten', 'faskes.website','faskes.phone','faskes.fax')
        ->where('faskes.faskesId', $id)->first();
        // ->dump();

    $namaFaskes = $viewFaskes->namaFaskes;
    $addressFaskes = $viewFaskes->alamat;
    $phoneFaskes = $viewFaskes->phone;
    $phoneFax = $viewFaskes->fax;
    $websiteFaskes = $viewFaskes->website;

    // view dokter praktek by Faskes
    $viewDokter = DB::table('dokter')
    ->join('jadwal_dokter', 'jadwal_dokter.dokterId', '=', 'dokter.Id','LEFT')
    ->select('dokter.id', 'dokter.fullname','jadwal_dokter.jadwal')
    ->distinct('dokter.fullname')
    ->where('jadwal_dokter.faskesId', $id)
    ->get();
    //->dump();





    // main page
    $data = array('title' => $siteConfig->pvar2,
                  'copyright'=>$siteConfig->pvar3,
                  'statusLogin'=>$statusLogin,
                  'name'=>$namaFaskes,
                  'address'=>$addressFaskes,
                  'fax'=>$phoneFax,
                  'phone'=>$phoneFaskes,
                  'website'=>$websiteFaskes,
                  'viewDokter' => $viewDokter

                );
    return view ('v_direktoriCareDetail', $data);
  }




}
