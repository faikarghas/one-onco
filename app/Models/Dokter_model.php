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
        $dokters = DB::table('dokter_mapped');
        if($search_keyword && !empty($search_keyword)) {
            $dokters->where(function($q) use ($search_keyword) {
                $q->where('fullname', 'like', "%{$search_keyword}%")
                ->orWhere('subSpesialist', 'like', "%{$search_keyword}%")
                ->orWhere('namafaskes', 'like', "%{$search_keyword}%");
            });
        }
        //Filter Spesialis
        if($spesialis && $spesialis!= GlobalConstants::ALL) {
            $dokters = $dokters->where('subSpesialist', $spesialis);
        }
        //Filter Provinsi
        if($provinsi && $provinsi!= GlobalConstants::ALL) {
            $dokters = $dokters->where('provinsi', $provinsi);
        }
        //Filter Kabupaten
        if($kabupaten && $kabupaten!= GlobalConstants::ALL) {
            $dokters = $dokters->where('kabupaten', $kabupaten);
        }
        return $dokters->paginate(PER_PAGE_LIMIT);
    }

	
}

