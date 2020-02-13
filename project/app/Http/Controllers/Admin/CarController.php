<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Condtion;
use App\Models\Category;
use App\Models\BodyType;
use App\Models\FuelType;
use App\Models\TransmissionType;
use App\Models\Generalsetting as GS;
use App\Models\CarImage;
use App\Models\BrandModel;
use Validator;
use Auth;
use Datatables;

class CarController extends Controller
{

  //*** GET Request
  public function index()
  {
    return view('admin.car.index');
  }

  public function featuredCars()
  {
    return view('admin.featured.index');
  }



  //*** GET Request
  public function edit($id)
  {
    $data['brands'] = Brand::where('status', 1)->get();
    $data['cats'] = Category::where('status', 1)->get();
    $data['conditions'] = Condtion::where('status', 1)->get();
    $data['btypes'] = BodyType::where('status', 1)->get();
    $data['ftypes'] = FuelType::where('status', 1)->get();
    $data['ttypes'] = TransmissionType::where('status', 1)->get();
    $car = Car::findOrFail($id);
    $data['car']  = $car;
    $data['labels'] = json_decode($car->label, true);
    $data['values'] = json_decode($car->value, true);
    // return $data['labels'];
    return view('admin.car.edit', $data);
  }


  public function update(Request $request)
  {
    $images = is_array($request->images) ? $request->images : [];
    $imagesdb = is_array($request->imagesdb) ? $request->imagesdb : [];

    $messages = [
      'label.*.required' => 'Specification label cannot be blank',
      'value.*.required' => 'Specification value cannot be blank',
      'brand_id.required' => 'Brand is required',
      'brand_model_id.required' => 'Model is required',
      'condtion_id.required' => 'Condtion is required',
    ];

    //--- Validation Section
    $rules = [
      'title' => 'required',
      'brand_id' => 'required',
      'brand_model_id' => 'required',
      'regular_price' => 'required',
      'condtion_id' => 'required',
      'description' => 'required',
      'featured_image' => 'required',
      'images_helper' => [
        function ($attribute, $value, $fail) use ($images, $imagesdb) {
          if (count($images) + count($imagesdb) == 0) {
            $fail("Slider image is required");
          }
        },
      ],
      'year' => 'required|integer',
      'mileage' => 'required|numeric',
      'label.*' => 'required',
      'value.*' => 'required',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }
    //--- Validation Section Ends

    $car = Car::find($request->car_id);
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
    $in['label'] = json_encode($request->label);
    $in['value'] = json_encode($request->value);

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
  //all car list datatable function 
  public function carList(Request $request)
  {
    $columns = array(
      0 => 'id',
      1 => 'car_name',
      2 => 'acceleration',
      3 => 'cylinders',
      4 => 'drive_type',
      5 => 'engine_capacity',
      6 => 'fuel_economy',
      7 => 'fuel_tank_capacity',
      8 => 'fuel_type',
      9 => 'height',
      10 => 'length',
      11 => 'make',
      12 => 'model',
      13 => 'seating_capacity',
      14 => 'top_speed',
      15 => 'torque',
      16 => 'transmission',
      17 => 'trunk_capacity',
      18 => 'wheelbase',
      19 => 'width',
      20 => 'horsepower'


    );
    $totalData = car::count();
    $totalFiltered = $totalData;
    $limit = $request->input('length');
    $start = $request->input('start');
    $order = $columns[$request->input('order.0.column')];
    $dir = $request->input('order.0.dir');

    if (empty($request->input('search.value'))) {
      $customers = car::offset($start)
        ->leftJoin('acceleration', 'acceleration.id', '=', 'cars.acceleration_id')
        ->leftJoin('cylinders', 'cylinders.id', '=', 'cars.cylinders_id')
        ->leftJoin('drive_type', 'drive_type.id', '=', 'cars.drive_type_id')
        ->leftJoin('engine_capacity', 'engine_capacity.id', '=', 'cars.engine_capacity_id')
        ->leftJoin('fuel_tank_capacity', 'fuel_tank_capacity.id', '=', 'cars.fuel_tank_capacity_id')
        ->leftJoin('fuel_type', 'fuel_type.id', '=', 'cars.fuel_type_id')
        ->leftJoin('height', 'height.id', '=', 'cars.height_id')
        ->leftJoin('horsepower', 'horsepower.id', '=', 'cars.horsepower_id')
        ->leftJoin('length', 'length.id', '=', 'cars.length_id')
        ->leftJoin('make', 'make.id', '=', 'cars.make_id')
        ->leftJoin('model', 'model.id', '=', 'cars.model_id')
        ->leftJoin('seating_capacity', 'seating_capacity.id', '=', 'cars.seating_capacity_id')
        ->leftJoin('top_speed', 'top_speed.id', '=', 'cars.top_speed_id')
        ->leftJoin('torque', 'torque.id', '=', 'cars.torque_id')
        ->leftJoin('transmission', 'transmission.id', '=', 'cars.transmission_id')
        ->leftJoin('trunk_capacity', 'trunk_capacity.id', '=', 'cars.trunk_capacity_id')
        ->leftJoin('wheelbase', 'wheelbase.id', '=', 'cars.wheelbase_id')
        ->leftJoin('width', 'width.id', '=', 'cars.width_id')

        ->select(
          'cars.id',
          'cars.car_name',
          'acceleration.name as acceleration',
          'cylinders.name as cylinders',
          'acceleration.name as acceleration',
          'drive_type.name as 	drive_type',
          'engine_capacity.name as engine_capacity',
          'fuel_tank_capacity.name as 		fuel_tank_capacity',
          'fuel_type.name as fuel_type',
          'height.name as height',
          'horsepower.name as horsepower',
          'length.name as length',
          'make.name as make',
          'model.name as model',
          'seating_capacity.name as 	seating_capacity',
          'top_speed.name as 	top_speed',
          'torque.name as torque',
          'transmission.name as 	transmission',
          'trunk_capacity.name as trunk_capacity',
          'wheelbase.name as wheelbase',
          'width.name as width'
        )
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();
    } else {
      $search = $request->input('search.value');

      $customers =  car::where('cars.id', 'LIKE', "%{$search}%")
        ->orWhere('cars.car_name', 'LIKE', "%{$search}%")
        ->orWhere('acceleration.name', 'LIKE', "%{$search}%")
        ->orWhere('cylinders.name', 'LIKE', "%{$search}%")
        ->orWhere('drive_type.name', 'LIKE', "%{$search}%")
        ->orWhere('engine_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('fuel_tank_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('fuel_type.name', 'LIKE', "%{$search}%")
        ->orWhere('height.name', 'LIKE', "%{$search}%")
        ->orWhere('horsepower.name', 'LIKE', "%{$search}%")
        ->orWhere('length.name', 'LIKE', "%{$search}%")
        ->orWhere('make.name', 'LIKE', "%{$search}%")
        ->orWhere('model.name', 'LIKE', "%{$search}%")
        ->orWhere('seating_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('top_speed.name', 'LIKE', "%{$search}%")
        ->orWhere('torque.name', 'LIKE', "%{$search}%")
        ->orWhere('transmission.name', 'LIKE', "%{$search}%")
        ->orWhere('trunk_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('wheelbase.name', 'LIKE', "%{$search}%")
        ->orWhere('width.name', 'LIKE', "%{$search}%")

        ->leftJoin('acceleration', 'acceleration.id', '=', 'cars.acceleration_id')
        ->leftJoin('cylinders', 'cylinders.id', '=', 'cars.cylinders_id')
        ->leftJoin('drive_type', 'drive_type.id', '=', 'cars.drive_type_id')
        ->leftJoin('engine_capacity', 'engine_capacity.id', '=', 'cars.engine_capacity_id')
        ->leftJoin('fuel_tank_capacity', 'fuel_tank_capacity.id', '=', 'cars.fuel_tank_capacity_id')
        ->leftJoin('fuel_type', 'fuel_type.id', '=', 'cars.fuel_type_id')
        ->leftJoin('height', 'height.id', '=', 'cars.height_id')
        ->leftJoin('horsepower', 'horsepower.id', '=', 'cars.horsepower_id')
        ->leftJoin('length', 'length.id', '=', 'cars.length_id')
        ->leftJoin('make', 'make.id', '=', 'cars.make_id')
        ->leftJoin('model', 'model.id', '=', 'cars.model_id')
        ->leftJoin('seating_capacity', 'seating_capacity.id', '=', 'cars.seating_capacity_id')
        ->leftJoin('top_speed', 'top_speed.id', '=', 'cars.top_speed_id')
        ->leftJoin('torque', 'torque.id', '=', 'cars.torque_id')
        ->leftJoin('transmission', 'transmission.id', '=', 'cars.transmission_id')
        ->leftJoin('trunk_capacity', 'trunk_capacity.id', '=', 'cars.trunk_capacity_id')
        ->leftJoin('wheelbase', 'wheelbase.id', '=', 'cars.wheelbase_id')
        ->leftJoin('width', 'width.id', '=', 'cars.width_id')

        ->select(
          'cars.id',
          'cars.car_name',
          'acceleration.name as acceleration',
          'cylinders.name as cylinders',
          'acceleration.name as acceleration',
          'drive_type.name as 	drive_type',
          'engine_capacity.name as engine_capacity',
          'fuel_tank_capacity.name as 		fuel_tank_capacity',
          'fuel_type.name as fuel_type',
          'height.name as height',
          'horsepower.name as horsepower',
          'length.name as length',
          'make.name as make',
          'model.name as model',
          'seating_capacity.name as 	seating_capacity',
          'top_speed.name as 	top_speed',
          'torque.name as torque',
          'transmission.name as 	transmission',
          'trunk_capacity.name as trunk_capacity',
          'wheelbase.name as wheelbase',
          'width.name as width'
        )
        ->offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();

      $totalFiltered = car::where('cars.id', 'LIKE', "%{$search}%")
        ->orWhere('cars.car_name', 'LIKE', "%{$search}%")
        ->orWhere('acceleration.name', 'LIKE', "%{$search}%")
        ->orWhere('cylinders.name', 'LIKE', "%{$search}%")
        ->orWhere('drive_type.name', 'LIKE', "%{$search}%")
        ->orWhere('engine_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('fuel_tank_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('fuel_type.name', 'LIKE', "%{$search}%")
        ->orWhere('height.name', 'LIKE', "%{$search}%")
        ->orWhere('horsepower.name', 'LIKE', "%{$search}%")
        ->orWhere('length.name', 'LIKE', "%{$search}%")
        ->orWhere('make.name', 'LIKE', "%{$search}%")
        ->orWhere('model.name', 'LIKE', "%{$search}%")
        ->orWhere('seating_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('top_speed.name', 'LIKE', "%{$search}%")
        ->orWhere('torque.name', 'LIKE', "%{$search}%")
        ->orWhere('transmission.name', 'LIKE', "%{$search}%")
        ->orWhere('trunk_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('wheelbase.name', 'LIKE', "%{$search}%")
        ->orWhere('width.name', 'LIKE', "%{$search}%")

        ->leftJoin('acceleration', 'acceleration.id', '=', 'cars.acceleration_id')
        ->leftJoin('cylinders', 'cylinders.id', '=', 'cars.cylinders_id')
        ->leftJoin('drive_type', 'drive_type.id', '=', 'cars.drive_type_id')
        ->leftJoin('engine_capacity', 'engine_capacity.id', '=', 'cars.engine_capacity_id')
        ->leftJoin('fuel_tank_capacity', 'fuel_tank_capacity.id', '=', 'cars.fuel_tank_capacity_id')
        ->leftJoin('fuel_type', 'fuel_type.id', '=', 'cars.fuel_type_id')
        ->leftJoin('height', 'height.id', '=', 'cars.height_id')
        ->leftJoin('horsepower', 'horsepower.id', '=', 'cars.horsepower_id')
        ->leftJoin('length', 'length.id', '=', 'cars.length_id')
        ->leftJoin('make', 'make.id', '=', 'cars.make_id')
        ->leftJoin('model', 'model.id', '=', 'cars.model_id')
        ->leftJoin('seating_capacity', 'seating_capacity.id', '=', 'cars.seating_capacity_id')
        ->leftJoin('top_speed', 'top_speed.id', '=', 'cars.top_speed_id')
        ->leftJoin('torque', 'torque.id', '=', 'cars.torque_id')
        ->leftJoin('transmission', 'transmission.id', '=', 'cars.transmission_id')
        ->leftJoin('trunk_capacity', 'trunk_capacity.id', '=', 'cars.trunk_capacity_id')
        ->leftJoin('wheelbase', 'wheelbase.id', '=', 'cars.wheelbase_id')
        ->leftJoin('width', 'width.id', '=', 'cars.width_id')

        ->select(
          'cars.id',
          'cars.car_name',
          'acceleration.name as acceleration',
          'cylinders.name as cylinders',
          'acceleration.name as acceleration',
          'drive_type.name as 	drive_type',
          'engine_capacity.name as engine_capacity',
          'fuel_tank_capacity.name as 		fuel_tank_capacity',
          'fuel_type.name as fuel_type',
          'height.name as height',
          'horsepower.name as horsepower',
          'length.name as length',
          'make.name as make',
          'model.name as model',
          'seating_capacity.name as 	seating_capacity',
          'top_speed.name as 	top_speed',
          'torque.name as torque',
          'transmission.name as 	transmission',
          'trunk_capacity.name as trunk_capacity',
          'wheelbase.name as wheelbase',
          'width.name as width'
        )
        ->count();
    }
    $data = array();
    if (!empty($customers)) {
      foreach ($customers as $key => $customer) {


        $nestedData['id'] = $key + 1;
        $nestedData['car_name'] = $customer->car_name;
        $nestedData['acceleration'] = $customer->acceleration;
        $nestedData['cylinders'] = $customer->cylinders;
        $nestedData['drive_type'] = $customer->drive_type;
        $nestedData['engine_capacity'] = $customer->engine_capacity;
        $nestedData['fuel_economy'] = $customer->fuel_economy;
        $nestedData['fuel_tank_capacity'] = $customer->fuel_tank_capacity;
        $nestedData['fuel_type'] = $customer->fuel_type;
        $nestedData['height'] = $customer->height;
        $nestedData['length'] = $customer->length;
        $nestedData['make'] = $customer->make;
        $nestedData['model'] = $customer->model;
        $nestedData['seating_capacity'] = $customer->seating_capacity;
        $nestedData['top_speed'] = $customer->top_speed;
        $nestedData['torque'] = $customer->torque;
        $nestedData['transmission'] = $customer->transmission;
        $nestedData['trunk_capacity'] = $customer->trunk_capacity;
        $nestedData['wheelbase'] = $customer->wheelbase;
        $nestedData['width'] = $customer->width;
        $nestedData['horsepower'] = $customer->horsepower;
        $route = route('admin.car.edit', $customer->id);
        $route_del = route('admin.car.delete', $customer->id);
        $nestedData['action'] = '<a  href="' . $route . '" class="btn-default edit_btn">Edit</a>
        <a  href="' . $route_del . '" class="btn-default delete_btn">Delete</a>';
        $data[] = $nestedData;
      }
    }
    $json_data = array(
      "draw"            => intval($request->input('draw')),
      "recordsTotal"    => intval($totalData),
      "recordsFiltered" => intval($totalFiltered),
      "data"            => $data
    );
    echo json_encode($json_data);
  }
  //all car list datatable function 
  public function carFeaturedList(Request $request)
  {
    $columns = array(
      0 => 'id',
      1 => 'car_name',
      2 => 'acceleration',
      3 => 'cylinders',
      4 => 'drive_type',
      5 => 'engine_capacity',
      6 => 'fuel_economy',
      7 => 'fuel_tank_capacity',
      8 => 'fuel_type',
      9 => 'height',
      10 => 'length',
      11 => 'make',
      12 => 'model',
      13 => 'seating_capacity',
      14 => 'top_speed',
      15 => 'torque',
      16 => 'transmission',
      17 => 'trunk_capacity',
      18 => 'wheelbase',
      19 => 'width',
      20 => 'horsepower'


    );
    $totalData = car::where('cars.featured', "1")->count();
    $totalFiltered = $totalData;
    $limit = $request->input('length');
    $start = $request->input('start');
    $order = $columns[$request->input('order.0.column')];
    $dir = $request->input('order.0.dir');

    if (empty($request->input('search.value'))) {
      $customers = car::where('cars.featured', "1")->offset($start)
        ->leftJoin('acceleration', 'acceleration.id', '=', 'cars.acceleration_id')
        ->leftJoin('cylinders', 'cylinders.id', '=', 'cars.cylinders_id')
        ->leftJoin('drive_type', 'drive_type.id', '=', 'cars.drive_type_id')
        ->leftJoin('engine_capacity', 'engine_capacity.id', '=', 'cars.engine_capacity_id')
        ->leftJoin('fuel_tank_capacity', 'fuel_tank_capacity.id', '=', 'cars.fuel_tank_capacity_id')
        ->leftJoin('fuel_type', 'fuel_type.id', '=', 'cars.fuel_type_id')
        ->leftJoin('height', 'height.id', '=', 'cars.height_id')
        ->leftJoin('horsepower', 'horsepower.id', '=', 'cars.horsepower_id')
        ->leftJoin('length', 'length.id', '=', 'cars.length_id')
        ->leftJoin('make', 'make.id', '=', 'cars.make_id')
        ->leftJoin('model', 'model.id', '=', 'cars.model_id')
        ->leftJoin('seating_capacity', 'seating_capacity.id', '=', 'cars.seating_capacity_id')
        ->leftJoin('top_speed', 'top_speed.id', '=', 'cars.top_speed_id')
        ->leftJoin('torque', 'torque.id', '=', 'cars.torque_id')
        ->leftJoin('transmission', 'transmission.id', '=', 'cars.transmission_id')
        ->leftJoin('trunk_capacity', 'trunk_capacity.id', '=', 'cars.trunk_capacity_id')
        ->leftJoin('wheelbase', 'wheelbase.id', '=', 'cars.wheelbase_id')
        ->leftJoin('width', 'width.id', '=', 'cars.width_id')

        ->select(
          'cars.id',
          'cars.car_name',
          'acceleration.name as acceleration',
          'cylinders.name as cylinders',
          'acceleration.name as acceleration',
          'drive_type.name as 	drive_type',
          'engine_capacity.name as engine_capacity',
          'fuel_tank_capacity.name as 		fuel_tank_capacity',
          'fuel_type.name as fuel_type',
          'height.name as height',
          'horsepower.name as horsepower',
          'length.name as length',
          'make.name as make',
          'model.name as model',
          'seating_capacity.name as 	seating_capacity',
          'top_speed.name as 	top_speed',
          'torque.name as torque',
          'transmission.name as 	transmission',
          'trunk_capacity.name as trunk_capacity',
          'wheelbase.name as wheelbase',
          'width.name as width'
        )
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();
    } else {
      $search = $request->input('search.value');

      $customers =  car::where('cars.featured', "1")->where('cars.id', 'LIKE', "%{$search}%")
        ->orWhere('cars.car_name', 'LIKE', "%{$search}%")
        ->orWhere('acceleration.name', 'LIKE', "%{$search}%")
        ->orWhere('cylinders.name', 'LIKE', "%{$search}%")
        ->orWhere('drive_type.name', 'LIKE', "%{$search}%")
        ->orWhere('engine_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('fuel_tank_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('fuel_type.name', 'LIKE', "%{$search}%")
        ->orWhere('height.name', 'LIKE', "%{$search}%")
        ->orWhere('horsepower.name', 'LIKE', "%{$search}%")
        ->orWhere('length.name', 'LIKE', "%{$search}%")
        ->orWhere('make.name', 'LIKE', "%{$search}%")
        ->orWhere('model.name', 'LIKE', "%{$search}%")
        ->orWhere('seating_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('top_speed.name', 'LIKE', "%{$search}%")
        ->orWhere('torque.name', 'LIKE', "%{$search}%")
        ->orWhere('transmission.name', 'LIKE', "%{$search}%")
        ->orWhere('trunk_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('wheelbase.name', 'LIKE', "%{$search}%")
        ->orWhere('width.name', 'LIKE', "%{$search}%")
        ->leftJoin('acceleration', 'acceleration.id', '=', 'cars.acceleration_id')
        ->leftJoin('cylinders', 'cylinders.id', '=', 'cars.cylinders_id')
        ->leftJoin('drive_type', 'drive_type.id', '=', 'cars.drive_type_id')
        ->leftJoin('engine_capacity', 'engine_capacity.id', '=', 'cars.engine_capacity_id')
        ->leftJoin('fuel_tank_capacity', 'fuel_tank_capacity.id', '=', 'cars.fuel_tank_capacity_id')
        ->leftJoin('fuel_type', 'fuel_type.id', '=', 'cars.fuel_type_id')
        ->leftJoin('height', 'height.id', '=', 'cars.height_id')
        ->leftJoin('horsepower', 'horsepower.id', '=', 'cars.horsepower_id')
        ->leftJoin('length', 'length.id', '=', 'cars.length_id')
        ->leftJoin('make', 'make.id', '=', 'cars.make_id')
        ->leftJoin('model', 'model.id', '=', 'cars.model_id')
        ->leftJoin('seating_capacity', 'seating_capacity.id', '=', 'cars.seating_capacity_id')
        ->leftJoin('top_speed', 'top_speed.id', '=', 'cars.top_speed_id')
        ->leftJoin('torque', 'torque.id', '=', 'cars.torque_id')
        ->leftJoin('transmission', 'transmission.id', '=', 'cars.transmission_id')
        ->leftJoin('trunk_capacity', 'trunk_capacity.id', '=', 'cars.trunk_capacity_id')
        ->leftJoin('wheelbase', 'wheelbase.id', '=', 'cars.wheelbase_id')
        ->leftJoin('width', 'width.id', '=', 'cars.width_id')

        ->select(
          'cars.id',
          'cars.car_name',
          'acceleration.name as acceleration',
          'cylinders.name as cylinders',
          'acceleration.name as acceleration',
          'drive_type.name as 	drive_type',
          'engine_capacity.name as engine_capacity',
          'fuel_tank_capacity.name as 		fuel_tank_capacity',
          'fuel_type.name as fuel_type',
          'height.name as height',
          'horsepower.name as horsepower',
          'length.name as length',
          'make.name as make',
          'model.name as model',
          'seating_capacity.name as 	seating_capacity',
          'top_speed.name as 	top_speed',
          'torque.name as torque',
          'transmission.name as 	transmission',
          'trunk_capacity.name as trunk_capacity',
          'wheelbase.name as wheelbase',
          'width.name as width'
        )
        ->offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();

      $totalFiltered = car::where('cars.featured', "1")->where('cars.id', 'LIKE', "%{$search}%")
        ->orWhere('cars.car_name', 'LIKE', "%{$search}%")
        ->orWhere('acceleration.name', 'LIKE', "%{$search}%")
        ->orWhere('cylinders.name', 'LIKE', "%{$search}%")
        ->orWhere('drive_type.name', 'LIKE', "%{$search}%")
        ->orWhere('engine_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('fuel_tank_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('fuel_type.name', 'LIKE', "%{$search}%")
        ->orWhere('height.name', 'LIKE', "%{$search}%")
        ->orWhere('horsepower.name', 'LIKE', "%{$search}%")
        ->orWhere('length.name', 'LIKE', "%{$search}%")
        ->orWhere('make.name', 'LIKE', "%{$search}%")
        ->orWhere('model.name', 'LIKE', "%{$search}%")
        ->orWhere('seating_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('top_speed.name', 'LIKE', "%{$search}%")
        ->orWhere('torque.name', 'LIKE', "%{$search}%")
        ->orWhere('transmission.name', 'LIKE', "%{$search}%")
        ->orWhere('trunk_capacity.name', 'LIKE', "%{$search}%")
        ->orWhere('wheelbase.name', 'LIKE', "%{$search}%")
        ->orWhere('width.name', 'LIKE', "%{$search}%")

        ->leftJoin('acceleration', 'acceleration.id', '=', 'cars.acceleration_id')
        ->leftJoin('cylinders', 'cylinders.id', '=', 'cars.cylinders_id')
        ->leftJoin('drive_type', 'drive_type.id', '=', 'cars.drive_type_id')
        ->leftJoin('engine_capacity', 'engine_capacity.id', '=', 'cars.engine_capacity_id')
        ->leftJoin('fuel_tank_capacity', 'fuel_tank_capacity.id', '=', 'cars.fuel_tank_capacity_id')
        ->leftJoin('fuel_type', 'fuel_type.id', '=', 'cars.fuel_type_id')
        ->leftJoin('height', 'height.id', '=', 'cars.height_id')
        ->leftJoin('horsepower', 'horsepower.id', '=', 'cars.horsepower_id')
        ->leftJoin('length', 'length.id', '=', 'cars.length_id')
        ->leftJoin('make', 'make.id', '=', 'cars.make_id')
        ->leftJoin('model', 'model.id', '=', 'cars.model_id')
        ->leftJoin('seating_capacity', 'seating_capacity.id', '=', 'cars.seating_capacity_id')
        ->leftJoin('top_speed', 'top_speed.id', '=', 'cars.top_speed_id')
        ->leftJoin('torque', 'torque.id', '=', 'cars.torque_id')
        ->leftJoin('transmission', 'transmission.id', '=', 'cars.transmission_id')
        ->leftJoin('trunk_capacity', 'trunk_capacity.id', '=', 'cars.trunk_capacity_id')
        ->leftJoin('wheelbase', 'wheelbase.id', '=', 'cars.wheelbase_id')
        ->leftJoin('width', 'width.id', '=', 'cars.width_id')

        ->select(
          'cars.id',
          'cars.car_name',
          'acceleration.name as acceleration',
          'cylinders.name as cylinders',
          'acceleration.name as acceleration',
          'drive_type.name as 	drive_type',
          'engine_capacity.name as engine_capacity',
          'fuel_tank_capacity.name as 		fuel_tank_capacity',
          'fuel_type.name as fuel_type',
          'height.name as height',
          'horsepower.name as horsepower',
          'length.name as length',
          'make.name as make',
          'model.name as model',
          'seating_capacity.name as 	seating_capacity',
          'top_speed.name as 	top_speed',
          'torque.name as torque',
          'transmission.name as 	transmission',
          'trunk_capacity.name as trunk_capacity',
          'wheelbase.name as wheelbase',
          'width.name as width'
        )
        ->count();
    }
    $data = array();
    if (!empty($customers)) {
      foreach ($customers as $key => $customer) {

        $nestedData['id'] = $key + 1;
        $nestedData['car_name'] = $customer->car_name;
        $nestedData['acceleration'] = $customer->acceleration;
        $nestedData['cylinders'] = $customer->cylinders;
        $nestedData['drive_type'] = $customer->drive_type;
        $nestedData['engine_capacity'] = $customer->engine_capacity;
        $nestedData['fuel_economy'] = $customer->fuel_economy;
        $nestedData['fuel_tank_capacity'] = $customer->fuel_tank_capacity;
        $nestedData['fuel_type'] = $customer->fuel_type;

        $nestedData['height'] = $customer->height;

        $nestedData['length'] = $customer->length;
        $nestedData['make'] = $customer->make;
        $nestedData['model'] = $customer->model;
        $nestedData['seating_capacity'] = $customer->seating_capacity;
        $nestedData['top_speed'] = $customer->top_speed;
        $nestedData['torque'] = $customer->torque;
        $nestedData['transmission'] = $customer->transmission;
        $nestedData['trunk_capacity'] = $customer->trunk_capacity;
        $nestedData['wheelbase'] = $customer->wheelbase;
        $nestedData['width'] = $customer->width;
        $nestedData['horsepower'] = $customer->horsepower;


        $route = route('admin.car.edit', $customer->id);
        $nestedData['action'] = '<a  href="' . $route . '" class="btn-default edit_btn">Edit</a>';
        $data[] = $nestedData;
      }
    }
    $json_data = array(
      "draw"            => intval($request->input('draw')),
      "recordsTotal"    => intval($totalData),
      "recordsFiltered" => intval($totalFiltered),
      "data"            => $data
    );
    echo json_encode($json_data);
  }
  //*** GET Request Status
  public function status($id1, $id2)
  {
    $gs = GS::first();

    $data = Car::findOrFail($id1);
    $data->admin_status = $id2;
    $data->update();

    $headers = "From: $gs->from_name <$gs->from_email> \r\n";
    $headers .= "Reply-To: $gs->from_name <$gs->from_email> \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if ($id2 == 1) {
      $message = "Your ad is published.<br /><strong>Ad Title: </strong><a href='" . url("/details/$data->id") . "'>" . $data->title . "</a>";

      @mail($data->user->email, "Ad published", $message, $headers);
    } elseif ($id2 == 0) {
      $message = "Your ad is rejected.<br /><strong>Ad Title: </strong><a href='" . url("/details/$data->id") . "'>" . $data->title . "</a>";

      @mail($data->user->email, "Ad Rejected", $message, $headers);
    }
  }


  //*** GET Request Status
  public function featured($id1, $id2)
  {
    $gs = GS::first();

    $data = Car::findOrFail($id1);
    $data->featured = $id2;
    $data->update();

    $headers = "From: $gs->from_name <$gs->from_email> \r\n";
    $headers .= "Reply-To: $gs->from_name <$gs->from_email> \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if ($id2 == 1) {
      $message = "Your ad is featured.<br /><strong>Ad Title: </strong><a href='" . url("/details/$data->id") . "'>" . $data->title . "</a>";

      @mail($data->user->email, "Ad Featured", $message, $headers);
    } elseif ($id2 == 0) {
      $message = "Your ad is unfeatured.<br /><strong>Ad Title: </strong><a href='" . url("/details/$data->id") . "'>" . $data->title . "</a>";

      @mail($data->user->email, "Ad Unfeatured", $message, $headers);
    }
  }

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
    // return response()->json($msg);
    return redirect('admin/car')->with('message',  $msg );

    //--- Redirect Section Ends
  }

  public function getModels($brandid)
  {
    $models = BrandModel::where('brand_id', $brandid)->where('status', 1)->get();
    return $models;
  }
}
