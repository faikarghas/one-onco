<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Constants\GlobalConstants;


class GlobalData extends Model
{
    use HasFactory;
    protected $table 		= "global_data";
	protected $primaryKey 	= 'Id';
    
}