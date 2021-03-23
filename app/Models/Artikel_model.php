<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Artikel_model extends Model
{
    use HasFactory;

    protected $table 		= "artikel";
	protected $primaryKey 	= 'id';

    // listing artikel by kategori
    public function all_kategori($id_kategori)
    {
      $query = DB::table('artikel')
        ->join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat','LEFT')
        ->select('artikel.*', 'kategori_artikel.slug AS slug_kategori', 'kategori_artikel.intro','kategori_artikel.content','kategori_artikel.img')
        ->where(array( 'artikel.idKat' => $id_kategori))
        ->orderBy('id','DESC')
        ->paginate(3);
        return $query;
    }

     // detail
     public function detail($slug)
     {
         $query = DB::table('artikel')
          ->join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat','LEFT')
          ->select('artikel.*', 'kategori_artikel.slug AS slug_kategori', 'kategori_artikel.intro','kategori_artikel.content AS content_kategori_artikel','kategori_artikel.img')
          ->where('artikel.slug',$slug)
          ->orderBy('id','DESC')
          ->first();
         return $query;
     }

     // other news related 

     public function otherArticle($id,$idKat)
     {
         $query = DB::table('artikel')
          ->join('kategori_artikel', 'kategori_artikel.id', '=', 'artikel.idKat','LEFT')
          ->select('artikel.*')
          ->where('artikel.idkat',$idKat)
          ->whereNotIn('artikel.id',[$id])
          ->orderBy('artikel.id','DESC')
          ->paginate(3);
         return $query;
     }

     








}
