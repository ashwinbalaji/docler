<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  protected $fillable =
  [
    'user_id', 'car_name', 'price', 'make_id', 'model_id',
    'engine_capacity_id', 'cylinders_id', 'drive_Type_id', 'fuel_tank_capacity_id', 'fuel_economy_id',
    'fuel_type_id', 'horsepower_id', 'torque_id', 'transmission_id', 'top_speed_id',
    'seating_capacity_id', 'acceleration_id', 'length_id', 'width_id', 'height_id',
    'wheelbase_id',  'trunk_capacity_id',  'featured_image',  'features',  'featured', 'status',
    'featured', 'created_at'
  ];




  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function acceleration()
  {
    return $this->belongsTo('App\acceleration');
  }
  public function cylinders()
  {
    return $this->belongsTo('App\cylinders');
  }

  public function drive_type()
  {
    return $this->belongsTo('App\drive_type');
  }

  public function engine_capacity()
  {
    return $this->belongsTo('App\engine_capacity');
  }

  public function fuel_economy()
  {
    return $this->belongsTo('App\fuel_economy');
  }

  public function fuel_tank_capacity()
  {
    return $this->belongsTo('App\fuel_tank_capacity');
  }

  public function fuel_type()
  {
    return $this->belongsTo('App\fuel_type');
  }

  public function height()
  {
    return $this->belongsTo('App\height');
  }

  public function   horsepower()
  {
    return $this->belongsTo('App\horsepower');
  }

  public function length()
  {
    return $this->belongsTo('App\length');
  }

  public function   make()
  {
    return $this->belongsTo('App\make');
  }

  public function model()
  {
    return $this->belongsTo('App\models');
  }

  public function seating_capacity()
  {
    return $this->belongsTo('App\seating_capacity');
  }

  public function top_speed()
  {
    return $this->belongsTo('App\top_speed');
  }

  public function   torque()
  {
    return $this->belongsTo('App\torque');
  }

  public function transmission()
  {
    return $this->belongsTo('App\transmission');
  }

  public function   trunk_capacity()
  {
    return $this->belongsTo('App\trunk_capacity');
  }

  public function   wheelbase()
  {
    return $this->belongsTo('App\wheelbase');
  }



  // // public function brand_model() {
  // //   return $this->belongsTo('App\Models\BrandModel');
  // // }

  // // public function category() {
  // //   return $this->belongsTo('App\Models\Category');
  // // }

  // // public function body_type() {
  // //   return $this->belongsTo('App\Models\BodyType');
  // // }

  // // public function fuel_type() {
  // //   return $this->belongsTo('App\Models\FuelType');
  // // }

  // // public function transmission_type() {
  // //   return $this->belongsTo('App\Models\TransmissionType');
  // // }

  // // public function condtion() {
  // //   return $this->belongsTo('App\Models\Condtion');
  // // }

  public function car_images()
  {
    return $this->hasMany('App\Models\CarImage');
  }
}
