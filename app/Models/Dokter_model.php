<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Constants\GlobalConstants;


class Dokter_model extends Model
{
    use HasFactory;
    protected $table = "dokter_mapped";

    public static function getDokters($search_keyword,$spesialis,$provinsi,$kabupaten) {
        $dokters;
        if($search_keyword && !empty($search_keyword)) {
<<<<<<< HEAD
            $dokters = DB::table('dokter_mapped')->where(function($q) use ($search_keyword) {
                $q->where('fullname', 'like', "%{$search_keyword}%")
                ->orWhere('subSpesialist', 'like', "%{$search_keyword}%")
                ->orWhere('namafaskes', 'like', "%{$search_keyword}%");
            })->get();
        }
        //Filter Spesialis
        if($spesialis && $spesialis!= GlobalConstants::ALL) {
            $dokters = DB::table('dokter_mapped')->where('subSpesialist', $spesialis);
        }
        //Filter Provinsi
        if($provinsi && $provinsi!= GlobalConstants::ALL) {
            $dokters = DB::table('dokter_mapped')->where('provinsi', $provinsi);
        }
        //Filter Kabupaten
        if($kabupaten && $kabupaten!= GlobalConstants::ALL) {
            $dokters = DB::table('dokter_mapped')->where('kabupaten', $kabupaten);
=======
            $dokters->where(function($q) use ($search_keyword) {
                $q->where('fullname', 'LIKE', "%{$search_keyword}%")
                ->orWhere('subSpesialist', 'LIKE', "%{$search_keyword}%")
                ->orWhere('namafaskes', 'LIKE', "%{$search_keyword}%");
            });
        }
        //Filter Spesialis
        if($spesialis && $spesialis!= GlobalConstants::ALLSpec) {
            $dokters = $dokters->where('subSpesialist', $spesialis);
        }
        //Filter Provinsi
        if($provinsi && $provinsi!= GlobalConstants::ALLProv) {
            $dokters = $dokters->where('provinsi', $provinsi);
        }
        //Filter Kabupaten
        if($kabupaten && $kabupaten!= GlobalConstants::ALLKab) {
            $dokters = $dokters->where('kabupaten', $kabupaten);
>>>>>>> cea7e67ce03b4cb6184e08c1713d3bbc1aff3e05
        }
        return $dokters->paginate(PER_PAGE_LIMIT);
    }

}

