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
use App\Constants\GlobalConstants;

class DirectoryController extends Controller
{
    public function index(Request $request){
      // GET variable from global data for website
      $siteConfig   = DB::table('global_data')->first();
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                  );
      return view ('v_direktoriKanker', $data);
    }
    public function dokter(){
      $siteConfig   = DB::table('global_data')->first();
      // filter select option
      $cities = DB::table('indonesia_provinces')->pluck("name","id");
      $spesialis = DB::table('dokter_spesialis')->where('parentId',2)->pluck("title","id");
      // dokter all
      $dokters = Dokter_model::getDokters('', GlobalConstants::ALL, GlobalConstants::ALL, GlobalConstants::ALL);
      //dd($dokters);
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'dokter'=>$dokters
                  );
      return view ('v_direktoriDokter', $data,compact('cities','spesialis'));
    }
    public function getMoreDokters(Request $request){
      $query = $request->search_query;
      $spesialis = $request->spesialis;
      $provinsi = $request->provinsi;
      $kabupaten = $request->kabupaten;
      $dokter = Dokter_model::getDokters($query,$spesialis,$provinsi,$kabupaten);

      return view('components.presentational.boxResultFilterDirectoryDokter', compact('dokter'))->render();
    }
    public function getDokterDetail($id, Request $request) {
      $siteConfig   = DB::table('global_data')->first();
      $dokterDetail = DB::table('dokter')
        ->select('dokter.dokterId', 'dokter.fullname', 'dokter.subSpesialist')
        ->where('dokter.dokterId',$id)
        ->first();

      $fullname = $dokterDetail->fullname;
      $layanan = $dokterDetail->subSpesialist;
      $idDokter = $id;

      $viewFaskes = DB::table('faskes')
          ->join('jadwal_dokter', 'jadwal_dokter.faskesId', '=', 'faskes.faskesId','LEFT')
          ->select('faskes.faskesId','faskes.namaFaskes', 'faskes.alamat', 'faskes.provinsi', 'faskes.kabupaten','faskes.website','faskes.phone')
          ->distinct('faskes.namaFaskes')
          ->where('jadwal_dokter.dokterId', $idDokter)->get();
      $cities = DB::table('indonesia_provinces')->pluck("name","id");
      $spesialis = DB::table('dokter_spesialis')->where('parentId',2)->pluck("title","id");
      $data = array('title' => $siteConfig->pvar2,
                      'copyright'=>$siteConfig->pvar3,
                      'fullname'=>$fullname,
                      'layanan'=>$layanan,
                      'dokterPraktek'=>$viewFaskes,
                      'cities'=>$cities,
                      'spesialis'=>$spesialis
                    );
      return view ('v_direktoriDokter', $data);
  }

  // GET Care Center (Faskes)

  public function carehome(){
    // GET variable from global data for website
    $siteConfig   = DB::table('global_data')->first();
    $provinces = DB::table('indonesia_provinces')->pluck("name","id");
    $cities = DB::table('indonesia_provinces')->pluck("name","id");
    $spesialis = DB::table('dokter_spesialis')->where('parentId',2)->pluck("title","id");
    // main page

    $faskess = Faskes_model::getFaskes('', GlobalConstants::ALL, GlobalConstants::ALL, GlobalConstants::ALL);

    //dd($faskess);

    $data = array('title' => $siteConfig->pvar2,
                  'copyright'=>$siteConfig->pvar3,
                  'faskes'=>$faskess
                );
    return view ('v_direktoriCare', $data,compact('provinces','spesialis','cities'));
  }

  public function getMoreFaskes(Request $request){
    $query = $request->search_query;
    $spesialis = $request->spesialis;
    $provinsi = $request->provinsi;
    $kabupaten = $request->kabupaten;
    $faskes = Faskes_model::getFaskes($query,$spesialis,$provinsi,$kabupaten);
    return view('components.presentational.boxResultFilterDirectoryFaskes', compact('faskes'))->render();
  }

  public function care($id,Request $request){

    // GET variable from global data for website
    $siteConfig   = DB::table('global_data')->first();

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

    $provinces = DB::table('indonesia_provinces')->pluck("name","id");
    $cities = DB::table('indonesia_provinces')->pluck("name","id");

    // view dokter praktek by Faskes
    $viewDokter = DB::table('dokter')
    ->join('jadwal_dokter', 'jadwal_dokter.dokterId', '=', 'dokter.dokterId','LEFT')
    ->select('dokter.id', 'dokter.fullname')
    ->distinct('dokter.fullname')
    ->where('jadwal_dokter.faskesId', $id)
    ->get();

    //dd($viewDokter);

    $data = array('title' => $siteConfig->pvar2,
                  'copyright'=>$siteConfig->pvar3,
                  'name'=>$namaFaskes,
                  'address'=>$addressFaskes,
                  'fax'=>$phoneFax,
                  'phone'=>$phoneFaskes,
                  'website'=>$websiteFaskes,
                  'viewDokter' => $viewDokter,
                  'provinces' => $provinces,
                  'cities' => $cities
                );
    return view ('v_direktoriCare', $data);
  }




    public function getCities($id) {
      $faskes = DB::table("indonesia_cities")->where("province_id",$id)->pluck("name","id");
      return json_encode($faskes);
    }
    public function getDokter($id) {
      $viewDokter = DB::table("dokter_mapped")->select('dokterId', 'fullname', 'subSpesialist' )->where("provinsi",$id)->distinct()->get();
      return response()->json($viewDokter);
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



  public function getDokterWithKabupaten($id) {
    $viewDokter = DB::table("dokter_mapped")->select('dokterId', 'fullname' )->where("kabupaten",$id)->distinct()->get();
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








}
