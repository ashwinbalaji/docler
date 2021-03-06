<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BodyType extends Model
{
    protected $fillable = ['name', 'status'];
    public $timestamps = false;

  
    public function cars() {
      return $this->hasMany('App\Car');
    }
}
