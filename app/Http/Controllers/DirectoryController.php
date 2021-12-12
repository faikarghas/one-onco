<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Dokter_model;
use App\Models\DokterMapped_model;
use App\Models\DokterMap;
use App\Models\Kanker_model;
use App\Models\Customer_model;
use App\Models\Faskes_model;
use App\Models\DokterSpesialis_model;
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
      $spesialis = DokterSpesialis_model::where('parentId',2)->pluck("title","id");
      // dokter all
      $dokters = DokterMap::getDokters('', GlobalConstants::ALLSpec, GlobalConstants::ALLProv, GlobalConstants::ALLKab);
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'dokter'=>$dokters
                  );
      return view ('v_direktoriDokter', $data,compact('cities','spesialis'));
    }

    public function lab(){
      $siteConfig   = DB::table('global_data')->first();
      $cities = DB::table('indonesia_provinces')->pluck("name","id");
      $faskess = Faskes_model::getKomunitas('', GlobalConstants::ALLProv, GlobalConstants::ALLKab);
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'faskes'=>$faskess
                  );
      return view ('v_direktoriLab', $data,compact('cities'));
    }

    public function komunitasHome(){
      $siteConfig   = DB::table('global_data')->first();
      $cities = DB::table('indonesia_provinces')->pluck("name","id");
      $faskess = Faskes_model::getKomunitas('', GlobalConstants::ALLProv, GlobalConstants::ALLKab);
      $data = array('title' => $siteConfig->pvar2,
                    'copyright'=>$siteConfig->pvar3,
                    'faskes'=>$faskess
                  );
      return view ('v_direktoriLab', $data,compact('cities'));
    }
    public function getMoreDokters(Request $request){
      $query = strtolower($request->search_query);
      //dd($query);
      $spesialis = $request->spesialis;
      $provinsi = $request->provinsi;
      $kabupaten = $request->kabupaten;
      //DB::enableQueryLog();
      $dokter = DokterMap::getDokters($query,$spesialis,$provinsi,$kabupaten);
      //dd(DB::getQueryLog());
      //dd($dokter);
      //return view('components.presentational.boxResultFilterDirectoryDokter', compact('dokter'))->render();
      //dd($dokter);
      $data = array('dokter'=>$dokter);

      return view('components.presentational.boxResultFilterDirectoryDokter', $data);
    }

    public function getMoreFaskes(Request $request){
      $query = strtolower($request->search_query);
      //dd($query);
      //$spesialis = preg_replace("/[^A-Za-z0-9]/", "", $request->spesialis);
      $spesialis = $request->spesialis;
      
      $layanan = FaskerLayanan::where('title','=',$spesialis)->first();

      dd($layanan);

      $provinsi = $request->provinsi;
      //dd($provinsi);
      $kabupaten = $request->kabupaten;
      //DB::enableQueryLog();
      $faskes = Faskes_model::getFaskes($query,$spesialis,$provinsi,$kabupaten);
      
      $data = array(
        'faskes'=>$faskes
);

      return view('components.presentational.boxResultFilterDirectoryFaskes', $data);

      // return view('components.presentational.boxResultFilterDirectoryFaskes', compact('faskes'))->render();
    }

    public function getMoreKomunitas(Request $request){
      $query = $request->search_query;
      //dd($query);
      $provinsi = $request->provinsi;
      $kabupaten = $request->kabupaten;
      //DB::enableQueryLog();
      $faskes = Faskes_model::getKomunitas($query,$provinsi,$kabupaten);
      //dd($faskes);
      //dd(DB::getQueryLog());
      return view('components.presentational.boxResultFilterDirectoryKomunitas', compact('faskes'))->render();
    }

    public function getDokterDetail($id, Request $request) {

      $siteConfig   = DB::table('global_data')->first();
      // $dokterDetail = DB::table('dokter')
      //   ->select('dokter.dokterId', 'dokter.fullname', 'dokter.subSpesialist','dokter.foto')
      //   ->whereRaw('dokter.dokterId=?',[$id])
      //   ->first();

      // $dokterDetail = DB::table('dokter')
      // ->select('dokter.dokterId', 'dokter.fullname', 'dokter.subSpesialist','dokter.foto')
      // ->whereRaw('dokter.dokterId=?',[$id])
      // ->first();

      $dokterDetail = Dokter_model::where('uuid','=',$id)->first();



      $foto = $dokterDetail->foto;
      $fullname = $dokterDetail->fullname;
      $layanan = $dokterDetail->subSpesialist;
      $idDokter = $dokterDetail->dokterId;



      // $viewFaskes = DB::table('faskes')
      //     ->join('jadwal_dokter', 'jadwal_dokter.faskesId', '=', 'faskes.faskesId','LEFT')
      //     ->select('faskes.faskesId','faskes.namaFaskes', 'faskes.alamat', 'faskes.provinsi', 'faskes.kabupaten','faskes.website','faskes.phone','faskes.foto')
      //     ->distinct('faskes.namaFaskes')
      //     ->whereRaw('jadwal_dokter.dokterId=?',[$idDokter])->get();

      
      //dd($dokterDetail);
      //get id dokter
      $idDokter = $dokterDetail->dokterId;
      // get data by separate comas
      $idPraktek = $dokterDetail->praktekId;
      $array=array_map('intval', explode(',', $idPraktek));
      //$array = implode("','",$array);

      //dd($array);

      $viewFaskes = Faskes_model::whereIn('faskesId', $array)->get();

     // dd($viewFaskes);

      $cities = DB::table('indonesia_provinces')->pluck("name","id");
      $spesialis = DokterSpesialis_model::where('parentId',2)->pluck("title","id");

      $data = array('title' => $siteConfig->pvar2,
                      'copyright'=>$siteConfig->pvar3,
                      'foto'=>$foto,
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

    //$spesialis = DB::table('dokter_spesialis')->whereRaw('parentId=?',2)->pluck("title","id");

    $spesialis = DokterSpesialis_model::where('parentId',2)->pluck("title","id");

    //dd($spesialis);

    $selectLayanan = DB::table('faskes_layanan')->pluck("title","id");
    //dd( $selectLayanan);


    $faskess = Faskes_model::getFaskes('', GlobalConstants::ALLSpec2, GlobalConstants::ALLProv, GlobalConstants::ALLKab);
    $data = array('title' => $siteConfig->pvar2,
                  'copyright'=>$siteConfig->pvar3,
                  'faskes'=>$faskess
                );
    return view ('v_direktoriCare', $data,compact('provinces','spesialis','cities','selectLayanan'));
  }



  public function care($slug,Request $request){

    // GET variable from global data for website
    $siteConfig   = DB::table('global_data')->first();

    // view rumah sakit detail

    // $viewFaskes = DB::table('faskes')
    //     ->select('faskes.faskesId','faskes.namaFaskes', 'faskes.alamat', 'faskes.provinsi', 'faskes.kabupaten', 'faskes.website','faskes.phone','faskes.fax', 'faskes.skriningDiagnosis', 'faskes.onkologiMedisKemoterapi', 'faskes.radiasiOnkologi', 'faskes.onkologiBedah', 'faskes.perawatanPaliatif', 'faskes.foto')
    //     ->whereRaw('faskes.faskesId=?', [$id])->first();

    //$viewFaskes = Faskes_model::where('slug','=',$slug)->first();

    $viewFaskes = Faskes_model::where('slug', '=', $slug)->firstOrFail();

    //$viewFaskes = Faskes_model::findOrFail($slug);


    $id = $viewFaskes->faskesId;
    $namaFaskes = $viewFaskes->namaFaskes;
    $addressFaskes = $viewFaskes->alamat;
    $phoneFaskes = $viewFaskes->phone;
    $phoneFax = $viewFaskes->fax;
    $websiteFaskes = $viewFaskes->website;
    $foto = $viewFaskes->foto;

    $selectLayanan = DB::table('faskes_layanan')->pluck("title","id");
    dd( $viewLayanan);

    // $status1 =  $viewFaskes->skriningDiagnosis;
    // $status2 =  $viewFaskes->onkologiMedisKemoterapi;
    // $status3 =  $viewFaskes->radiasiOnkologi;
    // $status4 =  $viewFaskes->onkologiBedah;
    // $status5 =  $viewFaskes->perawatanPaliatif;

    $provinces = DB::table('indonesia_provinces')->pluck("name","id");
    $cities = DB::table('indonesia_provinces')->pluck("name","id");

    // view dokter praktek by Faskes
    // $viewDokter = DB::table('dokter')
    // ->join('jadwal_dokter', 'jadwal_dokter.dokterId', '=', 'dokter.dokterId','LEFT')
    // ->select('dokter.dokterId', 'dokter.fullname','dokter.foto')
    // ->distinct('dokter.fullname')
    // ->whereRaw('jadwal_dokter.faskesId=?', [$id])
    // ->get();

    //view dokter praktek by Faskes
    $viewDokter = Dokter_model::join('jadwal_dokter', 'jadwal_dokter.dokterId', '=', 'dokter.dokterId')
    ->distinct('fullname')
    ->where('faskesId','=', $id)
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
                  'layanans' => $selectLayanan,
                  'foto' => $foto,
                  'cities' => $cities,
                  // 'status1' => $status1,
                  // 'status2' => $status2,
                  // 'status3' => $status3,
                  // 'status4' => $status4,
                  // 'status5' => $status5,
                );
    return view ('v_direktoriCare', $data);
  }


  public function getCities($id) {
    $faskes = DB::table("indonesia_cities")->whereRaw("province_id=?",[$id])->pluck("name","id");
    return json_encode($faskes);
  }

  public function getDokter($id) {
      $viewDokter = DB::table("dokter_mapped")->select('dokterId', 'fullname', 'subSpesialist' )->whereRaw("provinsi=?",[$id])->distinct()->get();
      return response()->json($viewDokter);
  }

  public function getFaskes($id) {

    $viewFaskes = DB::table("faskes")
    ->join('indonesia_cities', 'indonesia_cities.id', '=', 'faskes.kabupaten','LEFT')
    ->select('faskesId', 'NamaFaskes', 'alamat','kodepos', 'phone','fax', 'email','website', 'indonesia_cities.name AS propinsi')
    ->whereRaw("provinsi=?",[$id])
    ->get();

    return response()->json($viewFaskes);
}

public function getFaskesWithPropinsi($id) {

  $faskes = DB::table("faskes")->whereRaw("provinsi=?",[$id])->pluck("namaFaskes","faskesid");
  return json_encode($faskes);
}

public function getFaskesWithKabupaten($id) {

  $viewFaskes = DB::table("faskes")
    ->join('indonesia_cities', 'indonesia_cities.id', '=', 'faskes.kabupaten','LEFT')
    ->select('faskesId', 'NamaFaskes', 'alamat','kodepos', 'phone','fax', 'email','website', 'indonesia_cities.name AS propinsi')
    ->whereRaw("kabupaten=?",[$id])
    ->get();
    return response()->json($viewFaskes);
}



  public function getDokterWithKabupaten($id) {
    $viewDokter = DB::table("dokter_mapped")->select('dokterId', 'fullname' )->whereRaw("kabupaten=?",[$id])->distinct()->get();
    return response()->json($viewDokter);
    // return json_encode($viewDokter);
  }



  public function getLabDetail($id,Request $request){

    // GET variable from global data for website
    $siteConfig   = DB::table('global_data')->first();

    $viewFaskes = Faskes_model::where('faskesId','=',$id)->first();

    //$string = urlencode($id);

    //dd($string);

    $string = urlencode("http://127.0.0.1:8000/direktori-lab/32061001%20-%20Copy");

    //dd($string);

    $namaFaskes = $viewFaskes->namaFaskes;
    $addressFaskes = $viewFaskes->alamat;
    $phoneFaskes = $viewFaskes->phone;
    $phoneFax = $viewFaskes->fax;
    $websiteFaskes = $viewFaskes->website;
    $foto = $viewFaskes->foto;
    $description = $viewFaskes->description;



    $provinces = DB::table('indonesia_provinces')->pluck("name","id");
    $cities = DB::table('indonesia_provinces')->pluck("name","id");
    $data = array('title' => $siteConfig->pvar2,
                  'copyright'=>$siteConfig->pvar3,
                  'name'=>$namaFaskes,
                  'address'=>$addressFaskes,
                  'fax'=>$phoneFax,
                  'phone'=>$phoneFaskes,
                  'website'=>$websiteFaskes,
                  'provinces' => $provinces,
                  'foto' => $foto,
                  'cities' => $cities,
                  'description' => $description,
                );
    return view ('v_direktoriLab', $data);
  }

}
