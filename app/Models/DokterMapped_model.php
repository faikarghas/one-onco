<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Constants\GlobalConstants;


class DokterMapped_model extends Model
{
    use HasFactory;
    protected $table = "dokter_mapped";
    
    public static function getDokters($search_keyword,$spesialis,$provinsi,$kabupaten) {
        $dokters = DB::table('dokter_mapped')->select(['dokterId','fullname','Image','subSpesialist','namafaskes']);
        if($search_keyword && !empty($search_keyword)) {
            $dokters->where(function($q) use ($search_keyword){
                $q->where('fullname', 'LIKE', "%{$search_keyword}%")
                ->orWhere('subSpesialist', 'LIKE', "%{$search_keyword}%")
                ->orWhere('namafaskes', 'LIKE', "%{$search_keyword}%");
            });
        }
        //Filter Spesialis
        if($spesialis && $spesialis!= GlobalConstants::ALLSpec) {
            $dokters = $dokters->whereRaw('subSpesialist=?', [$spesialis]);
        }
        //Filter Provinsi
        if($provinsi && $provinsi!= GlobalConstants::ALLProv) {
            $dokters = $dokters->whereRaw('provinsi=?', [$provinsi]);
        }
        //Filter Kabupaten
        if($kabupaten && $kabupaten!= GlobalConstants::ALLKab) {
            $dokters = $dokters->whereRaw('kabupaten=?', [$kabupaten]);
        }
        return $dokters->paginate(PER_PAGE_LIMIT);
    }
}

