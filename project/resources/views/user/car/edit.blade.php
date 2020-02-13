@extends('layouts.admin')

@section('styles')
<link href="{{asset('assets/admin/css/jquery.Jcrop.css')}}" rel="stylesheet" />
<link href="{{asset('assets/admin/css/Jcrop-style.css')}}" rel="stylesheet" />
<style media="screen">
  .heading {
    font-size: 16px;
  }

  .add-product-content .product-description .body-area .row {
    margin-bottom: 0px;
  }

  .input-field {
    padding-left: 0px;
  }

  select {
    padding-left: 0px;
  }

  .featured-image .span4.cropme {
    width: 300px;
    height: 164px;
  }

  .col-lg-4 {

    padding: 3px 3px 42px 47px !important;
  }
</style>
@endsection

@section('content')

<div class="content-area">
  <div class="mr-breadcrumb">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="heading">Edit & Update Car </h4>
        <ul class="links">
          <li>
            <a href="{{ route('user-dashboard') }}">{{$langg->lang8}} </a>
          </li>
          <li>
            <a href="#">edit car</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="add-product-content">
    <div class="row">
      <div class="col-lg-12">
        <div class="product-description">
          <div class="body-area">
            <!-- @if (empty(Auth::user()->current_plan))
            <div class="row mb-4">
              <div class="col-lg-7 offset-lg-3">
                <div class="alert alert-warning" role="alert">
                  <p class="mb-0">You haven't bought any package yet. To publish your ad, please buy a package <a href="{{ route('user-package') }}">. <strong>Click Here</strong></a> to buy a package.</p>
                </div>
              </div>
            </div>
            @else
            <div class="row mb-4">
              <div class="col-lg-7 offset-lg-3">
                <div class="alert alert-warning" role="alert">
                  <p class="mb-0">{{$langg->lang97}} <strong>{{ $boughtPlan->title }}</strong>.{{$langg->lang98}} <strong>{{ Auth::user()->ads }}</strong> {{$langg->lang99}}. {{$langg->lang100}} <strong>{{ date('jS M, o', strtotime(Auth::user()->expired_date)) }} </strong>.
                  </p>
                </div>
              </div>
            </div>
            @endif -->

            <div class="gocover" style="background: url({{ asset('assets/images/spinner.gif') }}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>

            <form class="add-form" id="geniusform" action="{{ route('admin.car.update') }}" method="POST" enctype="multipart/form-data" novalidate>
              {{csrf_field()}}

              <div class="row">
                <div class="col-lg-7 offset-lg-3">
                  @include('includes.admin.form-both')
                </div>
              </div>


              <div class="row">
                <div class="col-lg-4">
                  <h4 class="heading mb-0">Car Name *</h4>
                  <input type="hidden" name="car_id" value="{{ $car->id }}">
                  <input class="input-field" type="text" value="{{ $car->car_name }}" name=" car_name" placeholder="{{$langg->lang101}} {{$langg->lang102}}" value="">
                </div>
                <div class="col-lg-4">
                  <h4 class="heading mb-0">Price *</h4>
                  <input class="input-field" type="text" value="{{ $car->price }}" name=" price" placeholder="Price" value="">
                </div>


                <div class="col-lg-4">
                  <h4 class="heading mb-0">Drive Type</h4>
                  <select class="searchable-select input-field" name="drive_Type_id">
                    <option value="Select" disabled selected>Select Drive type</option>
                    @foreach ($drive_type as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->drive_Type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-lg-4">
                  <h4 class="heading mb-0">Cylinders</h4>
                  <select class="searchable-select input-field" name="cylinders_id">
                    <option value="Select " disabled selected>Select cylinders</option>
                    @foreach ($cylinders as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->cylinders_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-lg-4">
                  <h4 class="heading mb-0">Acceleration</h4>
                  <select class="searchable-select input-field" name="acceleration_id">
                    <option value="Select a brand" disabled selected>Select Acceleration</option>
                    @foreach ($acceleration as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->acceleration_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-lg-4">
                  <h4 class="heading mb-0">Engine Capacity</h4>
                  <select class="searchable-select input-field" name="engine_capacity_id">
                    <option value="Select" disabled selected>Select Engine Capacity</option>
                    @foreach ($engine_capacity as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->engine_capacity_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-lg-4">
                  <h4 class="heading mb-0">Fuel Economy</h4>
                  <select class="searchable-select input-field" name="fuel_economy_id">
                    <option value="Select a brand" disabled selected>Select fuel economy</option>
                    @foreach ($fuel_economy as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->fuel_economy_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-4">
                  <h4 class="heading mb-0">Fuel Tank Capacity</h4>
                  <select class="searchable-select input-field" name="fuel_tank_capacity_id">
                    <option value="Select a brand" disabled selected>Select fuel tank capacity</option>
                    @foreach ($fuel_tank_capacity as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->fuel_tank_capacity_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>


                <div class="col-lg-4">
                  <h4 class="heading mb-0"> Fuel Type</h4>
                  <select class="searchable-select input-field" name="fuel_type_id">
                    <option value="Select" disabled selected>Select fuel type</option>
                    @foreach ($fuel_type as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->fuel_type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Horse Power</h4>
                  <select class="searchable-select input-field" name="horsepower_id">
                    <option value="Select" disabled selected>Select Horse Power</option>
                    @foreach ($horsepower as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->horsepower_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Make</h4>
                  <select class="searchable-select input-field" name="make_id">
                    <option value="Select a brand" disabled selected>Select Make</option>
                    @foreach ($make as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->make_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Model</h4>
                  <select class="searchable-select input-field" name="model_id">
                    <option value="Select a brand" disabled selected>Select model</option>
                    @foreach ($model as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->model_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Drive Type</h4>
                  <select class="searchable-select input-field" name="seating_capacity_id">
                    <option value="Select" disabled selected>Select Seating Capacity</option>
                    @foreach ($seating_capacity as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->seating_capacity_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Top Speed</h4>
                  <select class="searchable-select input-field" name="top_speed_id">
                    <option value="Select" disabled selected>Select Top Speed</option>
                    @foreach ($top_speed as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->top_speed_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Torque</h4>
                  <select class="searchable-select input-field" name="torque_id">
                    <option value="Select" disabled selected>Select Torque</option>
                    @foreach ($torque as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->torque_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Transmission</h4>
                  <select class="searchable-select input-field" name="transmission_id">
                    <option value="Select" disabled selected>Select Transmission</option>
                    @foreach ($transmission as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->transmission_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Trunk Capacity</h4>
                  <select class="searchable-select input-field" name="trunk_capacity_id">
                    <option value="Select" disabled selected>Select Trunk Capacity</option>
                    @foreach ($trunk_capacity as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->trunk_capacity_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">wheelbase</h4>
                  <select class="searchable-select input-field" name="wheelbase_id">
                    <option value="Select a wheelbase" disabled selected>Select wheelbase</option>
                    @foreach ($wheelbase as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->wheelbase_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Length</h4>
                  <select class="searchable-select input-field" name="length_id">
                    <option value="Select a brand" disabled selected>Select length</option>
                    @foreach ($length as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->length_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Height</h4>
                  <select class="searchable-select input-field" name="height_id">
                    <option value="Select" disabled selected>Select height</option>
                    @foreach ($height as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->height_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>





                <div class="col-lg-4">
                  <h4 class="heading mb-0">Width</h4>
                  <select class="searchable-select input-field" name="width_id">
                    <option value="Select" disabled selected>Select width</option>
                    @foreach ($width as $key => $type)
                    <option value="{{ $type->id }}" {{ $car->width_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                  </select>
                </div>




              </div>

              <br>
              <br>


              <br>

              <div class="row">
                <div class="col-lg-7 offset-lg-3">
                  <div class="row">
                    <div class="col-lg-12">
                      <h4 class="heading mb-4">{{$langg->lang126}} *</h4>
                      <textarea name="features" class="form-control nic-edit" rows="8" cols="80">{{$car->features }}</textarea>
                    </div>
                  </div>
                </div>
              </div>
              <br>




              <div class="row images">
                <div class="col-lg-7 offset-lg-3">
                  <h4 class="heading mb-4">{{$langg->lang127}} *</h4>

                  <div class="uploaded-images" id="uploadedImages" class="mb-4">
                    @foreach ($car->car_images as $key => $ci)
                    <div class="image">
                      <input type="hidden" name="imagesdb[]" value="{{ $ci->image }}">
                      <img src="{{ asset('assets/front/images/cars/sliders/'.$ci->image) }}" alt="" width="200">
                      <div class="image-overlay">
                        <i class="fas fa-times" onclick="removeimg(event)"></i>
                      </div>
                    </div>
                    @endforeach
                  </div>

                  <div class="panel panel-body">
                    <div class="span4 cropme text-center">
                    </div>
                  </div>

                  <a href="javascript:;" class="d-inline-block mybtn1 crop-image mt-2">
                    <i class="icofont-upload-alt"></i> {{$langg->lang128}}
                  </a>
                  <button id="saveBtn" class="d-none mybtn1 mt-2" type="button" name="button">SAVE TO GALLERY</button>

                </div>
              </div>
              <input type="hidden" name="images_helper" value="">


              <input type="hidden" id="feature_photo" name="image" value="">


              <div class="row mt-5 featured-image">
                <input type="hidden" id="featuredImage" name="featured_image" value="{{ $car->featured_image }}">
                <div class="col-lg-7 offset-lg-3">
                  <h4 class="heading mb-4">{{$langg->lang129}} *</h4>

                  <div class="panel panel-body">
                    <div class="span4 cropme text-center">
                    </div>
                  </div> <br>

                  <a href="javascript:;" class="d-inline-block mybtn1 mt-4 crop-image">
                    <i class="icofont-upload-alt"></i> {{$langg->lang128}}
                  </a>

                </div>
              </div>



          </div>



          <div class="row">
            <div class="col-lg-3">
              <div class="left-area">

              </div>
            </div>
            <div class="col-lg-7 text-center">
              <button class="addProductSubmit-btn mt-4" type="submit">{{$langg->lang134}}</button>
            </div>
          </div>
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

{{-- Multiple images & Featured image --}}
<script src="{{asset('assets/admin/js/jquery.Jcrop.js')}}"></script>
<script>
  var v_aspX = 730;
  var v_aspY = 489;

  //
  $('.cropme').on('click', function() {
    if ($(this).parents().is('.images')) {
      v_aspX = 730;
      v_aspY = 489;
    } else if ($(this).parents().is('.featured-image')) {
      v_aspX = 350;
      v_aspY = 190;
    }
  });
</script>
<script src="{{asset('assets/admin/js/jquery.SimpleCropper.js')}}"></script>

<script type="text/javascript">
  $('.cropme').simpleCropper();
  $('.crop-image').on('click', function() {
    $(this).siblings('.panel').find('.cropme').click();
  });
</script>


<script type="text/javascript">
  function removeimg(e) {
    $(e.target).parents('.image').remove();
  }

  $(document).ready(function() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('#saveBtn').on('click', function() {

      $("#saveBtn").toggleClass('d-none');

      var img = $('#feature_photo').val();
      $(".images .span4.cropme").html('');
      $("#uploadedImages").append(
        `<div class="image">
               <input type="hidden" name="images[]" value="${img}">
               <img src="${img}" alt="" width="200">
               <div class="image-overlay">
                 <i class="fas fa-times" onclick="removeimg(event)"></i>
               </div>
             </div>`
      );

    });

    $('.ok').on('click', function() {

      var img = $('#feature_photo').val();
      // if featured image preview section contains the preview image then set the input field for featured image
      if ($(".featured-image .span4.cropme").children().is('img') > 0) {
        $("#featuredImage").val(img);
      }

      // if IMAGES preview section contains the preview image then show the SAVE TO GALLERY button
      if ($(".images .span4.cropme").children().is('img') > 0) {
        $("#saveBtn").toggleClass('d-none');
      }

    });

  });
</script>


{{-- get models for selected brand --}}
<script>
  function getModels(brandid) {
    var url = '/admin/car/' + brandid + '/models';
    // console.log(url);
    $.get(url, function(data) {
      // console.log(data);
      var opts = `<option value="Select a model" disabled="" selected="">Select a model</option>`;
      for (var i = 0; i < data.length; i++) {
        opts += `<option value="${data[i].id}">${data[i].name}</option>`;
      }
      $("#selectModels").html(opts);
    })
  }
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".myTags").tagit();
  });

  $(document).ready(function() {
    $('.searchable-select').select2();
  });
</script>

<script>
  var app = new Vue({
    el: '#app',
    data: {
      count: 0
    },
    methods: {
      addspec() {
        this.count++;
      },
      subspec(n) {
        $("#spec" + n).remove();
      },
      subexspec(n) {
        $("#exspec" + n).remove();
      }
    }
  })
</script>
@endsection