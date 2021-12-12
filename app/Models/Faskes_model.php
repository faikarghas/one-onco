<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Constants\GlobalConstants;



class Faskes_model extends Model
{
    use HasFactory;
    protected $table 		= "faskes";
	protected $primaryKey 	= 'faskesId';

    public function allByDokter($idDokter)
    {
    //   DB::enableQueryLog();
      $query = DB::table('faskes')
        ->join('jadwal_dokter', 'jadwal_dokter.faskesId', '=', 'faskes.faskesId','LEFT')
        ->select('faskes.namaFaskes', 'faskes.provinsi', 'faskes.kabupaten','faskes.website','slug')
        ->where(array('jadwal_dokter.dokterId' => $idDokter))
         ->dump();
        return $query;  
    }

    public static function getFaskes($search_keyword,$spesialis=NULL,$provinsi,$kabupaten) {
        $faskes = DB::table('faskes')->select(['faskesId','namaFaskes','alamat','foto','phone','website','slug','layanan']);;
        if($search_keyword && !empty($search_keyword)) {
            $faskes->where(function($q) use ($search_keyword) {
                $q->where('namaFaskes', 'LIKE', "%{$search_keyword}%")
                ->orWhere('alamat', 'LIKE', "%{$search_keyword}%");
            });
        }
       

        //Filter Spesialis
        if($spesialis && $spesialis!= GlobalConstants::ALLSpec2 && $spesialis!= 'pilihLayananKanker' ) {

            
            $faskes = $faskes->whereRaw("find_in_set($spesialis , layanan)");
                        
        }
        //Filter Provinsi
        if($provinsi && $provinsi!= GlobalConstants::ALLProv) {
            $faskes = $faskes->where('provinsi', $provinsi);
        }
        //Filter Kabupaten
        if($kabupaten && $kabupaten!= GlobalConstants::ALLKab) {
            $faskes = $faskes->where('kabupaten', $kabupaten);
        }
        return $faskes->paginate(PER_PAGE_LIMIT);
    }

    public static function getKomunitas($search_keyword,$provinsi,$kabupaten) {
        $faskes = DB::table('faskes')->where('tipeFaskes',2);
        if($search_keyword && !empty($search_keyword)) {
            $faskes->where(function($q) use ($search_keyword) {
                $q->where('namaFaskes', 'like', "%{$search_keyword}%")
                ->orWhere('alamat', 'like', "%{$search_keyword}%");
            });
        }
        //Filter Provinsi
        if($provinsi && $provinsi!= GlobalConstants::ALLProv) {
            $faskes = $faskes->whereRaw('provinsi=?', [$provinsi]);
        }
        //Filter Kabupaten
        if($kabupaten && $kabupaten!= GlobalConstants::ALLKab) {
            $faskes = $faskes->whereRaw('kabupaten=?', [$kabupaten]);
        }
        return $faskes->paginate(PER_PAGE_LIMIT);
    }
}
