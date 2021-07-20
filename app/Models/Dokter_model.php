<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Constants\GlobalConstants;


class Dokter_model extends Model
{
    use HasFactory;
    protected $table = "dokter";
    protected $primaryKey 	= 'id';
    protected $fillable = array('id','dokterId');
    
}

