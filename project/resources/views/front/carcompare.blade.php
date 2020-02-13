@extends('layouts.front')

@section('content')

<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="pagetitle">
          Confused? Easy way to compare cars
        </h1>
        <ul class="pages">
          <li>
            <a href="{{ route('front.index') }}">
              {{ $langg->lang1 }}
            </a>
          </li>
          <li class="active">
            <a href="#">
              compare cars
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Area End -->

<!-- sub-categori Area Start -->




<section class="sub-categori_mbile">
  <div class="container">

  </div>
</section>




<section class="sub-categori">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="">
          <div class="section-heading">
            <h2 class="title mb-30">
              Compare Cars
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">

            <div class="compare_div" style="text-align:center">
              <!-- <h4>Select Car to Compare</h4> -->

              <div class="adcaricn">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div class="addTitle">Add car</div>
              </div>


              <select style="width: 100%" class="js-example-basic-single" id="brandselect" name="brand_id">
                <option value="" selected>--Select Brand--</option>
                @foreach ($make as $key => $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>
              <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

              <select style="width: 100%" class="js-example-basic-single" id="carselect" name="car_id">

              </select>
              <!-- 
                            <div id="carsdetails">



                                <div class="col-md-12">
                                    <div class="row" id="cardetailsDiv" style="margin: 12px;">
                                        <div class="col-md-6">
                                            <img id="carImage" style="width: 238px;" src="http://local.car.com/assets/front/images/cars/sliders/5df47e47e9067.jpg" alt="">

                                        </div>
                                        <div class="col-md-6">
                                            <h3 id="carTitle" style="text-transform: capitalize; text-align:center">DUSTER</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
              <div>
              </div>

            </div>
          </div>
          <div class="col-md-4 col-sm-6">

            <div class="compare_div" style="text-align:center">
              <!-- <h4>Select Car to Compare</h4> -->

              <div class="adcaricn">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div class="addTitle">Add car</div>
              </div>

              <select style="width: 100%" class="js-example-basic-single" id="brandselect1" name="brand_id1">
                <option value="" selected>--Select Brand--</option>
                @foreach ($make as $key => $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>

              <select style="width: 100%" class="js-example-basic-single" id="carselect1" name="car_id1">

              </select>
              <!-- <div id="carsdetails">



                                <div class="col-md-12">
                                    <div class="row" id="cardetailsDiv1" style="margin: 12px;">
                                        <div class="col-md-6">
                                            <img id="carImage1" style="width: 238px;" src="http://local.car.com/assets/front/images/cars/sliders/5df47e47e9067.jpg" alt="">

                                        </div>
                                        <div class="col-md-6">
                                            <h3 id="carTitle1" style="text-transform: capitalize; text-align:center">DUSTER</h3>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
              <div>
              </div>

            </div>
          </div>



          <div class="col-md-4 rsp_hid">

            <div class="compare_div" style="text-align:center">
              <!-- <h4>Select Car to Compare</h4> -->
              <div class="adcaricn">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <div class="addTitle">Add car</div>
              </div>
              <select style="width: 100%" class="js-example-basic-single" id="brandselect2" name="brand_id2">
                <option value="" selected>--Select Brand--</option>
                @foreach ($make as $key => $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>

              <select style="width: 100%" class="js-example-basic-single" id="carselect2" name="car_id2">

              </select>
              <div>
              </div>

            </div>
          </div>







          <div class="col-md-12 compare_now_button_div">
            <div>
              <p style='color:red' id="error_text"></p>
            </div>
            <button class="compare_now_button" id="compare_now">Compare Now</button>
          </div>


        </div>
      </div>
</section>
<!-- sub-categori Area End -->


<section class="hdbr" hidden>
  <div class="container">
    <h6 class="pull-right rsplft"><input type="checkbox" name="vehicle1" value="Bike" style="margin-right: 10px;"> Hide Common Features</h6>
  </div>
</section>
<div id="carcomparedetailsDiv1">

</div>








<!--  -->
<section class="featuredCars" style="padding: 0;">
  <div class="container">

    <div class="brdr shadow24">

      <div class="section-heading">
        <h2 class="title">
          New Launched cars
        </h2>
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




<!-- Featured Cars Area Start -->
<section class="featuredCars">
  <div class="container">

    <div class="brdr shadow24">
      <div class="">

        <div class="section-heading">
          <h2 class="title">
            <!-- {{ $ps->featured_btxt }} -->
            The most searched cars
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
              <li><a href="#tab01">Hatchback</a></li>
              <li><a href="#tab02">Sedan</a></li>
              <li><a href="#tab03">SUV</a></li>
              <li><a href="#tab04">MUV</a></li>
              <li><a href="#tab05">Luxury</a></li>
            </ul>
          </div>
          <div class="tab-select-outer">
            <select id="tab-select">
              <option value="#tab01">Hatchback</option>
              <option value="#tab02">Sedan </option>
              <option value="#tab03">SUV </option>
              <option value="#tab04">MUV </option>
              <option value="#tab05">Luxury </option>
            </select>
          </div>


          <div id="tab01" class="tab-contents">

            <div class="container">
              <div class="row">
                <div class="slick-slider">

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

                  <div class="product-item">
                    <div class="card shadowWPadding " data-img-fit="true">
                      <div class="gsc_col-xs-12 paddingnone imgTopRound hover">
                        <div class="imageTransition active" data-autofit="true" data-autofitmobile="true" title=" ">
                          <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maserati/Maserati-Ghibli/6321/front-left-side-47.jpg" data-lazy="true">
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
                          <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maserati/Maserati-Quattroporte/4205/front-left-side-47.jpg" data-lazy="true">
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
                          <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Porsche/Cayenne-Coupe/7086/1576240802670/front-left-side-47.jpg" data-lazy="true">
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
                          <img class="hover imageTransition hide active" title="  Maruti Swift " alt="  Maruti Swift " src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Maserati/Levante/7267/1576222588923/front-left-side-47.jpg" data-lazy="true">
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
                </div>
              </div>
            </div>


          </div>

        </div>
      </div>

    </div>



</section>
<!-- Featured Cars Area End -->



@endsection


@section('scripts')

<script>
  $(document).ready(function() {


    //first compare section 
    $("#cardetailsDiv").hide();
    var imageUrl = '{{ URL::asset(' / assets / front / images / cars / featured / ') }}';
    $("#brandselect").on('change', function() {
      var _token = $("input[name='_token']").val();
      $.post("{{ route('front.getCars') }}", {
        _token: _token,
        make_id: $("#brandselect").val()
      }, function(data) {


        var option = '';
        if (data.length <= 0) {
          option += '<option>No Cars Found</option>';

        } else {
          option += '<option>----Select A Car-----</option>';
          for (var i = 0; i < data.length; i++) {
            option += '<option value="' + data[i].id + '">' + data[i].car_name + '</option>';
          }
        }

        $("#carselect").html(option);
        console.log(option);

      }, 'json');
    });

    $("#brandselect2").on('change', function() {
      var _token = $("input[name='_token']").val();
      $.post("{{ route('front.getCars') }}", {
        _token: _token,
        make_id: $("#brandselect2").val()
      }, function(data) {


        var option = '';
        if (data.length <= 0) {
          option += '<option>No Cars Found</option>';

        } else {
          option += '<option>----Select A Car-----</option>';
          for (var i = 0; i < data.length; i++) {
            option += '<option value="' + data[i].id + '">' + data[i].car_name + '</option>';
          }
        }

        $("#carselect2").html(option);
        console.log(option);

      }, 'json');
    });

    $("#carselect").on('change', function() {
      var _token = $("input[name='_token']").val();
      $.post("{{ route('front.getCarDetails') }}", {
        _token: _token,
        car_id: $("#carselect").val()
      }, function(data) {


        $("#carImage").attr("src", imageUrl + '/' + data[0]['featured_image']);
        $("#carTitle").html(data[0]['car_name'])
        $("#cardetailsDiv").show();

      }, 'json');
    });


    //second compare section 
    $("#cardetailsDiv1").hide();
    var imageUrl = '{{ URL::asset(' / assets / front / images / cars / featured / ') }}';
    $("#brandselect1").on('change', function() {
      var _token = $("input[name='_token']").val();
      $.post("{{ route('front.getCars') }}", {
        _token: _token,
        make_id: $("#brandselect1").val()
      }, function(data) {


        var option = '';
        if (data.length <= 0) {
          option += '<option>No Cars Found</option>';

        } else {
          option += '<option>----Select A Car-----</option>';
          for (var i = 0; i < data.length; i++) {
            option += '<option value="' + data[i].id + '">' + data[i].car_name + '</option>';
          }
        }

        $("#carselect1").html(option);
        console.log(option);

      }, 'json');
    });

    $("#carselect").on('change', function() {
      var _token = $("input[name='_token']").val();
      $.post("{{ route('front.getCarDetails') }}", {
        _token: _token,
        car_id: $("#carselect1").val()
      }, function(data) {


        $("#carImage1").attr("src", imageUrl + '/' + data[0]['featured_image']);
        $("#carTitle1").html(data[0]['car_name']);
        $("#cardetailsDiv1").show();

      }, 'json');
    });

    $("#carselect2").on('change', function() {
      var _token = $("input[name='_token']").val();
      $.post("{{ route('front.getCarDetails') }}", {
        _token: _token,
        car_id: $("#carselect2").val()
      }, function(data) {


        $("#carImage2").attr("src", imageUrl + '/' + data[0]['featured_image']);
        $("#carTitle2").html(data[0]['car_name']);
        $("#cardetailsDiv2").show();

      }, 'json');
    });

    //compare now function 

    $("#compare_now").click(function() {



      if ($("#carselect").val() === null || $("#carselect1").val() === null) {
        $("#error_text").html("Please Select Any Two Cars");
      } else {
        var _token = $("input[name='_token']").val();
        $.post("{{ route('front.getCompareDetails') }}", {
          _token: _token,
          car_id: $("#carselect").val(),
          car_id1: $("#carselect1").val()
        }, function(data) {
          // console.log(data);
          $("#carcomparedetailsDiv1").html(data);

        });

      }


    });



  });
</script>





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



<!-- readmore -->
<script type="text/javascript">
  (function(root) {
    'use strict';

    var Readmore, isCssEmbeddedFor, isEnvironmentSupported, resizeBoxes, uniqueIdCounter;

    function forEach(array, callback, scope) {
      for (var i = 0; i < array.length; i++) {
        callback.call(scope, i, array[i]);
      }
    };

    function extend(child, parent) {
      var args, c1, hasProp, key, p1;

      hasProp = {}.hasOwnProperty;

      if (arguments.length > 2) {
        args = [];

        forEach(arguments, function(i, value) {
          args.push(value);
        });

        while (args.length > 2) {
          c1 = args.shift();
          p1 = args.shift();
          args.unshift(extend(c1, p1));
        }

        child = args.shift();
        parent = args.shift();
      }

      for (key in parent) {
        if (hasProp.call(parent, key)) {
          if (typeof parent[key] === 'object') {
            child[key] = child[key] || {};
            child[key] = extend(child[key], parent[key]);
          } else {
            child[key] = parent[key];
          }
        }
      }
      return child;
    };

    function debounce(func, wait, immediate) {
      var timeout;

      return function() {
        var args, callNow, context, later;

        args = arguments;
        callNow = immediate && !timeout;
        context = this;
        later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };

        clearTimeout(timeout);
        timeout = setTimeout(later, wait);

        if (callNow) func.apply(context, args);
      };
    }

    function uniqueId(prefix) {
      var id;

      id = ++uniqueIdCounter;

      return String(prefix == null ? 'rmjs-' : prefix) + id;
    }

    function setBoxHeights(element) {
      var clonedElement, cssMaxHeight, defaultHeight, expandedHeight, width;

      clonedElement = element.cloneNode(true);
      clonedElement.style.height = 'auto';
      clonedElement.style.width = element.getBoundingClientRect().width;
      clonedElement.style.overflow = 'hidden';

      element.parentNode.insertBefore(clonedElement, element);

      clonedElement.style.maxHeight = 'none';

      expandedHeight = parseInt(clonedElement.getBoundingClientRect().height, 10);
      cssMaxHeight = parseInt(getComputedStyle(clonedElement).maxHeight, 10);
      defaultHeight = parseInt(element.readmore.defaultHeight, 10);

      element.parentNode.removeChild(clonedElement);

      // Store our measurements.
      element.readmore.expandedHeight = expandedHeight;
      element.readmore.maxHeight = cssMaxHeight;
      element.readmore.collapsedHeight = cssMaxHeight || element.readmore.collapsedHeight || defaultHeight;

      element.style.maxHeight = 'none';
    }

    function createElementFromString(htmlString) {
      var div;

      div = document.createElement('div');
      div.innerHTML = htmlString;

      return div.firstChild;
    }

    function embedCSS(options) {
      var styles;

      if (!isCssEmbeddedFor[options.selector]) {
        styles = ' ';

        if (options.embedCSS && options.blockCSS !== '') {
          styles += options.selector + ' + [data-readmore-toggle], ' +
            options.selector + '[data-readmore]{' +
            options.blockCSS +
            '}';
        }

        // Include the transition CSS even if embedCSS is false
        styles += options.selector + '[data-readmore]{' +
          'transition: height ' + options.speed + 'ms;' +
          'overflow: hidden;' +
          '}';

        (function(d, u) {
          var css = d.createElement('style');
          css.type = 'text/css';

          if (css.styleSheet) {
            css.styleSheet.cssText = u;
          } else {
            css.appendChild(d.createTextNode(u));
          }

          d.getElementsByTagName('head')[0].appendChild(css);
        }(document, styles));

        isCssEmbeddedFor[options.selector] = true;
      }
    }

    function buildToggle(link, element, scope) {
      var clickHandler, toggle;

      clickHandler = function(event) {
        this.toggle(event.target, element, event);
      };

      toggle = createElementFromString(link);
      toggle.setAttribute('data-readmore-toggle', element.id);
      toggle.setAttribute('aria-controls', element.id);
      toggle.addEventListener('click', clickHandler.bind(scope));

      return toggle;
    }

    isEnvironmentSupported = !!document.querySelectorAll && !!root.addEventListener;
    uniqueIdCounter = 0;
    isCssEmbeddedFor = [];

    resizeBoxes = debounce(function() {
      forEach(document.querySelectorAll('[data-readmore]'), function(i, element) {
        setBoxHeights(element);

        element.style.height = ((element.getAttribute('aria-expanded') === 'true') ? element.readmore.expandedHeight : element.readmore.collapsedHeight) + 'px';
      });
    }, 100);

    Readmore = (function() {
      var defaults;

      defaults = {
        speed: 100,
        collapsedHeight: 75,
        heightMargin: 16,
        moreLink: '<a href="#">Read More...</a>',
        lessLink: '<a href="#">Less</a>',
        embedCSS: true,
        blockCSS: 'display: block; width: 100%;',
        startOpen: false,

        // callbacks
        blockProcessed: function() {},
        beforeToggle: function() {},
        afterToggle: function() {}
      };

      function Readmore(selector, options) {
        if (!isEnvironmentSupported) return;

        this.options = extend({}, defaults, options);
        this.options.selector = selector;

        embedCSS(this.options);

        // Need to resize boxes when the page has fully loaded.
        window.addEventListener('load', resizeBoxes);
        window.addEventListener('resize', resizeBoxes)

        forEach(document.querySelectorAll(selector), function(i, element) {
          var expanded, heightMargin, id, toggleLink;

          expanded = this.options.startOpen;

          element.readmore = {
            defaultHeight: this.options.collapsedHeight,
            heightMargin: this.options.heightMargin
          };

          setBoxHeights(element);

          heightMargin = element.readmore.heightMargin;

          if (element.getBoundingClientRect().height <= element.readmore.collapsedHeight + heightMargin) {
            if (this.options.blockProcessed && typeof this.options.blockProcessed === 'function') {
              this.options.blockProcessed(element, false);
            }
            return;
          } else {
            id = element.id || uniqueId();

            element.setAttribute('data-readmore', '');
            element.setAttribute('aria-expanded', expanded);
            element.id = id;

            toggleLink = expanded ? this.options.lessLink : this.options.moreLink;

            element.parentNode.insertBefore(buildToggle(toggleLink, element, this), element.nextSibling);

            element.style.height = (expanded ? element.readmore.expandedHeight : element.readmore.collapsedHeight) + 'px';

            if (this.options.blockProcessed && typeof this.options.blockProcessed === 'function') {
              this.options.blockProcessed(element, true);
            }
          }
        }, this);
      }

      Readmore.prototype.toggle = function(trigger, element, event) {
        var expanded, newHeight, toggleLink, transitionendHandler;

        if (event) event.preventDefault();

        // this.element only exists for jQuery-ified elements, may not make sense now
        // trigger = trigger || document.querySelector('[aria-controls="' + this.element.id + '"]');
        // element = element || this.element;

        expanded = element.getBoundingClientRect().height <= element.readmore.collapsedHeight;
        newHeight = expanded ? element.readmore.expandedHeight : element.readmore.collapsedHeight;

        // Fire beforeToggle callback
        // Since we determined the new "expanded" state above we're now out of sync
        // with our true current state, so we need to flip the value of `expanded`
        if (this.options.beforeToggle && typeof this.options.beforeToggle === 'function') {
          this.options.beforeToggle(trigger, element, !expanded);
        }

        element.style.height = newHeight + 'px';

        transitionendHandler = function(event) {
          if (this.options.afterToggle && typeof this.options.afterToggle === 'function') {
            this.options.afterToggle(trigger, element, expanded);
          }

          event.target.setAttribute('aria-expanded', expanded);
          event.target.removeEventListener('transitionend', transitionendHandler);
        };

        element.addEventListener('transitionend', transitionendHandler.bind(this));

        toggleLink = expanded ? this.options.lessLink : this.options.moreLink;

        trigger.parentNode.replaceChild(buildToggle(toggleLink, element, this), trigger);
      };

      Readmore.prototype.destroy = function() {}

      return Readmore;

    })();

    root.Readmore = Readmore;
  })(this);




  new Readmore('#info', {
    moreLink: '<a href="#">Usage, examples, and options</a>',
    collapsedHeight: 10,
    afterToggle: function(trigger, element, expanded) {
      if (!expanded) { // The "Close" link was clicked
        $('html, body').animate({
          scrollTop: element.offset().top
        }, {
          duration: 100
        });
      }
    }
  });
  new Readmore('article', {
    speed: 500,
    heightMargin: 50
  });
</script>
<!-- readmore -->




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
@endsection