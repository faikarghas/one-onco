<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer_model extends Model
{
    use HasFactory;
    public function login($email,$password)
    {
        $query = DB::table('customer')
            ->select('*')
            ->whereRaw(array(  'customer.email=?'	=> [$email],
                            // 'customer.password'    => sha1($password)))
                            'customer.password=?'    =>[$password]))
            ->orderBy('id','DESC')
            ->first();
        return $query;
    }

}
