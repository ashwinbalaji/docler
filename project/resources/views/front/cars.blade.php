@extends('layouts.front')

@section('content')














<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="pagetitle">
					{{ $langg->lang301 }}
				</h1>
				<ul class="pages">
					<li>
						<a href="{{ route('front.index') }}">
							{{ $langg->lang1 }}
						</a>
					</li>
					<li class="active">
						<a href="#">
							{{ $langg->lang301 }}
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb Area End -->


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
<div class="panel panel-default">
              <div class="panel-heading">
              <h3 class="panel-title panel-rsptitle1">Search By Brand</h3>
              <span class="clickable">
                <i class="fas fa-chevron-down glyphicon glyphicon-chevron-up"></i>
              </span>
            </div>
            <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
        </form>
            <div class="panel-body">
              <form>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Mariti</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Hyundai</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Toyota</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Mahindra</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Kia</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Nissan</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Skoda</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Ford</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Fiat</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Honda</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Tata</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Wolkswagen</label>
                </div>
              </form>
            </div>
          </div>




          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title  panel-rsptitle1">Search By Budget</h3>
              <span class="clickable"><i class="fas fa-chevron-down glyphicon glyphicon-chevron-up"></i></span>
            </div>
            <div class="panel-body">
              <form>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">5 - 10 Lakh</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">10 - 15 Lakh</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">15 - 20 Lakh</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">20 - 50 Lakh</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">50 Lakh - 1 Crore</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Above 1 Crore</label>
                </div>
               
              </form>
            </div>
          </div>

</div>





<section class="responsive_filter">
  <div class="container">
    <ul class="filterSticky hidden-lg hidden-md" data-track-component="stickyfilter">
      <li><span class="icon-cd-sorting"></span> Sort</li>
      <li class="bd_non">
        <span class="icon-cd-filter hide" data-openfilter="true"></span>
        
      
      <span class="side-bar count" data-spy="affix" data-offset-top="100" id="myAffix" style="cursor:pointer" onclick="openNav()">☰ Filters</span>

      </li>



      
    </ul>
  </div>
</section>


<!-- sub-categori Area Start -->
<section class="sub-categori">
	<div class="container">
		<div class="row">
			






<div class="col-lg-3 col-md-3">
        <div class="left-area rspnone">


            <div class="panel panel-default">
              <div class="panel-heading">
              <h3 class="panel-title">Search By Brand</h3>
              <span class="pull-right clickable">
                <i class="fas fa-chevron-down glyphicon glyphicon-chevron-up"></i>
              </span>
            </div>
            <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
        </form>
            <div class="panel-body">
              <form>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Mariti</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Hyundai</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Toyota</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Mahindra</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Kia</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Nissan</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Skoda</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Ford</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Fiat</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Honda</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Tata</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Wolkswagen</label>
                </div>
              </form>
            </div>
          </div>




          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Search By Budget</h3>
              <span class="pull-right clickable"><i class="fas fa-chevron-down glyphicon glyphicon-chevron-up"></i></span>
            </div>
            <div class="panel-body">
              <form>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">5 - 10 Lakh</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">10 - 15 Lakh</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">15 - 20 Lakh</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">20 - 50 Lakh</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">50 Lakh - 1 Crore</label>
                </div>
                <div class="form-group">
                  <input type="checkbox">
                  <label class="gs_control gs_checkbox">Above 1 Crore</label>
                </div>
               
              </form>
            </div>
          </div>





          <!--div class="filter-result-area">
            <div class="header-area">
              <h4 class="title">
                {{ $langg->lang22 }}
              </h4>
            </div>
            <div class="body-area">
              <form action="#">
                <div class="price-range-block">
                  <div id="slider-range" class="price-filter-range" name="rangeInput"></div>
                  <div class="livecount">
                    <input type="number" min=0 max="9900" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                    <span>To</span>
                    <input type="number" min=0 max="10000" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field" />
                  </div>
                </div>

                <button class="filter-btn price-btn apply-btn" type="button">{{ $langg->lang34 }}</button>
              </form>
            </div>
          </div>
          <div class="all-categories-area">
            <div class="header-area">
              <h4 class="title">
                {{ $langg->lang35 }}
              </h4>
            </div>
            <div class="body-area">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header">
                    <a class="button d-inline-block pb-2 cat-anchor" href="#" data-cat_id="" @if(empty(request()->input('category_id'))) style="color: #0056b3;" @endif>
                      <i class="icofont-thin-double-right"></i> {{ $langg->lang35 }}
                    </a>
                  </div>
                </div>
                @foreach ($cats as $key => $cat)
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <a class="button d-inline-block pb-2 cat-anchor" href="#" data-cat_id="{{ $cat->id }}" @if($cat->id == request()->input('category_id')) style="color: #0056b3;" @endif>
                      <i class="icofont-thin-double-right"></i>{{ $cat->name }}
                    </a>
                  </div>
                </div>
                @endforeach


              </div>
            </div>
          </div-->
          <!-- brand type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                {{ $langg->lang36 }}
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">
                @foreach ($brands as $key => $brand)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input brand-check" type="checkbox" id="b{{$brand->id}}" value="{{ $brand->id }}" {{  is_array(request()->input('brand_id')) && in_array($brand->id, request()->input('brand_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="b{{$brand->id}}">
                          {{ $brand->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>
                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- brand type sorting function  end -->


          <!-- fuel type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Fuel Types
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($fuel_type as $key => $type)
                <li class="d-block">
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input fuel_type_id-check" type="checkbox" id="f{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('fuel_type_id')) && in_array($type->id, request()->input('fuel_type_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="f{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- fuel type sorting function end-->



          <!-- acceleration type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Acceleration
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($acceleration as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input acceleration_id-check" type="checkbox" id="ac{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('acceleration_id')) && in_array($type->id, request()->input('acceleration_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="ac{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- acceleration type sorting function end-->







          <!-- cylinders type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Cylinders
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($cylinders as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input cylinders_id-check" type="checkbox" id="cy{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('cylinders_id')) && in_array($type->id, request()->input('cylinders_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="cy{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- cylinders type sorting function end-->








          <!-- drive_type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Drive Type
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($drive_type as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input drive_type_id-check" type="checkbox" id="dr{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('drive_type_id')) && in_array($type->id, request()->input('drive_type_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="dr{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- drive_type sorting function end-->







          <!-- engine_capacity  sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Engine Capacity
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($engine_capacity as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input engine_capacity_id-check" type="checkbox" id="en{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('engine_capacity_id')) && in_array($type->id, request()->input('engine_capacity_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="en{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- engine_capacity  sorting function end-->







          <!-- fuel_economy  sorting function start-->
         <!--  <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Fuel Economy
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($fuel_economy as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input fuel_economy_id-check" type="checkbox" id="fe{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('fuel_economy_id')) && in_array($type->id, request()->input('fuel_economy_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="fe{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- fuel type sorting function end-->







          <!-- fuel_tank_capacity sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Fuel Tank Capacity
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($fuel_tank_capacity as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input fuel_tank_capacity_id-check" type="checkbox" id="ft{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('fuel_tank_capacity_id')) && in_array($type->id, request()->input('fuel_tank_capacity_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="ft{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- fuel type sorting function end-->







          <!-- fuel type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Height
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($height as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input height_id-check" type="checkbox" id="he{{$brand->id}}" value="{{ $type->id }}" {{  is_array(request()->input('height_id')) && in_array($type->id, request()->input('height_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="he{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- fuel type sorting function end-->







          <!-- horsepower sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Horse Power
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($horsepower as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input horsepower_id-check" type="checkbox" id="ho{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('horsepower_id')) && in_array($type->id, request()->input('horsepower_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="ho{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- fuel type sorting function end-->







          <!-- fuel type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Length
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($length as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input length_id-check" type="checkbox" id="len{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('length_id')) && in_array($type->id, request()->input('length_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="len{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- fuel type sorting function end-->







          <!-- make  sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Make
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($make as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input make_id-check" type="checkbox" id="f{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('make_id')) && in_array($type->id, request()->input('make_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="f{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- fuel type sorting function end-->







          <!-- model sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Model
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($model as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input model_id-check" type="checkbox" id="mo{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('model_id')) && in_array($type->id, request()->input('model_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="mo{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- model sorting function end-->







          <!-- seating_capacity  sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Seating Capacity
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($seating_capacity as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input seating_capacity_id-check" type="checkbox" id="se{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('seating_capacity_id')) && in_array($type->id, request()->input('seating_capacity_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="se{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- seating_capacity  sorting function end-->







          <!--  top_speed sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Top Speed
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($top_speed as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input  top_speed_id-check" type="checkbox" id="top{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('top_speed_id')) && in_array($type->id, request()->input('top_speed_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="top{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!--top_speed sorting function end-->







          <!-- torque sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Torque
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($torque as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input torque_id-check" type="checkbox" id="f{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('torque_id')) && in_array($type->id, request()->input('torque_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="f{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- torque sorting function end-->







          <!--  transmission sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Transmission
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($transmission as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input  transmission_id-check" type="checkbox" id="tr{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('transmission_id')) && in_array($type->id, request()->input('transmission_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="tr{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- transmission sorting function end-->







          <!-- trunk_capacity sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Trunk Capacity
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($trunk_capacity as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input trunk_capacity_id-check" type="checkbox" id="tru{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('trunk_capacity_id')) && in_array($type->id, request()->input('trunk_capacity_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="tru{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- trunk_capacity sorting function end-->







          <!-- wheelbase type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Wheelbase
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($wheelbase as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input wheelbase_id-check" type="checkbox" id="whe{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('wheelbase_id')) && in_array($type->id, request()->input('wheelbase_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="whe{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- wheelbase sorting function end-->


          <!-- width type sorting function start-->
          <!-- <div class="design-area">
            <div class="header-area">
              <h4 class="title">
                Width
              </h4>
            </div>
            <div class="body-area">
              <ul class="filter-list brand-list">

                @foreach ($width as $key => $type)
                <li>
                  <div class="content">
                    <div class="check-box">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input width_id-check" type="checkbox" id="wid{{$type->id}}" value="{{ $type->id }}" {{  is_array(request()->input('width_id')) && in_array($type->id, request()->input('width_id')) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        <label class="form-check-label brand-label" for="wid{{$type->id}}">
                          {{ $type->name }}
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                @endforeach
                <div class="row">
                  <div class="col-lg-6">
                    <button class="apply-btn filter-btn" type="button" style="width:100%;">{{ $langg->lang37 }}</button>
                  </div>

                </div>
              </ul>
            </div>
          </div> -->
          <!-- wheelbase sorting function end-->


<section class="Googl_ads sd1">
  <div class="">
    <div class="adsgg">
      <img src="https://dge4uaysoh8oy.cloudfront.net/public/templates/gallery/img/b1jsolflu/Toyota-CHR-Animated-Banner-Design.jpg">
    </div>
  </div>
</section>
<section class="clear bodyType boxthree marginBottom30 shadowWPadding RightSideSpaceHolder " data-track-component="carbybrand">
   <h2 class="">Popular cars by brand</h2>
   <div class="">
      <ul class="clearfix  ">
         <li><a title="Maruti Cars" href="" class=""><img class="hover ico_maruti imageTransition active" title="Maruti Cars" alt="Maruti Cars" src="https://stimg.cardekho.com/pwa/img/maruti.png" data-lazy="true"><span>Maruti</span></a></li>
         <li><a title="Hyundai Cars" href="" class=""><img class="hover ico_hyundai imageTransition active" title="Hyundai Cars" alt="Hyundai Cars" src="https://stimg.cardekho.com/pwa/img/hyundai.png" data-lazy="true"><span>Hyundai</span></a></li>
         <li><a title="Honda Cars" href="" class=""><img class="hover ico_honda imageTransition active" title="Honda Cars" alt="Honda Cars" src="https://stimg.cardekho.com/pwa/img/honda.png" data-lazy="true"><span>Honda</span></a></li>
         <li><a title="Tata Cars" href="" class=""><img class="hover ico_tata imageTransition active" title="Tata Cars" alt="Tata Cars" src="https://stimg.cardekho.com/pwa/img/tata.png" data-lazy="true"><span>Tata</span></a></li>
         <li><a title="Mahindra Cars" href="" class=""><img class="hover ico_mahindra imageTransition active" title="Mahindra Cars" alt="Mahindra Cars" src="https://stimg.cardekho.com/pwa/img/mahindra.png" data-lazy="true"><span>Mahindra</span></a></li>
         <li><a title="Renault Cars" href="" class=""><img class="hover ico_renault imageTransition active" title="Renault Cars" alt="Renault Cars" src="https://stimg.cardekho.com/pwa/img/renault.png" data-lazy="true"><span>Renault</span></a></li>
         <li><a title="Ford Cars" href="" class=""><img class="hover ico_ford imageTransition active" title="Ford Cars" alt="Ford Cars" src="https://stimg.cardekho.com/pwa/img/ford.png" data-lazy="true"><span>Ford</span></a></li>
         <li><a title="Nissan Cars" href="" class=""><img class="hover ico_nissan imageTransition active" title="Nissan Cars" alt="Nissan Cars" src="https://stimg.cardekho.com/pwa/img/nissan.png" data-lazy="true"><span>Nissan</span></a></li>
         <li><a title="Datsun Cars" href="" class=""><img class="hover ico_datsun imageTransition active" title="Datsun Cars" alt="Datsun Cars" src="https://stimg.cardekho.com/pwa/img/datsun.png" data-lazy="true"><span>Datsun</span></a></li>
         <li><a title="Toyota Cars" href="" class=""><img class="hover ico_toyota imageTransition active" title="Toyota Cars" alt="Toyota Cars" src="https://stimg.cardekho.com/pwa/img/toyota.png" data-lazy="true"><span>Toyota</span></a></li>
         <li><a title="MG Cars" href="" class=""><img class="hover ico_mg imageTransition active" title="MG Cars" alt="MG Cars" src="https://stimg.cardekho.com/pwa/img/mg.png" data-lazy="true"><span>MG</span></a></li>
         <li><a title="Kia Cars" href="" class=""><img class="hover ico_kia imageTransition active" title="Kia Cars" alt="Kia Cars" src="https://stimg.cardekho.com/pwa/img/kia.png" data-lazy="true"><span>Kia</span></a></li>
      </ul>
   </div>
   <div class="BottomLinkViewAll"><a data-before="View All" title="Car Brands" class="link" href="">Car Brands</a></div>
</section>


        </div>
      </div>





























			<div class="col-lg-9 ">
				<div class="row">

					<div class="col-md-4">
						<div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maserati/Maserati-Quattroporte/4205/front-left-side-47.jpg">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
    					</div>
					</div>
					<div class="col-md-4">
						<div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Toyota/Yaris/7281/1577948866044/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
    					</div>
					</div>
					<div class="col-md-4">
						<div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maruti/Maruti-Alto-800/7066/1565265450182/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
    					</div>
					</div>
					<div class="col-md-4">
						<div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maserati/Maserati-Ghibli/6321/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
    					</div>
					</div>
					<div class="col-md-4">
						<div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Honda/Honda-City/5630/1557812647206/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
    					</div>
					</div>
					<div class="col-md-4">
						<div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Audi/A4/7228/1572929406146/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
    					</div>
					</div>
				</div>

        <section class="Googl_ads">
  <div class="">
    <div class="adsgg">
      <img src="https://media-cf.assets-cdk.com/websites/content/373b6818bf2742d48c40a5557343313e_1599x255.png">
    </div>
  </div>
</section>


<div class="row">

          <div class="col-md-4">
            <div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maserati/Maserati-Quattroporte/4205/front-left-side-47.jpg">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Toyota/Yaris/7281/1577948866044/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maruti/Maruti-Alto-800/7066/1565265450182/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maserati/Maserati-Ghibli/6321/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Honda/Honda-City/5630/1557812647206/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="product-item" style="width: 100%; display: inline-block;">
                            <div class="card shadowWPadding " data-img-fit="true">
                                <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                                  <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                                    <img class="hover imageTransition   active slick-lazyload-error" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Audi/A4/7228/1572929406146/front-left-side-47.jpg?tr=w-290,e-sharpen">
                                  </div>
                                </div>
                                <div class="gsc_col-xs-12 holder ">
                                  <a title="  Maruti Swift " class="title" href="/maruti/swift" tabindex="0">  Maruti Swift </a>
                                  <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                                  <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                    <div class="primaryButton btn-dcb ">Get On Road Price</div>
                                  </div>
                                </div>
                            </div>
              </div>
          </div>
        </div>

			</div>



			<!-- <div class="col-lg-9 order-first order-lg-last">
				<div class="right-area">
					<div class="item-filter">
						<ul class="filter-list">
							<li class="item-short-area">
								<p>{{ $langg->lang23 }} :</p>
								<select class="short-item sel-sort" name="sort">
									<option value="desc" {{ request()->input('sort') == 'desc' ? 'selected' : '' }}>{{ $langg->lang24 }}</option>
									<option value="asc" {{ request()->input('sort') == 'asc' ? 'selected' : '' }}>{{ $langg->lang25 }}</option>
									<option value="price_desc" {{ request()->input('sort') == 'price_desc' ? 'selected' : '' }}>{{ $langg->lang26 }}</option>
									<option value="price_asc" {{ request()->input('sort') == 'price_asc' ? 'selected' : '' }}>{{ $langg->lang27 }}</option>
								</select>
							</li>
							<li class="viewitem-no-area">
								<p>{{ $langg->lang28 }} :</p>
								<select class="short-itemby-no sel-view">
									<option value="10" {{ request()->input('view') == 10 ? 'selected' : '' }}>{{ $langg->lang29 }}</option>
									<option value="20" {{ request()->input('view') == 20 ? 'selected' : '' }}>{{ $langg->lang30 }}</option>
									<option value="30" {{ request()->input('view') == 30 ? 'selected' : '' }}>{{ $langg->lang31 }}</option>
									<option value="40" {{ request()->input('view') == 40 ? 'selected' : '' }}>{{ $langg->lang32 }}</option>
									<option value="50" {{ request()->input('view') == 50 ? 'selected' : '' }}>{{ $langg->lang33 }}</option>
								</select>
							</li>
						</ul>
					</div>
					<div class="categori-item-area">
						<div class="row">
							@if (count($cars) == 0)
							<div class="col-lg-12 text-center">
								<h6>NO CAR FOUND</h2>
							</div>
							@else
							@foreach ($cars as $key => $car)
							<div class="col-lg-6 col-md-6">
								<a class="car-info-box" href="{{ route('front.details', $car->id) }}">
									<div class="img-area">
										<img class="light-zoom" src="{{asset('assets/front/images/cars//featured/'.$car->featured_image)}}" alt="">
									</div>
									<div class="content">
										<h4 class="title">
											{{ $car->car_name }}
										</h4>
										<ul class="top-meta">
											<li>
												<i class="far fa-eye"></i> {{ $car->views }} {{ $langg->lang66 }}
											</li>
											<li>
												<i class="far fa-clock"></i> {{ time_elapsed_string($car->created_at) }}
											</li>
										</ul>
										<ul class="short-info">
											<li class="north-west" title="Model Year">
												<img src="{{asset('assets/front/images/calender-icon.png')}}" alt="">
												<p> dummy</p>
											</li>
											<li class="north-west" title="Mileage">
												<img src="{{asset('assets/front/images/road-icon.png')}}" alt="">
												<p>dummy</p>
											</li>
											<li class="north-west" title="Top Speed (KMH)">
												<img src="{{asset('assets/front/images/transformar.png')}}" alt="">
												<p>dummy</p>
											</li>
										</ul>
										<div class="footer-area">
											<div class="left-area">
												@if (empty($car->price))
												<p class="price">
													{{ $car->currency_symbol }} {{ number_format($car->price, 0, '', ',') }}
												</p>
												@else
												<p class="price">
													{{ $car->currency_symbol }} {{ number_format($car->price, 0, '', ',') }} <del>{{ $car->currency_symbol }} {{ number_format($car->price, 0, '', ',') }}</del>
												</p>
												@endif
											</div>
											<div class="right-area">
												<p class="condition">
												</p>
											</div>
										</div>
									</div>
								</a>
							</div>
							@endforeach
							@endif

							<div class="col-12 text-center">
								{{ $cars->appends(['minprice' => request()->input('minprice'), 'maxprice' => request()->input('maxprice'), 'category_id' => request()->input('category_id'), 'fuel_type_id' => request()->input('fuel_type_id'), 'transmission_type_id' => request()->input('transmission_type_id'), 'condition_id' => request()->input('condition_id'), 'make_id' => request()->input('brand_id'), 'type' => request()->input('type'), 'sort' => request()->input('sort'), 'view' => request()->input('view')])->links() }}
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>
<!-- sub-categori Area End -->

<form id="searchForm" class="d-none" action="{{ route('front.cars') }}" method="get">
	<input type="text" name="minprice" value="{{ !empty(request()->input('minprice')) ? request()->input('minprice') : $minprice }}">
	<input type="hidden" name="maxprice" value="{{ !empty(request()->input('maxprice')) ? request()->input('maxprice') : $maxprice }}">
	<input type="hidden" name="category_id" value="{{ !empty(request()->input('category_id')) ? request()->input('category_id') : null }}">



	@if (!empty(request()->input('brand_id')))
	@php
	$brands = request()->input('brand_id');
	@endphp
	@foreach ($brands as $key => $brand)
	<input type="hidden" name="brand_id[]" value="{{ $brand }}">
	@endforeach

	@endif



	@if (!empty(request()->input('acceleration_id')))
	@php
	$accelerations = request()->input('acceleration_id');
	@endphp
	@foreach ($accelerations as $key => $acceleration)
	<input type="hidden" name="acceleration_id[]" value="{{ $acceleration }}">
	@endforeach

	@endif

	@if (!empty(request()->input('cylinders_id')))
	@php
	$cylinders = request()->input('cylinders_id');
	@endphp
	@foreach ($cylinders as $key => $cylinder)
	<input type="hidden" name="cylinders_id[]" value="{{ $cylinder }}">
	@endforeach

	@endif



	@if (!empty(request()->input('drive_type_id')))
	@php
	$drive_types = request()->input('drive_type_id');
	@endphp
	@foreach ($drive_types as $key => $drive_type)
	<input type="hidden" name="drive_type_id[]" value="{{ $drive_type }}">
	@endforeach

	@endif



	@if (!empty(request()->input('engine_capacity_id')))
	@php
	$engine_capacitys = request()->input('engine_capacity_id');
	@endphp
	@foreach ($engine_capacitys as $key => $engine_capacity)
	<input type="hidden" name="engine_capacity_id[]" value="{{ $engine_capacity }}">
	@endforeach

	@endif


	@if (!empty(request()->input('fuel_tank_capacity_id')))
	@php
	$fuel_tank_capacitys = request()->input('fuel_tank_capacity_id');
	@endphp
	@foreach ($fuel_tank_capacitys as $key => $fuel_tank_capacity)
	<input type="hidden" name="fuel_tank_capacity_id[]" value="{{ $fuel_tank_capacity }}">
	@endforeach

	@endif


	@if (!empty(request()->input('acceleration_id')))
	@php
	$accelerations = request()->input('acceleration_id');
	@endphp
	@foreach ($accelerations as $key => $acceleration)
	<input type="hidden" name="acceleration_id[]" value="{{ $acceleration }}">
	@endforeach

	@endif



	@if (!empty(request()->input('fuel_type_id')))
	@php
	$fuel_types = request()->input('fuel_type_id');
	@endphp
	@foreach ($fuel_types as $key => $fuel_type)
	<input type="hidden" name="fuel_type_id[]" value="{{ $fuel_type }}">
	@endforeach

	@endif


	@if (!empty(request()->input('height_id')))
	@php
	$heights = request()->input('height_id');
	@endphp
	@foreach ($heights as $key => $height)
	<input type="hidden" name="height_id[]" value="{{ $height }}">
	@endforeach

	@endif


	@if (!empty(request()->input('horsepower_id')))
	@php
	$horsepowers = request()->input('horsepower_id');
	@endphp
	@foreach ($horsepowers as $key => $horsepower)
	<input type="hidden" name="horsepower_id[]" value="{{ $horsepower }}">
	@endforeach

	@endif


	@if (!empty(request()->input('fuel_economy_id')))
	@php
	$fuel_economys = request()->input('fuel_economy_id');
	@endphp
	@foreach ($fuel_economys as $key => $fuel_economy)
	<input type="hidden" name="fuel_economy_id[]" value="{{ $fuel_economy }}">
	@endforeach

	@endif


	@if (!empty(request()->input('model_id')))
	@php
	$models = request()->input('model_id');
	@endphp
	@foreach ($models as $key => $model)
	<input type="hidden" name="model_id[]" value="{{ $model }}">
	@endforeach

	@endif

	@if (!empty(request()->input('torque_id')))
	@php
	$torques = request()->input('torque_id');
	@endphp
	@foreach ($torques as $key => $torque)
	<input type="hidden" name="torque_id[]" value="{{ $torque }}">
	@endforeach

	@endif


	@if (!empty(request()->input('length_id')))
	@php
	$lengths = request()->input('length_id');
	@endphp
	@foreach ($lengths as $key => $length)
	<input type="hidden" name="length_id[]" value="{{ $length }}">
	@endforeach

	@endif


	@if (!empty(request()->input('make_id')))
	@php
	$makes = request()->input('make_id');
	@endphp
	@foreach ($makes as $key => $make)
	<input type="hidden" name="make_id[]" value="{{ $make }}">
	@endforeach

	@endif


	@if (!empty(request()->input('seating_capacity_id')))
	@php
	$seating_capacitys = request()->input('seating_capacity_id');
	@endphp
	@foreach ($seating_capacitys as $key => $seating_capacity)
	<input type="hidden" name="seating_capacity_id[]" value="{{ $seating_capacity }}">
	@endforeach

	@endif



	@if (!empty(request()->input('top_speed_id')))
	@php
	$top_speeds = request()->input('top_speed_id');
	@endphp
	@foreach ($top_speeds as $key => $top_speed)
	<input type="hidden" name="top_speed_id[]" value="{{ $top_speed }}">
	@endforeach

	@endif

	@if (!empty(request()->input('torque_id')))
	@php
	$torques = request()->input('torque_id');
	@endphp
	@foreach ($torques as $key => $torque)
	<input type="hidden" name="horsepower_id[]" value="{{ $horsepower }}">
	@endforeach

	@endif

	@if (!empty(request()->input('transmission_id')))
	@php
	$transmissions = request()->input('transmission_id');
	@endphp
	@foreach ($transmissions as $key => $transmission)
	<input type="hidden" name="transmission_id[]" value="{{ $transmission }}">
	@endforeach

	@endif

	@if (!empty(request()->input('trunk_capacity_id')))
	@php
	$trunk_capacitys = request()->input('trunk_capacity_id');
	@endphp
	@foreach ($trunk_capacitys as $key => $trunk_capacity)
	<input type="hidden" name="trunk_capacity_id[]" value="{{ $trunk_capacity }}">
	@endforeach

	@endif

	@if (!empty(request()->input('wheelbase_id')))
	@php
	$wheelbases = request()->input('wheelbase_id');
	@endphp
	@foreach ($wheelbases as $key => $wheelbase)
	<input type="hidden" name="wheelbase_id[]" value="{{ $wheelbase }}">
	@endforeach

	@endif


	@if (!empty(request()->input('width_id')))
	@php
	$widths = request()->input('width_id');
	@endphp
	@foreach ($widths as $key => $width)
	<input type="hidden" name="width_id[]" value="{{ $width }}">
	@endforeach

	@endif









	<input type="hidden" name="transmission_type_id" value="{{ !empty(request()->input('transmission_type_id')) ? request()->input('transmission_type_id') : null }}">
	<input type="hidden" name="condition_id" value="{{ !empty(request()->input('condition_id')) ? request()->input('condition_id') : null }}">
	<input type="hidden" name="type" value="{{ !empty(request()->input('type')) ? request()->input('type') : 'all' }}">
	<input type="hidden" name="sort" value="{{ !empty(request()->input('sort')) ? request()->input('sort') : 'desc' }}">
	<input type="hidden" name="view" value="{{ !empty(request()->input('view')) ? request()->input('view') : 10 }}">
	<button type="submit"></button>
</form>

@endsection


@section('scripts')
<script>
	// pricing range
	// $(document).ready(function() {
	// 	$("#price-range-submit").hide(), $("#min_price,#max_price").on("change", function() {
	// 		$("#price-range-submit").show();
	// 		var e = parseInt($("#min_price").val()),
	// 			i = parseInt($("#max_price").val());
	// 		e > i && $("#max_price").val(e), $("#slider-range").slider({
	// 			values: [e, i]
	// 		})
	// 	}), $("#min_price,#max_price").on("paste keyup", function() {
	// 		$("#price-range-submit").show();
	// 		var e = parseInt($("#min_price").val()),
	// 			i = parseInt($("#max_price").val());
	// 		e == i && (i = e + 100, $("#min_price").val(e), $("#max_price").val(i)), $("#slider-range").slider({
	// 			values: [e, i]
	// 		})
	// 	}), $(function() {
	// 		$("#slider-range").slider({
	// 			range: !0,
	// 			orientation: "horizontal",
	// 			min: minprice,
	// 			max: maxprice,
	// 			values: [{
	// 				{
	// 					!empty(request() - > input('minprice')) ? request() - > input('minprice') : $minprice
	// 				}
	// 			}, {
	// 				{
	// 					!empty(request() - > input('maxprice')) ? request() - > input('maxprice') : $maxprice
	// 				}
	// 			}],
	// 			step: 50,
	// 			slide: function(e, i) {
	// 				if (i.values[0] == i.values[1]) return !1;
	// 				$("#min_price").val(i.values[0]), $("#max_price").val(i.values[1])
	// 			}
	// 		}), $("#min_price").val($("#slider-range").slider("values", 0)), $("#max_price").val($("#slider-range").slider("values", 1))
	// 	}), $("#slider-range,#price-range-submit").click(function() {
	// 		var e = $("#min_price").val(),
	// 			i = $("#max_price").val();
	// 		$("#searchResults").text("Here List of products will be shown which are cost between " + e + " and " + i + ".")
	// 	})
	// });
</script>


<script>
	$(document).ready(function() {
		$(".brand-list li").each(function(i) {
			if (i < 6) {
				$(this).addClass('d-block');
			} else {
				$(this).addClass('d-block');
			}
		});

		$("#showMore").on('click', function(e) {
			e.preventDefault();

			let btntxt = $(e.target).html();

			if (btntxt == 'show more') {
				$(e.target).html('show less');
			} else {
				$(e.target).html('show more');
			}

			$(".brand-list li").each(function() {
				if ($(this).hasClass('addbrand')) {
					$(this).toggleClass('d-none');
				}
			});
		})
	})
</script>



{{-- Populate search form with values --}}
<script>
	$(document).ready(function() {

		$(".price-btn").click(function() {
			$("input[name='minprice']").val($("#min_price").val());
			$("input[name='maxprice']").val($("#max_price").val());
		});

		$(".cat-anchor").click(function(e) {
			e.preventDefault();
			$("input[name='category_id']").val($(this).data('cat_id'));
			$("#searchForm").trigger('submit');
		});

		//brand sorting click function 
		$(".brand-check").on("click", function() {
			if ($("input[name='brand_id[]']").length > 0) {
				$("input[name='brand_id[]']").remove();
			}
			$(".brand-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="brand_id[]" value="${$(this).val()}">`);
				}
			});
		});


		//fuel type sorting click function 
		$(".fuel_type_id-check").on("click", function() {

			if ($("input[name='fuel_type_id[]']").length > 0) {
				$("input[name='fuel_type_id[]']").remove();
			}
			$(".fuel_type_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="fuel_type_id[]" value="${$(this).val()}">`);
				}
			});
		});




		//acceleration sorting click function 
		$(".acceleration_id-check").on("click", function() {

			if ($("input[name='acceleration_id[]']").length > 0) {
				$("input[name='acceleration_id[]']").remove();
			}
			$(".acceleration_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="acceleration_id[]" value="${$(this).val()}">`);
				}
			});
		});








		//cylinders sorting click function 
		$(".cylinders_id-check").on("click", function() {

			if ($("input[name='cylinders_id[]']").length > 0) {
				$("input[name='cylinders_id[]']").remove();
			}
			$(".cylinders_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="cylinders_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//fuel type sorting click function 
		$(".drive_type_id-check").on("click", function() {

			if ($("input[name='drive_type_id[]']").length > 0) {
				$("input[name='drive_type_id[]']").remove();
			}
			$(".drive_type_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="drive_type_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//	engine_capacity sorting click function 
		$(".engine_capacity_id-check").on("click", function() {

			if ($("input[name='engine_capacity_id[]']").length > 0) {
				$("input[name='engine_capacity_id[]']").remove();
			}
			$(".engine_capacity_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="engine_capacity_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//fuel_economy sorting click function 
		$(".fuel_economy_id-check").on("click", function() {

			if ($("input[name='fuel_economy_id[]']").length > 0) {
				$("input[name='fuel_economy_id[]']").remove();
			}
			$(".fuel_economy_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="fuel_economy_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//	fuel_tank_capacity sorting click function 
		$(".fuel_tank_capacity_id-check").on("click", function() {

			if ($("input[name='fuel_tank_capacity_id[]']").length > 0) {
				$("input[name='fuel_tank_capacity_id[]']").remove();
			}
			$(".fuel_tank_capacity_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="fuel_tank_capacity_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//height type sorting click function 
		$(".height_id-check").on("click", function() {

			if ($("input[name='height_id[]']").length > 0) {
				$("input[name='height_id[]']").remove();
			}
			$(".height_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="height_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//horsepower sorting click function 
		$(".horsepower_id-check").on("click", function() {

			if ($("input[name='horsepower_id[]']").length > 0) {
				$("input[name='horsepower_id[]']").remove();
			}
			$(".horsepower_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="horsepower_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//length sorting click function 
		$(".length_id-check").on("click", function() {

			if ($("input[name='length_id[]']").length > 0) {
				$("input[name='length_id[]']").remove();
			}
			$(".length_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="length_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//fuel type sorting click function 
		$(".make_id-check").on("click", function() {

			if ($("input[name='make_id[]']").length > 0) {
				$("input[name='make_id[]']").remove();
			}
			$(".make_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="make_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//model sorting click function 
		$(".model_id-check").on("click", function() {

			if ($("input[name='model_id[]']").length > 0) {
				$("input[name='model_id[]']").remove();
			}
			$(".model_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="model_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//seating_capacity sorting click function 
		$(".seating_capacity_id-check").on("click", function() {

			if ($("input[name='seating_capacity_id[]']").length > 0) {
				$("input[name='seating_capacity_id[]']").remove();
			}
			$(".seating_capacity_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="seating_capacity_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//top_speed sorting click function 
		$(".top_speed_id-check").on("click", function() {

			if ($("input[name='top_speed_id[]']").length > 0) {
				$("input[name='top_speed_id[]']").remove();
			}
			$(".top_speed_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="top_speed_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//torque sorting click function 
		$(".torque_id-check").on("click", function() {

			if ($("input[name='torque_id[]']").length > 0) {
				$("input[name='torque_id[]']").remove();
			}
			$(".torque_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="torque_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//transmission  sorting click function 
		$(".transmission_id-check").on("click", function() {

			if ($("input[name='transmission_id[]']").length > 0) {
				$("input[name='transmission_id[]']").remove();
			}
			$(".transmission_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="transmission_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//trunk_capacity  type sorting click function 
		$(".trunk_capacity_id-check").on("click", function() {

			if ($("input[name='trunk_capacity_id[]']").length > 0) {
				$("input[name='trunk_capacity_id[]']").remove();
			}
			$(".trunk_capacity_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="trunk_capacity_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//wheelbase sorting click function 
		$(".wheelbase_id-check").on("click", function() {

			if ($("input[name='wheelbase_id[]']").length > 0) {
				$("input[name='wheelbase_id[]']").remove();
			}
			$(".wheelbase_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="wheelbase_id[]" value="${$(this).val()}">`);
				}
			});
		});







		//	width sorting click function 
		$(".width_id-check").on("click", function() {

			if ($("input[name='width_id[]']").length > 0) {
				$("input[name='width_id[]']").remove();
			}
			$(".width_id-check").each(function() {
				if ($(this).prop("checked")) {
					// console.log($(this).prop("checked"));
					$("#searchForm").append(`<input type="hidden" name="width_id[]" value="${$(this).val()}">`);
				}
			});
		});















		$("#selFuel").on('change', function() {
			$("input[name='fuel_type_id']").val($(this).val());
			$("#searchForm").trigger('submit');
		});

		$("#selTransmission").on('change', function() {
			$("input[name='transmission_type_id']").val($(this).val());
			$("#searchForm").trigger('submit');
		});

		$("#selCondition").on('change', function() {
			$("input[name='condition_id']").val($(this).val());
			$("#searchForm").trigger('submit');
		});

		$(".apply-btn").on('click', function() {
			$("#searchForm").trigger('submit');
		});

		$(".sel-sort").on('change', function() {
			$("input[name='sort']").val($(this).val());
			$("#searchForm").trigger('submit');
		});

		$(".sel-view").on('change', function() {
			$("input[name='view']").val($(this).val());
			$("#searchForm").trigger('submit');
		});
	})
</script>


<!-- dropdown filter -->
<script type="text/javascript">
  $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
    $this.parents('.panel').find('.panel-body').slideUp();
    $this.addClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
  } else {
    $this.parents('.panel').find('.panel-body').slideDown();
    $this.removeClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
  }
})
</script>
<!-- dropdown filter -->

<script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

@endsection