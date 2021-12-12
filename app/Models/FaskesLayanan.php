<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Constants\GlobalConstants;



class FaskesLayanan extends Model
{
    use HasFactory;
    protected $table 		= "faskes_layanan";
	protected $primaryKey 	= 'Id';

    
}
