<?php

namespace App\Http\Controllers\Admin;

use App\drive_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BodyType;
use App\Functions;
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
use App\width;
use App\Models\Condtion;
use App\Models\Category;
use App\Models\FuelType;
use App\Models\TransmissionType;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Validator;
use Datatables;

class BodyController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  //*** GET Request
  public function index()
  {
    return view('admin.body.index');
  }

  //*** GET Request
  public function create()
  {

    return view('admin.body.create');
  }

  //*** POST Request
  public function store(Request $request)
  {
    //--- Validation Section
    $rules = [
      'name' => 'required',
      'status' => 'required',
    ];

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }
    //--- Validation Section Ends

    //--- Logic Section
    $input = $request->all();

    $table = $input['spec_type'];
    $data['name'] = $input['name'];
    $data['status'] = $input['status'];

    $body = Functions::insert_data($table, $data);
    //--- Logic Section Ends

    //--- Redirect Section
    $msg = 'New Data Added Successfully.';
    return response()->json($msg);
    //--- Redirect Section Ends
  }

  //*** GET Request
  public function edit($id, $id1)
  {
    $data = DB::table($id1)->find($id);
    $data->table = $id1;
    return view('admin.body.edit', compact('data'));
  }

  //*** POST Request
  public function update(Request $request, $id)
  {
    //--- Validation Section
    $rules = [
      'name' => 'required',
      'status' => 'required',
    ];
    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }
    //--- Validation Section Ends

    //--- Logic Section
    $input = $request->all();
    $table = $input['table'];
    $name = $input['name'];
    $status = $input['status'];

    DB::table($table)
      ->where('id', $id)
      ->update(['name' => $name, 'status' => $status]);


    // $data = BodyType::findOrFail($id);
    // $data->update($input);
    //--- Logic Section Ends

    //--- Redirect Section
    $msg = 'Data Updated Successfully.';
    return response()->json($msg);
    //return redirect('admin/body')->with('message',  $msg);
    //--- Redirect Section Ends
  }

  //*** GET Request Status
  public function status($id1, $id2)
  {
    $data = BodyType::findOrFail($id1);
    $data->status = $id2;
    $data->update();
  }


  //*** GET Request Delete
  public function destroy($id, $id1)
  {
    DB::table($id1)->delete($id);

    //--- Redirect Section
    $msg = 'Data Deleted Successfully.';
    // return response()->json($msg);
    return redirect('admin/body')->with('message',  $msg);

    //--- Redirect Section Ends
  }


  //specifaction  list datatable function 
  public function specificationList(Request $request)
  {

    $table = $request->input('table');
    $columns = array(
      0 => 'id',
      1 => 'name',
      2 => 'action',


    );
    $totalData = DB::table($table)->count();

    $totalFiltered = $totalData;
    $limit = $request->input('length');
    $start = $request->input('start');
    $order = $columns[$request->input('order.0.column')];
    $dir = $request->input('order.0.dir');

    if (empty($request->input('search.value'))) {
      $specifications = DB::table($table)->offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();
    } else {
      $search = $request->input('search.value');

      $specifications =  DB::table($table)->where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->offset($start)
        ->limit($limit)
        ->orderBy($order, $dir)
        ->get();

      $totalFiltered = DB::table($table)->where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->count();
    }
    $data = array();
    if (!empty($specifications)) {
      foreach ($specifications as $key => $specification) {

        $nestedData['id'] = $key + 1;
        $nestedData['name'] = $specification->name;
        $route = route('admin-body-edit', [$specification->id, $table]);
        $route_del = route('admin-body-delete', [$specification->id, $table]);
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
}
