@extends('layouts.front')

@section('content')


<div class="wrapper">


  <!--  OLD   Hero Area Start -->
  <section class="hero-area">
    <!-- <img class="cars" src="{{  asset('assets/front/images/heroarea-img.jpg') }}" alt=""> -->

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="content searchara">
            <div class="heading-area">
              <h1 class="title">
                {{ $ps->header_btxt }}
              </h1>
              <p class="sub-title">
                {{ $ps->header_stxt }}
              </p>
            </div>

            <div class="col-md-12">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">New Car</a>
                  <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Used Car</a> -->

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane  show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="card-body text-white">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <form id="searchForm" action="{{ route('front.cars') }}" method="get">
                            <ul class="select-list">
                              <!-- <li>
                <div class="car-brand">
                  <select class="js-example-basic-single" name="brand_id[]">
                    <option value="" selected disabled>{{ $langg->lang9 }}</option>
                    @foreach ($make as $key => $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                  </select>
                </div>
              </li> -->


                              <!-- <li>
                <div class="car-condition">
                  <select class="js-example-basic-single" name="condition_id">
                    <option value="" selected disabled>{{ $langg->lang10 }}</option>
                    @foreach ($conditions as $key => $condition)
                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                    @endforeach
                  </select>
                </div>
              </li> -->


                              <li style="margin-bottom: 20px;">
                                <div class="car-condition">
                                  <select class="js-example-basic-single clrbk" name="condition_id">
                                    <option value="" selected disabled>Select Brand</option>
                                    @foreach ($make as $key => $make_value)
                                    <option value="{{ $make_value->id }}">{{ $make_value->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </li>

                              <!-- <li>
                <div class="car-condition">
                  <select class="js-example-basic-single" name="condition_id">
                    <option value="" selected disabled>{{ $langg->lang10 }}</option>
                    @foreach ($conditions as $key => $condition)
                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                    @endforeach
                  </select>
                </div>
              </li> -->
                              <li>
                                <div class="car-price">
                                  <select class="js-example-basic-single sel-price">
                                    <option value="" selected disabled>{{ $langg->lang11 }}</option>
                                    @foreach ($pricings as $key => $pricing)
                                    <option value="{{ $pricing->id }}">{{ $pricing->minimum }} - {{ $pricing->maximum }}</option>
                                    @endforeach
                                  </select>
                                  <input type="hidden" name="minprice" value="">
                                  <input type="hidden" name="maxprice" value="">
                                </div>
                              </li>
                              <li>
                                <button type="submit" class="mybtn1" style="width: 100%; outline: 0;">{{ $langg->lang12 }}</button>
                              </li>

                              <li>
                                <a href="#">
                                  <div class="nextgen">Advanced Search<span><i class="fa fa-arrow-right"></i></span></div>
                                </a>
                              </li>

                            </ul>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="card card-body text-white">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <form id="searchForm" action="{{ route('front.cars') }}" method="get">
                            <ul class="select-list">
                              <li>
                                <div class="car-brand">
                                  <select class="js-example-basic-single" name="brand_id[]">
                                    <option value="" selected disabled>{{ $langg->lang9 }}</option>
                                    @foreach ($make as $key => $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </li>


                              <li>
                                <div class="car-condition">
                                  <select class="js-example-basic-single" name="condition_id">
                                    <option value="" selected disabled>{{ $langg->lang10 }}</option>
                                    @foreach ($conditions as $key => $condition)
                                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </li>

                              <li>
                                <button type="submit" class="mybtn1" style="width: 100%; outline: 0;">{{ $langg->lang12 }}</button>
                              </li>


                            </ul>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">



    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!--     <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(http://cs412624.vk.me/v412624691/4117/RWBNZL6CLtU.jpg)"></div>
                  </div>
                  <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(http://cs412624.vk.me/v412624691/41ad/atM6w55Z9Xg.jpg)"></div>
                  </div> -->
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url(https://www.autodevot.com/wp-content/uploads/2018/11/2018-Toyota-Fortuner-TRD-Sportivo-Thailand.jpg)"></div>
        </div>
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url(https://static.toyotabharat.com/images/showroom/fortuner/gal3.jpg)"></div>
        </div>
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url(https://pickeringtoyota.com/images/2019-its-time-to-toyota/its-time-to-toyota-2019.jpg)"></div>
        </div>
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url(https://miro.medium.com/max/3800/1*dZLezGC0iphQZH_72bRdUw.jpeg)"></div>
        </div>

        <!--     <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url(http://cs412624.vk.me/v412624691/415d/X7YuVilSl4k.jpg)"></div>
                  </div> -->
      </div>

      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>






    </div>

  </section>
  <!-- OLD    Hero Area End -->


  <!-- NEW SLIDER -->





  <!-- mobile responsive slide menu -->
  <div class="rspnsve_mnu">
    <div class="container">
      <div class="row">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
          <div class="MultiCarousel-inner">
            <div class="item">
              <div class="pad15">
                <i class="fa fa-car" aria-hidden="true"></i>
                <p class="lead">New Cars</p>
              </div>
            </div>
            <div class="item">
              <div class="pad15">
                <i class="fa fa-key" aria-hidden="true"></i>
                <p class="lead">Preowned Car</p>
              </div>
            </div>
<!--            <div class="item">
              <div class="pad15">
                <i class="fa fa-key" aria-hidden="true"></i>
                <p class="lead">Used Cars</p>
              </div>
            </div>-->
            <div class="item">
              <div class="pad15">
                <i class="fa fa-compress" aria-hidden="true"></i>
                <p class="lead">Compare</p>
              </div>
            </div>
            <div class="item">
              <div class="pad15">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <p class="lead">News</p>
              </div>
            </div>
            <div class="item">
              <div class="pad15">
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <p class="lead">More</p>
              </div>
            </div>


          </div>
          <button class="btn btn-primary leftLst">
            <</button> <button class="btn btn-primary rightLst">>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- mobile responsive slide menu -->









  <!-- Featured Cars Area Start -->
  <section class="featuredCars">
    <div class="container">

      <div class="brdr shadow24">
        <div class="">

          <div class="section-heading">
            <h2 class="title">
              <!-- {{ $ps->featured_btxt }} -->
              Featured Cars

            </h2>
            <!-- <p class="text">
						{{ $ps->featured_stxt }}
					</p> -->
          </div>

        </div>

        <div class="">


          <div class="tabs">
            <div class="tab-button-outer">
              <ul id="tab-button">
                <!-- <li><a href="#tab01">Hatchback</a></li>
      <li><a href="#tab02">Sedan</a></li>
      <li><a href="#tab03">SUV</a></li>
      <li><a href="#tab04">MUV</a></li>
      <li><a href="#tab05">Luxury</a></li> -->
              </ul>
            </div>
            <div class="tab-select-outer">
              <select id="tab-select">
                <!-- <option value="#tab01">Hatchback</option>
      <option value="#tab02">Sedan </option>
      <option value="#tab03">SUV </option>
      <option value="#tab04">MUV </option>
      <option value="#tab05">Luxury </option> -->
              </select>
            </div>


            <div id="tab01" class="tab-contents">

              <div class="container">
                <div class="row">
                  <div class="slick-slider">

                    <?php foreach ($fcars as $cars) { ?>
                      <?php if (!empty($fcars->car_images)) { ?>
                        @foreach ($lcars->car_images as $key => $ci)
                        echo
                        <?php $car_image = "{{ asset('assets/front/images/cars/sliders/'.$ci->image) }}" ?>
                        @endforeach
                      <?php } else {
                        $car_image = "https://stimg.cardekho.com/images/carexteriorimages/630x420/Maruti/Swift/6318/1572069250647/front-left-side-47.jpg";
                      } ?>
                      <div class="product-item">
                        <div class="card shadowWPadding " data-img-fit="true">
                          <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                            <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                              <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="<?php echo $car_image; ?>" data-lazy="true">
                            </div>
                          </div>
                          <div class="gsc_col-xs-12 holder ">
                            <a title="  Maruti Swift " class="title" href="/maruti/swift">{{ $cars['car_name']}}</a>
                            <div class="price"><span class="icon-cd_R">Rs</span>{{ $cars['price']}}<sup></sup></div>
                            <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">

                              <div class="primaryButton btn-dcb "><a href="{{ route('front.details', $cars->id) }}">View Details</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>


                  </div>
                </div>
              </div>


            </div>

          </div>
        </div>

      </div>



  </section>
  <!-- Featured Cars Area End -->


  <section class="Googl_ads">
    <div class="container">
      <div class="adsgg">
        <img src="https://di-uploads-pod13.dealerinspire.com/mcdonaldhyundai/uploads/2019/04/kbb-banner-march-2019.jpg">
      </div>
    </div>
  </section>

  <div class="container">
    <section class="brand brdr shadow24">

      <div class="section-heading">
        <h2 class="title mb-30">
          Popular Brands
        </h2>
        <!-- <p class="text">
            {{ $ps->featured_stxt }}
          </p> -->
      </div>
      <div class="customer-logos slider">
        <div class="slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/ford.jpg">
          <h6 class="text-center"">Ford</h6>
      </div>
      <div class=" slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/nissan.jpg">
            <h6 class="text-center"">Nissan</h6>
    </div>
      <div class=" slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/datsun.jpg">
              <h6 class="text-center"">Datsun</h6>
    </div>
      <div class=" slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/toyota.jpg">
                <h6 class="text-center"">Toyota</h6>
    </div>
      <div class=" slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/mg.jpg">
                  <h6 class="text-center"">MG</h6>
      </div>
      <div class=" slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/kia.jpg">
                    <h6 class="text-center"">Kia</h6></div>
      <div class=" slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/hyundai.jpg">
                      <h6 class="text-center"">Hyundai</h6>
    </div>
      <div class=" slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/honda.jpg">
                        <h6 class="text-center"">Honda</h6>
    </div>
      <div class=" slide"><img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/renault.jpg">
                          <h6 class="text-center"">Renault</h6>
      </div>
   </div>
   

</section>
</div>












<!-- Featured Cars Area Start -->
<!-- <section class=" featuredCars">
                            <div class="container">
                              <div class="row">
                                <div class="section-heading">
                                  <h2 class="title">
                                    {{ $ps->featured_btxt }}
                                  </h2>
                                  <p class="text">
                                    {{ $ps->featured_stxt }}
                                  </p>
                                </div>
                              </div>


                              <div class="row">
                                @foreach ($fcars as $key => $fcar)
                                <div class="col-lg-3 col-md-3">
                                  <div class="row">
                                    <a class="car-info-box" href="{{ route('front.details', $fcar->id) }}">
                                      <div class="img-area">
                                        <img class="light-zoom" src="{{asset('assets/front/images/cars//featured/'.$fcar->featured_image)}}" alt="">
                                      </div>
                                      <div class="content">
                                        <h4 class="title">
                                          {{ $fcar->title }}
                                        </h4>
                                        <ul class="top-meta">
                                          <li>
                                            <i class="far fa-eye"></i> {{ $fcar->views }} {{ $langg->lang13 }}
                                          </li>
                                          <li>
                                            <i class="far fa-clock"></i> {{ time_elapsed_string($fcar->created_at) }}
                                          </li>
                                        </ul>
                                        <ul class="short-info">
                                          <li class="north-west" title="Model Year">
                                            <img src="{{asset('assets/front/images/calender-icon.png')}}" alt="">
                                            <p>{{ $fcar->year }}</p>
                                          </li>
                                          <li class="north-west" title="Mileage">
                                            <img src="{{asset('assets/front/images/road-icon.png')}}" alt="">
                                            <p>{{ $fcar->mileage }}</p>
                                          </li>
                                          <li class="north-west" title="Top Speed (KMH)">
                                            <img src="{{asset('assets/front/images/transformar.png')}}" alt="">
                                            <p>5000</p>
                                          </li>
                                        </ul>
                                        <div class="footer-area">
                                          <div class="left-area">
                                            @if (empty($fcar->sale_price))
                                            <p class="price">
                                              {{ $fcar->currency_symbol }} {{ number_format($fcar->regular_price, 0, '', ',') }}
                                            </p>
                                            @else
                                            <p class="price">
                                              {{ $fcar->currency_symbol }} {{ number_format($fcar->sale_price, 0, '', ',') }} <del>{{ $fcar->currency_symbol }} {{ number_format($fcar->regular_price, 0, '', ',') }}</del>
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
                                </div>
                                @endforeach
                              </div>
                              <div class="row justify-content-center mt-3">
                                @if (count($fcars) == 6)
                                <a href="{{ route('front.cars') . '?type=featured' }}" class="mybtn1">
                                  {{ $langg->lang15 }}
                                </a>
                                @endif
                              </div>
                            </div>
    </section> -->
    <!-- Featured Cars Area End -->









    <!--  -->
    <section class="featuredCars">
      <div class="container">

        <div class="brdr shadow24">

          <div class="section-heading">
            <h2 class="title">
              <!-- {{ $ps->featured_btxt }} -->
              New Launched cars
            </h2>
            <!-- <p class="text">
            {{ $ps->featured_stxt }}
          </p> -->
          </div>

          <div class="container">
            <div class="row">
              <div class="slick-slider">

                <?php foreach ($lcars as $cars) { ?>


                  <div class="product-item">
                    <div class="card shadowWPadding " data-img-fit="true">
                      <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                        <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                          <?php if (!empty($lcars->car_images)) { ?>
                            @foreach ($lcars->car_images as $key => $ci)
                            <?php $car_image = "{{ asset('assets/front/images/cars/sliders/'.$ci->image) }}" ?>
                            @endforeach
                          <?php } else {
                            $car_image = "https://stimg.cardekho.com/images/carexteriorimages/630x420/Maruti/Swift/6318/1572069250647/front-left-side-47.jpg";
                          } ?>
                          <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="<?php echo $car_image ?>" data-lazy="true">
                        </div>
                      </div>
                      <div class="gsc_col-xs-12 holder ">
                        <a title="  Maruti Swift " class="title" href="/maruti/swift">{{ $cars['car_name']}}</a>
                        <div class="price"><span class="icon-cd_R">Rs</span>{{ $cars['price']}}<sup></sup></div>
                        <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">

                          <div class="primaryButton btn-dcb "><a href="{{ route('front.details', $cars->id) }}">View Details</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>


              </div>
            </div>
          </div>



        </div>

      </div>

    </section>


    <!--  -->













    <!-- Featured Cars Area Start -->
    <section class="latestCars">

      <div class="container">

        <div class="brdr shadow24">
          <!-- <div class="row justify-content-center"> -->
          <!-- <div class="col-lg-7 col-md-10"> -->
          <!-- <div class="section-heading">
            <h2 class="title">
              {{ $ps->latest_btxt }}
            </h2> -->
          <!-- <p class="text  text-center">
						{{ $ps->latest_stxt }}
					</p> -->
        </div>
        <!-- </div> -->
        <!-- </div> -->

        <!-- <div class="container">
            <div class="row">
              @foreach ($lcars as $key => $lcar)
              <div class="col-lg-3 col-md-3">
                <a class="car-info-box" href="{{ route('front.details', $lcar->id) }}">
                  <div class="img-area">
                    <img class="light-zoom" src="{{asset('assets/front/images/cars//featured/'.$lcar->featured_image)}}" alt="">
                  </div>
                  <div class="content">
                    <h4 class="title">
                      {{ $lcar->title }}
                    </h4>
                    <ul class="top-meta">
                      <li>
                        <i class="far fa-eye"></i> {{ $lcar->views }} {{ $langg->lang13 }}
                      </li>
                      <li>
                        <i class="far fa-clock"></i> {{ time_elapsed_string($lcar->created_at) }}
                      </li>
                    </ul>
                    <ul class="short-info">
                      <li class="north-west" title="Model Year">
                        <img src="{{asset('assets/front/images/calender-icon.png')}}" alt="">
                        <p>{{ $lcar->year }}</p>
                      </li>
                      <li class="north-west" title="Mileage">
                        <img src="{{asset('assets/front/images/road-icon.png')}}" alt="">
                        <p>{{ $lcar->mileage }}</p>
                      </li>
                      <li class="north-west" title="Top Speed (KMH)">
                        <img src="{{asset('assets/front/images/transformar.png')}}" alt="">
                        <p>888</p>
                      </li>
                    </ul>
                    <div class="footer-area">
                      <div class="left-area">
                        @if (empty($lcar->sale_price))
                        <p class="price">
                          {{ $lcar->currency_symbol }} {{ number_format($lcar->regular_price, 0, '', ',') }}
                        </p>
                        @else
                        <p class="price">
                          {{ $lcar->currency_symbol }} {{ number_format($lcar->sale_price, 0, '', ',') }} <del>{{ $lcar->currency_symbol }} {{ number_format($lcar->regular_price, 0, '', ',') }}</del>
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
            </div>
          </div> -->

      </div>


      <div class="row justify-content-center mt-3">
        @if (count($lcars) == 6)
        <a href="{{ route('front.cars') }}" class="mybtn1">
          {{ $langg->lang15 }}
        </a>
        @endif
      </div>
  </div>
  </section>
  <!-- Featured Cars Area End -->

  <!-- Testimonial Area Start -->
  <section class="testimonial">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-10">
          <div class="section-heading">
            <h2 class="title text-center">
              {{ $ps->testimonial_title }}
            </h2>
            <p class="text text-center">
              {{ $ps->testimonial_subtitle }}
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          <div class="testimonial-slider">
            @foreach ($testimonials as $key => $testimonial)
            <div class="single-testimonial">
              <div class="people">
                <div class="img">
                  <img src="{{asset('assets/images/testimonials/'.$testimonial->image)}}" alt="">
                </div>
                <h4 class="title">{{ $testimonial->name }}</h4>
                <p class="designation">{{ $testimonial->rank }}</p>
              </div>
              <div class="review-text">
                <p>
                  "{{ $testimonial->comment }}"
                </p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial Area End -->





  <!--  -->
  <section class="featuredCars">
    <div class="container">

      <div class="brdr shadow24">

        <div class="section-heading">
          <h2 class="title">
            <!-- {{ $ps->featured_btxt }} -->
            Upcoming Cars
          </h2>
          <!-- <p class="text">
            {{ $ps->featured_stxt }}
          </p> -->
        </div>

        <div class="container">
          <div class="row">
            <div class="slick-slider">

              <div class="product-item">
                <div class="card shadowWPadding " data-img-fit="true">
                  <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                    <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                      <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Honda/Honda-City/5630/1557812647206/front-left-side-47.jpg" data-lazy="true">
                    </div>
                  </div>
                  <div class="gsc_col-xs-12 holder ">
                    <a title="  Maruti Swift " class="title" href="/maruti/swift"> Maruti Swift </a>
                    <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                    <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                      <div class="primaryButton btn-dcb ">Check December Offers</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="product-item">
                <div class="card shadowWPadding " data-img-fit="true">
                  <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                    <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                      <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Tata/Altroz/6834/1575463557264/front-left-side-47.jpg" data-lazy="true">
                    </div>
                  </div>
                  <div class="gsc_col-xs-12 holder ">
                    <a title="  Maruti Swift " class="title" href="/maruti/swift"> Maruti Swift </a>
                    <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                    <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                      <div class="primaryButton btn-dcb ">Check December Offers</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="card shadowWPadding " data-img-fit="true">
                  <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                    <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                      <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Hyundai/Aura/7234/1576759167145/front-left-side-47.jpg" data-lazy="true">
                    </div>
                  </div>
                  <div class="gsc_col-xs-12 holder ">
                    <a title="  Maruti Swift " class="title" href="/maruti/swift"> Maruti Swift </a>
                    <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                    <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                      <div class="primaryButton btn-dcb ">Check December Offers</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="card shadowWPadding " data-img-fit="true">
                  <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                    <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                      <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/MG/ZS-EV/6873/1577175248756/front-left-side-47.jpg" data-lazy="true">
                    </div>
                  </div>
                  <div class="gsc_col-xs-12 holder ">
                    <a title="  Maruti Swift " class="title" href="/maruti/swift"> Maruti Swift </a>
                    <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                    <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                      <div class="primaryButton btn-dcb ">Check December Offers</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="card shadowWPadding " data-img-fit="true">
                  <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                    <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                      <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Tesla/Tesla-Model-S/4615/1551164231212/front-left-side-47.jpg" data-lazy="true">
                    </div>
                  </div>
                  <div class="gsc_col-xs-12 holder ">
                    <a title="  Maruti Swift " class="title" href="/maruti/swift"> Maruti Swift </a>
                    <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                    <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                      <div class="primaryButton btn-dcb ">Check December Offers</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="card shadowWPadding " data-img-fit="true">
                  <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                    <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                      <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maruti/Swift/6318/1572069250647/front-left-side-47.jpg" data-lazy="true">
                    </div>
                  </div>
                  <div class="gsc_col-xs-12 holder ">
                    <a title="  Maruti Swift " class="title" href="/maruti/swift"> Maruti Swift </a>
                    <div class="price"><span class="icon-cd_R">Rs</span>5.14 - 8.84 Lakh<sup>*</sup></div>
                    <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                      <div class="primaryButton btn-dcb ">Check December Offers</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>

    </div>

  </section>


  <!--  -->








  <!-- Blog Area Start -->





  <section class="blog">

    <div class="container">

      <div class="brdr shadow24 btm_blog">
        <div class="section-heading">
          <h2 class="title">
            News to help choose your car
          </h2>
        </div>

        <div class="container">
          <div class="row">

            @foreach ($blogs as $key => $blog)


            <div class="col-lg-4 col-md-4">
              <a class="car-info-box" href="#">
                <div class="img-area">
                  <img class="light-zoom" src="{{asset('assets/images/blogs/'.$blog->photo)}}" alt="">
                </div>
                <div class="entry-main entry-main_mod-a">
                  <div class="entry-main__inner entry-main__inner_mod-a">
                    <h3 class="entry-title">
                      <a href="">{{strlen($blog->title) > 60 ? substr($blog->title, 0, 60) . '...' : $blog->title}}</a>
                    </h3>
                    <div class="entry-meta">
                      <span class="entry-meta__item">By:: <a href="" title="Visit admin’s website" rel="author external">{{ $langg->lang16 }}</a></span> <span class="entry-meta__item">Posted Date :: <a class="entry-meta__link" href=""> {{ date ( 'jS M, Y' , strtotime($blog->created_at) ) }}</a></span>
                    </div>
                  </div>
                  <div class="decor-1"></div>
                  <div class="entry-content">
                    {{ (strlen(strip_tags($blog->details)) > 140) ? substr(strip_tags($blog->details), 0, 140) . '...' : strip_tags($blog->details) }}
                  </div>
                  <a href="{{ route('front.blogshow', $blog->id) }}" class="link">{{ $langg->lang17 }}<i class="fa fa-chevron-right"></i></a>
                </div>
              </a>
            </div>
            @endforeach



          </div>
        </div>

      </div>

    </div>
  </section>













  @section('scripts')

  <!-- product slider -->
  <script type="text/javascript">
    $('.slick-slider').slick({
      // centerMode: true,
      slidesToShow: 4,
      dots: false,
      arrows: false,
      swipe: true,
      swipeToSlide: true,

      responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            centerMode: true
          }
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            centerMode: true
          }
        },
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 3,
          }
        },
      ]

    });
  </script>
  <!-- product slider -->



  <!-- mobile responsive slide menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      var itemsMainDiv = ('.MultiCarousel');
      var itemsDiv = ('.MultiCarousel-inner');
      var itemWidth = "";

      $('.leftLst, .rightLst').click(function() {
        var condition = $(this).hasClass("leftLst");
        if (condition)
          click(0, this);
        else
          click(1, this)
      });

      ResCarouselSize();




      $(window).resize(function() {
        ResCarouselSize();
      });

      //this function define the size of the items
      function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function() {
          id = id + 1;
          var itemNumbers = $(this).find(itemClass).length;
          btnParentSb = $(this).parent().attr(dataItems);
          itemsSplit = btnParentSb.split(',');
          $(this).parent().attr("id", "MultiCarousel" + id);


          if (bodyWidth >= 1200) {
            incno = itemsSplit[3];
            itemWidth = sampwidth / incno;
          } else if (bodyWidth >= 992) {
            incno = itemsSplit[2];
            itemWidth = sampwidth / incno;
          } else if (bodyWidth >= 768) {
            incno = itemsSplit[1];
            itemWidth = sampwidth / incno;
          } else {
            incno = itemsSplit[0];
            itemWidth = sampwidth / incno;
          }
          $(this).css({
            'transform': 'translateX(0px)',
            'width': itemWidth * itemNumbers
          });
          $(this).find(itemClass).each(function() {
            $(this).outerWidth(itemWidth);
          });

          $(".leftLst").addClass("over");
          $(".rightLst").removeClass("over");

        });
      }


      //this function used to move the items
      function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
          translateXval = parseInt(xds) - parseInt(itemWidth * s);
          $(el + ' ' + rightBtn).removeClass("over");

          if (translateXval <= itemWidth / 2) {
            translateXval = 0;
            $(el + ' ' + leftBtn).addClass("over");
          }
        } else if (e == 1) {
          var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
          translateXval = parseInt(xds) + parseInt(itemWidth * s);
          $(el + ' ' + leftBtn).removeClass("over");

          if (translateXval >= itemsCondition - itemWidth / 2) {
            translateXval = itemsCondition;
            $(el + ' ' + rightBtn).addClass("over");
          }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
      }

      //It is used to get some elements from btn
      function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
      }

    });
  </script>
  <!-- mobile responsive slide menu -->


  <!-- slider new -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  <script>
    var interleaveOffset = 0.5;

    var swiperOptions = {
      loop: true,
      speed: 1000,
      grabCursor: true,
      autoplay: true,
      watchSlidesProgress: true,
      mousewheelControl: true,
      keyboardControl: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        progress: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress;
            var innerOffset = swiper.width * interleaveOffset;
            var innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".slide-inner").style.transform =
              "translate3d(" + innerTranslate + "px, 0, 0)";
          }
        },
        touchStart: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function(speed) {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-inner").style.transition =
              speed + "ms";
          }
        }
      }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);
  </script>
  <!-- slider new -->

  <!-- TAB -->
  <script type="text/javascript">
    $(function() {
      var $tabButtonItem = $('#tab-button li'),
        $tabSelect = $('#tab-select'),
        $tabContents = $('.tab-contents'),
        activeClass = 'is-active';

      $tabButtonItem.first().addClass(activeClass);
      $tabContents.not(':first').hide();

      $tabButtonItem.find('a').on('click', function(e) {
        var target = $(this).attr('href');

        $tabButtonItem.removeClass(activeClass);
        $(this).parent().addClass(activeClass);
        $tabSelect.val(target);
        $tabContents.hide();
        $(target).show();
        e.preventDefault();
      });

      $tabSelect.on('change', function() {
        var target = $(this).val(),
          targetSelectNum = $(this).prop('selectedIndex');

        $tabButtonItem.removeClass(activeClass);
        $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
        $tabContents.hide();
        $(target).show();
      });
    });
  </script>
  <!-- TAB -->

  <!-- BRAND -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>
  <!-- BRAND -->

  <script>
    $(".sel-price").on('change', function() {
      let url = '{{ url(' / ') }}/prices/' + $(this).val();
      // console.log(url);
      $.get(
        url,
        function(data) {
          console.log(data);
          $("input[name='minprice']").val(data.minimum);
          $("input[name='maxprice']").val(data.maximum);
        }
      )
    });
  </script>
  @endsection