<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DokterSpesialis_model extends Model
{
    use HasFactory;
    protected $table 		= "dokter_spesialis";
	protected $primaryKey 	= 'id';
    protected $fillable = array('parentId');
}
