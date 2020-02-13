<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Functions extends Model
{
     //insert common function 
     public static function insert_data($table, $data)
     {
         $response = DB::table($table)->insert($data);
         $insert_id = DB::getPdo()->lastInsertId();
         return $insert_id;
     }
     //get data common function 
     public static function get_data()
     {
       $result= DB::table('model')->orderBy('id', 'desc')->get();
       return $result;
     }
     
}
