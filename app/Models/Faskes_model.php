<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        ->select('faskes.namaFaskes', 'faskes.provinsi', 'faskes.kabupaten','faskes.website')
        ->where(array('jadwal_dokter.dokterId' => $idDokter))
         ->dump();
        return $query;
        
    }

}
