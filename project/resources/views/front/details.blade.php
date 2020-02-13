@extends('layouts.front')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="pagetitle">
               {{ $car->title }}
            </h1>
            <ul class="pages">
               <li>
                  <a href="{{ route('front.index') }}">
                     {{ $langg->lang1 }}
                  </a>
               </li>
               <li class="active">
                  <a href="#">
                     {{ $car->title }}
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- Breadcrumb Area End -->
<section class="Googl_ads pb_0">
   <div class="container">
      <div class="adsgg">
         <img src="https://di-uploads-pod13.dealerinspire.com/mcdonaldhyundai/uploads/2019/04/kbb-banner-march-2019.jpg">
      </div>
   </div>
</section>
<section class="dtls_submenu">
   <!--div class="bottom_header">
      <div class="container cnt_bbtmhead">
         <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler rspnon" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fixed-height" id="main_menu">
               <ul class="navbar-nav mc-auto">
                  <li class="nav-item">
                     <a class="nav-link " href="http://localhost/carsearchme_final">Overview</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="http://localhost/carsearchme_final">Price</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Compare
                     </a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/about/pages">About Us</a>
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/privacy/pages">Privacy &amp; Policy</a>
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/termsu/pages">Terms &amp; Condition</a>
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/dynamic-page-OmtFT-7/pages">Dynamic Page</a>
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/test/pages">test</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="http://localhost/carsearchme_final">Specs</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="http://localhost/carsearchme_final/cars">Images</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="http://localhost/carsearchme_final/faq">User Review</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="http://localhost/carsearchme_final/cars/compare">Varients</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="http://localhost/carsearchme_final/blog">Videos</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link " href="http://localhost/carsearchme_final/contact">Milage </a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     More
                     </a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/about/pages">About Us</a>
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/privacy/pages">Privacy &amp; Policy</a>
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/termsu/pages">Terms &amp; Condition</a>
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/dynamic-page-OmtFT-7/pages">Dynamic Page</a>
                        <a class="dropdown-item " href="http://localhost/carsearchme_final/test/pages">test</a>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div-->
</section>
<!-- Single Details Area Start -->
<section class="single-details">
   <div class="container">
      <div class="row">
         <div class="col-lg-9">
            <div class="model-gallery-image">
               <div class="one-item-slider">
                  @foreach ($car->car_images as $key => $ci)
                  <div class="item"><img src="{{ asset('assets/front/images/cars/sliders/'.$ci->image) }}" alt=""></div>
                  @endforeach
               </div>
               <ul class="all-item-slider">
                  @foreach ($car->car_images as $key => $ci)
                  <li><img src="{{ asset('assets/front/images/cars/sliders/'.$ci->image) }}" alt=""></li>
                  @endforeach
               </ul>
            </div>
            <div class="profile-area">
               <?php /* <div class="profile-info">
                  <div class="left">
                  	@if (empty($car->user->image))
                  		<img src="{{asset('assets/user/blank.png')}}" alt="" style="border-radius: 50%;">
                  	@else
                  		<img src="{{asset('assets/user/propics/'.$car->user->image)}}" alt="" style="border-radius: 50%;">
                  	@endif
                  </div>
                  <div class="right">
                  	<h4 class="title">
                  		{{ $car->user->first_name }} {{ $car->user->last_name }}
                  	</h4>
                  	<ul class="profile-meta">
                  		<li>
                  			<p>
                  				<i class="fas fa-map-marker-alt"></i> {{ $car->user->address }}
                  			</p>
                  		</li>
                  	</ul>
                  </div>
                  </div>
                  <div class="solial-links">
                  <ul>
                  	@if ($car->user->socialsetting->f_status == 1)
                  	<li>
                  		 <a href="{{$car->user->socialsetting->facebook}}" target="_blank">
                  		 <i class="fab fa-facebook-f"></i>
                  		 </a>
                  	</li>
                  	@endif
                  	@if ($car->user->socialsetting->t_status == 1)
                  	<li>
                  		 <a href="{{$car->user->socialsetting->twitter}}" target="_blank">
                  		 <i class="fab fa-twitter"></i>
                  		 </a>
                  	</li>
                  	@endif
                  	@if ($car->user->socialsetting->l_status == 1)
                  	<li>
                  		 <a href="{{$car->user->socialsetting->linkedin}}" target="_blank">
                  		 <i class="fab fa-linkedin-in"></i>
                  		 </a>
                  	</li>
                  	@endif
                  </ul>
                  </div> */ ?>
            </div>
            <div class="product-details-tab">
               <div class="prouct-details-tab-menu">
                  <ul class="nav" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="pills-productdetails-tab" data-toggle="pill" href="#pills-productdetails" role="tab" aria-controls="pills-productdetails" aria-selected="false">Features</a>
                     </li>
                     <!--li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">{{ $langg->lang61 }}</a>
                        </li -->
                  </ul>
               </div>
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-productdetails" role="tabpanel" aria-labelledby="pills-productdetails-tab">
                     <div class="content-product-details">
                        {{ $car->features }}
                     </div>
                  </div>
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                     <?php /* 
                        <div class="contact-area">
                        	<p>{{ $car->user->about }}</p>
                        	<div class="row">
                        		<div class="col-lg-4">
                        			<div class="info-box">
                        				<h4 class="title">
                        					{{ $langg->lang62 }}:
                        				</h4>
                        				<p class="text">
                        					{{ $car->user->first_name }} {{ $car->user->last_name }}
                        				</p>
                        			</div>
                        			<div class="info-box">
                        				<h4 class="title">
                        					{{ $langg->lang63 }}:
                        				</h4>
                        				<p class="text">
                        					{{ $car->user->address }}
                        				</p>
                        			</div>
                        			<div class="info-box">
                        				<h4 class="title">
                        					{{ $langg->lang64 }}:
                        				</h4>
                        				<p class="text">
                        					{{ $car->user->phone }}
                        				</p>
                        			</div>
                        			<div class="info-box">
                        				<h4 class="title">
                        					{{ $langg->lang65 }}:
                        				</h4>
                        				<p class="text">
                        					{{ $car->user->email }}
                        				</p>
                        			</div>
                        		</div>
                        		<div class="col-lg-8">
                        			<div class="google_map_wrapper">
                        				<div id="map"></div>
                        			</div>
                        		</div>
                        	</div>
                        
                        </div>
                        */ ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="details-info-area">
               <div class="heading">
                  <h4 class="title">
                     {{ $langg->lang46 }}
                  </h4>
                  <ul class="details-list">

                     @if (!empty($car->acceleration->name))
                     <li>
                        <p>Acceleration:</p>
                        <P>{{ $car->acceleration->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->cylinders->name))
                     <li>
                        <p>Cylinders:</p>
                        <P>{{ $car->cylinders->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->drive_type->name))
                     <li>
                        <p>Drive Type:</p>
                        <P>{{ $car->drive_type->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->engine_capacity->name))
                     <li>
                        <p>Engine Capacity:</p>
                        <P>{{ $car->engine_capacity->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->fuel_economy->name))
                     <li>
                        <p>Fuel Economy:</p>
                        <P>{{ $car->fuel_economy->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->fuel_tank_capacity->name))
                     <li>
                        <p> Fuel Tank Capacity:</p>
                        <P>{{ $car->fuel_tank_capacity->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->fuel_type->name))
                     <li>
                        <p>Fuel Type:</p>
                        <P>{{ $car->fuel_type->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->height->name))
                     <li>
                        <p>Height:</p>
                        <P>{{ $car->height->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->length->name))
                     <li>
                        <p>Length:</p>
                        <P>{{ $car->length->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->width->name))
                     <li>
                        <p>Width:</p>
                        <P>{{ $car->width->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->horsepower->name))
                     <li>
                        <p>Horse Power:</p>
                        <P>{{ $car->horsepower->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->make->name))
                     <li>
                        <p>Make:</p>
                        <P>{{ $car->make->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->seating_capacity->name))
                     <li>
                        <p>Seating Capacity:</p>
                        <P>{{ $car->seating_capacity->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->top_speed->name))
                     <li>
                        <p>Top Speed:</p>
                        <P>{{ $car->top_speed->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->torque->name))
                     <li>
                        <p>Torque:</p>
                        <P>{{ $car->torque->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->transmission->name))
                     <li>
                        <p>Transmission:</p>
                        <P>{{ $car->transmission->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->trunk_capacity->name))
                     <li>
                        <p>Trunk Capacity:</p>
                        <P>{{ $car->trunk_capacity->name }}</P>
                     </li>
                     @endif
                     @if (!empty($car->wheelbase->name))
                     <li>
                        <p> Wheel Base:</p>
                        <P>{{ $car->wheelbase->name }}</P>
                     </li>
                     @endif
                     <?php /* 
                        <li>
                        	@if (empty($car->sale_price))
                        	<p>{{ $langg->lang48 }}:</p>
                        	<p>{{ $car->currency_symbol }} {{ $car->regular_price }}</p>
                        	@else
                        	<p>{{ $langg->lang48 }}:</p>
                        	<p><del>{{ $car->currency_symbol }} {{ $car->regular_price }}</del> <span>{{ $car->currency_symbol }} {{ $car->sale_price }}</span></p>
                        	@endif
                        </li>
                        <li>
                        	<p>{{ $langg->lang49 }}:</p>
                        	<p>{{ $car->negotiable == 1 ? 'YES' : 'NO' }}</p>
                        </li>
                        <li>
                        	
                        	<p>{{ $langg->lang50 }}:</p>
                        	<p>{{ $car->condtion->name }}</p>
                        	
                        
                        </li>
                        <li>
                        	<p>{{ $langg->lang51 }}:</p>
                        	<p>{{ $car->top_speed }} KM/H</p>
                        </li>
                        <li>
                        	<p>{{ $langg->lang52 }}:</p>
                        	<p>{{ $car->year }}</p>
                        </li>
                        <li>
                        	<p>{{ $langg->lang53 }}:</p>
                        	<p>{{ $car->mileage }}</p>
                        </li>
                        <li>
                        	<p>{{ $langg->lang54 }}:</p>
                        	<p>{{ $car->brand->name }}</p>
                        </li>
                        <li>
                        	<p>{{ $langg->lang55 }}:</p>
                        	<p>{{ $car->brand_model->name }}</p>
                        </li>
                        @if(!empty($car->body_type_id))
                        <li>
                        	<p>{{ $langg->lang56 }}:</p>
                        	<p>{{ $car->body_type->name }}</p>
                        </li>
                        @endif
                        @if(!empty($car->fuel_type_id))
                        <li>
                        	<p>{{ $langg->lang57 }}:</p>
                        	<p>{{ $car->fuel_type->name }}</p>
                        </li>
                        @endif
                        @if(!empty($car->transmission_type_id))
                        <li>
                        	<p>{{ $langg->lang58 }}:</p>
                        	<p>{{ $car->transmission_type->name }}</p>
                        </li>
                        @endif
                        @php
                        $labels = json_decode($car->label, true);
                        $values = json_decode($car->value, true);
                        @endphp
                        @for ($i=0; $i < count($labels); $i++) <li>
                        	<p>{{ $labels[$i] }}:</p>
                        	<p>{{ $values[$i] }}</p>
                        	</li>
                        	@endfor
                        		*/ ?>
                  </ul>
               </div>
            </div>
            <div class="latest-cars">
               <div class="heading">
                  <h4 class="title">
                     {{ $langg->lang59 }}
                  </h4>
               </div>
               <ul class="cars-list">
                  @foreach ($simCars as $key => $simCar)
                  <li>
                     <div class="landscape-single-car">
                        <div class="img">
                           <img src="{{asset('assets/front/images/cars/featured/'.$simCar->featured_image)}}" alt="">
                        </div>
                        <div class="content">
                           <a href="{{ route('front.details', $simCar->id) }}" class="d-block">
                              <h4 class="name">
                                 {{strlen($simCar->title) > 30 ? substr($simCar->title, 0, 30) . '...' : $simCar->title}}
                              </h4>
                           </a>
                           <p class="views">
                              {{ $langg->lang66 }}: {{ $simCar->views }}
                           </p>
                        </div>
                     </div>
                  </li>
                  @endforeach
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Single Details Area End -->
@endsection
@section('scripts')
<script type="text/javascript">
   <?php /*var lat = {
      {
      	$car - > user - > latitude
      }
      };
      var long = {
      {
      	$car - > user - > longitude
      }
      };
      var address = "{{ $car->user->address }}";
      var mapicon = "{{ asset('assets/front/images/map-marker.png') }}";
      */ ?>
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&sensor=false"></script>
<script src="{{ asset('assets/front/js/map.js') }}"></script>
@endsection