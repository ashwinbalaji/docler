<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\acceleration;
use App\cylinders;
use App\engine_capacity;
use App\fuel_economy;
use App\fuel_tank_capacity;
use App\fuel_type;
use App\height;
use App\horsepower;
use App\length;
use App\make;
use App\models;
use App\seating_capacity;
use App\top_speed;
use App\torque;
use App\transmission;
use App\trunk_capacity;
use App\wheelbase;
use App\drive_type;
use App\width;
use App\Models\Condtion;
use App\Models\Category;
use App\Models\BodyType;
use App\Models\FuelType;
use App\Models\TransmissionType;
use App\Models\CarImage;
use App\Models\BrandModel;
use App\Models\Plan;
use Validator;
use Auth;
use Datatables;
use DB;

class CarController extends Controller
{
  //*** GET Request
  public function index($type = null)
  {

    $data['type'] = $type;
    return view('user.car.index', $data);
  }

  public function create()
  {
    $data['acceleration'] = acceleration::where('status', 1)->get();
    $data['cylinders'] = cylinders::where('status', 1)->get();
    $data['drive_type'] = drive_type::where('status', 1)->get();
    $data['engine_capacity'] = engine_capacity::where('status', 1)->get();
    $data['fuel_economy'] = fuel_economy::where('status', 1)->get();
    $data['fuel_tank_capacity'] = fuel_tank_capacity::where('status', 1)->get();
    $data['fuel_type'] = fuel_type::where('status', 1)->get();
    $data['height'] = height::where('status', 1)->get();
    $data['horsepower'] = horsepower::where('status', 1)->get();
    $data['length'] =   length::where('status', 1)->get();
    $data['make'] = make::where('status', 1)->get();
    $data['model'] = models::where('status', 1)->get();
    $data['top_speed'] = top_speed::where('status', 1)->get();
    $data['torque'] =   torque::where('status', 1)->get();
    $data['transmission'] = transmission::where('status', 1)->get();
    $data['trunk_capacity'] = trunk_capacity::where('status', 1)->get();
    $data['wheelbase'] = wheelbase::where('status', 1)->get();
    $data['width'] = width::where('status', 1)->get();
    $data['seating_capacity'] = seating_capacity::where('status', 1)->get();

    $data['boughtPlan'] = 11;
    return view('/user/car/create', $data);
  }

  public function store(Request $request)
  {
    // if (Auth()->user()->ads == 0) {
    //   $msg = 'You have to buy a package to post ad.';
    //   return response()->json($msg);
    // }

    $messages = [
      'label.*.required' => 'Specification label cannot be blank',
      'value.*.required' => 'Specification value cannot be blank',
      'brand_id.required' => 'Brand is required',
      'brand_model_id.required' => 'Model is required',
      'condtion_id.required' => 'Condtion is required',
    ];

    //--- Validation Section
    $rules = [
      'car_name' => 'required',
      'features' => 'required',
      'price' => 'required',
      'featured_image' => 'required',
      'images' => 'required',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }
    //--- Validation Section Ends
    $in = $request->all();
    $in['user_id'] = 0;
    $in['featured'] = 0;
    $in['status'] = 1;

    if ($request->filled('featured_image')) {
      $image = $request->featured_image;
      list($type, $image) = explode(';', $image);
      list(, $image)      = explode(',', $image);
      $image = base64_decode($image);
      $image_name = uniqid() . '.jpg';

      $path = 'assets/front/images/cars/featured/' . $image_name;
      file_put_contents($path, $image);

      $in['featured_image'] = $image_name;
    }

    $car = Car::create($in);

    if ($request->filled('images')) {
      $imgs = [];
      $imgs = $request->images;
      foreach ($imgs as $key => $img) {
        list($type, $img) = explode(';', $img);
        list(, $img)      = explode(',', $img);
        $img = base64_decode($img);
        $img_name = uniqid() . '.jpg';

        $path = 'assets/front/images/cars/sliders/' . $img_name;
        file_put_contents($path, $img);

        $carimg = new CarImage;
        $carimg->car_id = $car->id;
        $carimg->image = $img_name;
        $carimg->save();
      }
    }

    // $user = Auth::user();
    // $user->ads = $user->ads - 1;
    // $user->save();

    $msg = 'Car Added Successfully.';
    return response()->json($msg);
  }

  //*** GET Request
  public function edit($id)
  {
    $data['acceleration'] = acceleration::where('status', 1)->get();
    $data['cylinders'] = cylinders::where('status', 1)->get();
    $data['drive_type'] = drive_type::where('status', 1)->get();
    $data['engine_capacity'] = engine_capacity::where('status', 1)->get();
    $data['fuel_economy'] = fuel_economy::where('status', 1)->get();
    $data['fuel_tank_capacity'] = fuel_tank_capacity::where('status', 1)->get();
    $data['fuel_type'] = fuel_type::where('status', 1)->get();
    $data['height'] = height::where('status', 1)->get();
    $data['horsepower'] = horsepower::where('status', 1)->get();
    $data['length'] =   length::where('status', 1)->get();
    $data['make'] = make::where('status', 1)->get();
    $data['model'] = models::where('status', 1)->get();
    $data['top_speed'] = top_speed::where('status', 1)->get();
    $data['torque'] =   torque::where('status', 1)->get();
    $data['transmission'] = transmission::where('status', 1)->get();
    $data['trunk_capacity'] = trunk_capacity::where('status', 1)->get();
    $data['wheelbase'] = wheelbase::where('status', 1)->get();
    $data['width'] = width::where('status', 1)->get();
    $data['seating_capacity'] = seating_capacity::where('status', 1)->get();


    $car = Car::findOrFail($id);
    $data['car']  = $car;

    return view('user.car.edit', $data);
  }


  public function update(Request $request)
  {
    $images = is_array($request->images) ? $request->images : [];
    $imagesdb = is_array($request->imagesdb) ? $request->imagesdb : [];


    //--- Validation Section
    $messages = [
      'label.*.required' => 'Specification label cannot be blank',
      'value.*.required' => 'Specification value cannot be blank',
      'brand_id.required' => 'Brand is required',
      'brand_model_id.required' => 'Model is required',
      'condtion_id.required' => 'Condtion is required',
    ];

    $rules = [
      'car_name' => 'required',
      'features' => 'required',
      'price' => 'required',

      'images_helper' => [
        function ($attribute, $value, $fail) use ($images, $imagesdb) {
          if (count($images) + count($imagesdb) == 0) {
            $fail("Slider image is required");
          }
        },
      ],
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }
    //--- Validation Section Ends

    $car = Car::find($request->car_id);
    // echo $request->featured_image;
    // echo  json_encode($car);
    // exit;
    $in = $request->all();
    if ($request->filled('featured_image')) {
      if ($request->featured_image != $car->featured_image) {
        $image = $request->featured_image;
        list($type, $image) = explode(';', $image);
        list(, $image)      = explode(',', $image);
        $image = base64_decode($image);
        $image_name = uniqid() . '.jpg';

        $path = 'assets/front/images/cars/featured/' . $image_name;
        file_put_contents($path, $image);
        @unlink('assets/front/images/cars/featured/' . $car->featured_image);

        $in['featured_image'] = $image_name;
      }
    }

    $in['price'] = $request->price;



    $car->fill($in)->save();

    // bring all the product images of that product
    $carimgs = CarImage::where('car_id', $car->id)->get();


    // then check whether a filename is missing in imgsdb if it is missing remove it from database and unlink it
    foreach ($carimgs as $carimg) {
      if (!in_array($carimg->image, $request->imagesdb)) {
        @unlink('assets/front/images/cars/sliders/' . $carimg->image);
        $carimg->delete();
      }
    }

    if ($request->filled('images')) {
      $imgs = [];
      $imgs = $request->images;
      foreach ($imgs as $key => $img) {
        list($type, $img) = explode(';', $img);
        list(, $img)      = explode(',', $img);
        $img = base64_decode($img);
        $img_name = uniqid() . '.jpg';

        $path = 'assets/front/images/cars/sliders/' . $img_name;
        file_put_contents($path, $img);

        $carimg = new CarImage;
        $carimg->car_id = $car->id;
        $carimg->image = $img_name;
        $carimg->save();
      }
    }
    $msg = 'Car Updated Successfully.';
    return response()->json($msg);
  }


  //*** GET Request Delete
  public function destroy($id)
  {
    $data = Car::findOrFail($id);

    @unlink('assets/front/images/cars/featured/' . $ci->featured_image);
    foreach ($data->car_images as $key => $ci) {
      @unlink('assets/front/images/cars/sliders/' . $ci->image);
      $ci->delete();
    }

    $data->delete();
    //--- Redirect Section
    $msg = 'Data Deleted Successfully.';
    return response()->json($msg);
    //--- Redirect Section Ends
  }

  //*** GET Request Status
  public function status($id1, $id2)
  {
    $data = Car::findOrFail($id1);
    $data->status = $id2;
    $data->update();
  }

  public function getModels($brandid)
  {
    $models = BrandModel::where('brand_id', $brandid)->where('status', 1)->get();
    return $models;
  }
}
