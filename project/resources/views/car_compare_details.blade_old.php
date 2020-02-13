<!-- Single Details Area Start -->

<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <section class="single-details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="model-gallery-image">
                                <div class="one-item-slider">
                                    @foreach ($car->car_images as $key => $ci)
                                    <div class="item"><img src="{{ asset('assets/front/images/cars/sliders/'.$ci->image) }}" alt=""></div>
                                    @endforeach
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="details-info-area">
                                <div class="heading">
                                    <h4 class="title">
                                        {{ $langg->lang46 }}
                                    </h4>

                                    <ul class="details-list">
                                        <li>
                                            <p>Car Name:</p>
                                            <P>{{ $car1->car_name }}</P>
                                        </li>
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


                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="product-details-tab">
                                <div class="prouct-details-tab-menu">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-productdetails-tab" data-toggle="pill" href="#pills-productdetails" role="tab" aria-controls="pills-productdetails" aria-selected="false">Features</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-productdetails" role="tabpanel" aria-labelledby="pills-productdetails-tab">
                                        <div class="content-product-details">
                                            {{ $car->features }}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section class="single-details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="model-gallery-image">
                                <div class="one-item-slider">
                                    @foreach ($car1->car_images as $key => $ci)
                                    <div class="item"><img src="{{ asset('assets/front/images/cars/sliders/'.$ci->image) }}" alt=""></div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="details-info-area">
                                <div class="heading">
                                    <h4 class="title">
                                        {{ $langg->lang46 }}
                                    </h4>

                                    <ul class="details-list">
                                        <li>
                                            <p>Car Name:</p>
                                            <P>{{ $car1->car_name }}</P>
                                        </li>
                                        @if (!empty($car1->acceleration->name))
                                        <li>
                                            <p>Acceleration:</p>
                                            <P>{{ $car1->acceleration->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->cylinders->name))
                                        <li>
                                            <p>Cylinders:</p>
                                            <P>{{ $car1->cylinders->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->drive_type->name))
                                        <li>
                                            <p>Drive Type:</p>
                                            <P>{{ $car1->drive_type->name }}</P>
                                        </li>
                                        @endif

                                        @if (!empty($car1->engine_capacity->name))
                                        <li>
                                            <p>Engine Capacity:</p>
                                            <P>{{ $car1->engine_capacity->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->fuel_economy->name))
                                        <li>
                                            <p>Fuel Economy:</p>
                                            <P>{{ $car1->fuel_economy->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->fuel_tank_capacity->name))
                                        <li>
                                            <p> Fuel Tank Capacity:</p>
                                            <P>{{ $car1->fuel_tank_capacity->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->fuel_type->name))
                                        <li>
                                            <p>Fuel Type:</p>
                                            <P>{{ $car1->fuel_type->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->height->name))
                                        <li>
                                            <p>Height:</p>
                                            <P>{{ $car1->height->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->length->name))
                                        <li>
                                            <p>Length:</p>
                                            <P>{{ $car1->length->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->width->name))
                                        <li>
                                            <p>Width:</p>
                                            <P>{{ $car1->width->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->horsepower->name))
                                        <li>
                                            <p>Horse Power:</p>
                                            <P>{{ $car1->horsepower->name }}</P>
                                        </li>
                                        @endif

                                        @if (!empty($car1->make->name))
                                        <li>
                                            <p>Make:</p>
                                            <P>{{ $car1->make->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->seating_capacity->name))
                                        <li>
                                            <p>Seating Capacity:</p>
                                            <P>{{ $car1->seating_capacity->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->top_speed->name))
                                        <li>
                                            <p>Top Speed:</p>
                                            <P>{{ $car1->top_speed->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->torque->name))
                                        <li>
                                            <p>Torque:</p>
                                            <P>{{ $car1->torque->name }}</P>
                                        </li>
                                        @endif


                                        @if (!empty($car1->transmission->name))
                                        <li>
                                            <p>Transmission:</p>
                                            <P>{{ $car1->transmission->name }}</P>
                                        </li>
                                        @endif

                                        @if (!empty($car1->trunk_capacity->name))
                                        <li>
                                            <p>Trunk Capacity:</p>
                                            <P>{{ $car1->trunk_capacity->name }}</P>
                                        </li>
                                        @endif

                                        @if (!empty($car1->wheelbase->name))
                                        <li>
                                            <p> Wheel Base:</p>
                                            <P>{{ $car1->wheelbase->name }}</P>
                                        </li>
                                        @endif


                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="product-details-tab">
                                <div class="prouct-details-tab-menu">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-productdetails-tab" data-toggle="pill" href="#pills-productdetails" role="tab" aria-controls="pills-productdetails" aria-selected="false">Features</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-productdetails" role="tabpanel" aria-labelledby="pills-productdetails-tab">
                                        <div class="content-product-details">
                                            {{ $car1->features }}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>