@extends('layouts.load')

@section('content')

<div class="content-area">

  <div class="add-product-content">
    <div class="row">
      <div class="col-lg-12">
        <div class="product-description">
          <div class="body-area">
            @include('includes.admin.form-error')
            <form id="geniusformdata" action="{{route('admin-body-store')}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="row">
             
             
                <div class="col-lg-3">
                  <input type="text" class="input-field" name="name" placeholder="Enter Name" required="" value="">
                </div>
                <div class="col-md-3">
                  <select name='spec_type' style="width: 100% !important" class="js-example-basic-single">
                  <option value="" disabled selected>Select  Specification  Type</option>
                    <option value="drive_type">drive_type</option>
                    <option value="cylinders">cylinders</option>
                    <option value="engine_capacity">engine capacity</option>
                    <option value="acceleration">Acceleration</option>
                    <option value="fuel_economy">fuel economy</option>
                    <option value="	fuel_tank_capacity">fuel tank capacity</option>
                    <option value="fuel_type">fuel type</option>
                    <option value="horsepower">horse power</option>
                    <option value="make">make</option>
                    <option value="model">model</option>
                    <option value="seating_capacity">seating_capacity</option>
                    <option value="top_speed">top_speed</option>
                    <option value="torque">torque</option>
                    <option value="transmission">transmission</option>
                    <option value="trunk_capacity">trunk_capacity</option>
                    <option value="wheelbase">wheelbase</option>
                    <option value="width">width</option>
                    <option value="length">length</option>
                    <option value="height">height</option>


                  </select>
                </div>
                <div class="col-lg-3">
                  <select class="input-field" name="status">
                    <option value="" disabled selected>Select a status</option>
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                  </select>
                </div>
                <div class="col-lg-3">
                <button class="addProductSubmit-btn" type="submit">Submit</button>
                </div>
          

              </div>
             

           
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection