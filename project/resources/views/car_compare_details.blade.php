<!-- compare car details -->
<section class="compare_details">
    <div class="container">
        <div class="brdr shadow24">

            <div class="section-heading">
                <h2 class="title mb-30 cmprtitle">
                    {{ $car->car_name }} vs {{ $car1->car_name }}
                </h2>
            </div>

            <!-- <p  class="text" style="height: auto;" id="model-highlight" class="descriptionTitle gs_readmore">Should you buy Maruti Alto K10 or Maruti Baleno? Find out which car is best for you - compare the two models on the basis of their Price, Size, Space, Boot Space, Service cost, Mileage, Features, Colours and other specs. Maruti Alto K10 and Maruti Baleno ex-showroom price starts at Rs 3.6 Lakh for LX (Petrol) and Rs 5.58 Lakh for Sigma (Petrol). Alto K10 has 998 cc (Petrol top model) engine, while Baleno has 1248 cc (Diesel top model) engine. As far as mileage is concerned, the Alto K10 has a mileage of 32.26 km/kg (Petrol top model)> and the Baleno has a mileage of 27.39 kmpl (Diesel top model).</p> -->




            <!-- <article>
                <p>Should you buy Maruti Alto K10 or Maruti Baleno? Find out 
                    which car is best for you - compare the two models on the basis 
                    of their Price, Size, Space, Boot Space, Service cost, Mileag
                    e, Features, Colours and other specs. Maruti Alto K10
                     and Maruti Baleno ex-showroom price starts at Rs 3.6 L
                     akh for LX (Petrol) and Rs 5.58 Lakh for Sigma (Petrol). Al
                     to K10 has 998 cc (Petrol top model) engine, while Balen
                     o has 1248 cc (Diesel top model) engine. As far as mileage 
                     is concerned, the Alto K10 has a mileage of 32.26 km/k
                     g (Petrol top model)> and the Baleno has a mileage of 27.39 kmpl (Diesel top model).</p>

                <p></p>

            </article> -->










            <nav class="menu">


                <nav class="drop-down-menu">
                    <input type="checkbox" class="activate" id="accordion-1" name="accordion-1">
                    <label for="accordion-1" class="menu-title">
                        <table>
                            <th class="headingOverview comparefixedO"><i class="icon-overview headingicon hidden-xs"></i> Overview</th>
                            <th class=" headingOverview hidden-sm hidden-xs compareTwoBlock"> {{ $car->car_name }} </th>
                            <th class=" headingOverview hidden-sm hidden-xs compareTwoBlock"> {{ $car1->car_name }}</th>
                        </table>
                    </label>
                    <div class="drop-down lnhgt55">
                        <table class="compareDetail_list">

                            @if (!empty($car->acceleration->name))
                            <tr>
                                <td>Acceleration</td>
                                <td class="br_lft_1">{{ $car->acceleration->name }}</td>
                                <td class="br_lft_1">{{ $car1->acceleration->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->cylinders->name))
                            <tr>
                                <td>Cylinders</td>
                                <td class="br_lft_1">{{ $car->cylinders->name }}</td>
                                <td class="br_lft_1">{{ $car1->cylinders->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->drive_type->name))
                            <tr>
                                <td>Drive Type</td>
                                <td class="br_lft_1">{{ $car->drive_type->name }}</td>
                                <td class="br_lft_1">{{ $car1->drive_type->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->engine_capacity->name))
                            <tr>
                                <td>Engine Capacity</td>
                                <td class="br_lft_1">{{ $car->engine_capacity->name }}</td>
                                <td class="br_lft_1">{{ $car1->engine_capacity->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->fuel_economy->name))
                            <tr>
                                <td>Fuel Economy</td>
                                <td class="br_lft_1">{{ $car->fuel_economy->name }}</td>
                                <td class="br_lft_1">{{ $car1->fuel_economy->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->fuel_tank_capacity->name))
                            <tr>
                                <td>Fuel Tank Capacity</td>
                                <td class="br_lft_1">{{ $car->fuel_tank_capacity->name }}</td>
                                <td class="br_lft_1">{{ $car1->fuel_tank_capacity->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->fuel_type->name))
                            <tr>
                                <td>Fuel Type</td>
                                <td class="br_lft_1">{{ $car->fuel_type->name }}</td>
                                <td class="br_lft_1">{{ $car1->fuel_type->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->height->name))
                            <tr>
                                <td>Height</td>
                                <td class="br_lft_1">{{ $car->height->name }}</td>
                                <td class="br_lft_1">{{ $car1->height->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->length->name))
                            <tr>
                                <td>Length</td>
                                <td class="br_lft_1">{{ $car->length->name }}</td>
                                <td class="br_lft_1">{{ $car1->length->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->width->name))
                            <tr>
                                <td>Width</td>
                                <td class="br_lft_1">{{ $car->width->name }}</td>
                                <td class="br_lft_1">{{ $car1->width->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->horsepower->name))
                            <tr>
                                <td>Horse Power</td>
                                <td class="br_lft_1">{{ $car->horsepower->name }}</td>
                                <td class="br_lft_1">{{ $car1->horsepower->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->make->name))
                            <tr>
                                <td>Make</td>
                                <td class="br_lft_1">{{ $car->make->name }}</td>
                                <td class="br_lft_1">{{ $car1->make->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->seating_capacity->name))
                            <tr>
                                <td>Seating Capacity</td>
                                <td class="br_lft_1">{{ $car->seating_capacity->name }}</td>
                                <td class="br_lft_1">{{ $car1->seating_capacity->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->top_speed->name))
                            <tr>
                                <td>Top Speed</td>
                                <td class="br_lft_1">{{ $car->top_speed->name }}</td>
                                <td class="br_lft_1">{{ $car1->top_speed->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->torque->name))
                            <tr>
                                <td>Torque</td>
                                <td class="br_lft_1">{{ $car->torque->name }}</td>
                                <td class="br_lft_1">{{ $car1->torque->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->transmission->name))
                            <tr>
                                <td>Transmission</td>
                                <td class="br_lft_1">{{ $car->transmission->name }}</td>
                                <td class="br_lft_1">{{ $car1->transmission->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->trunk_capacity->name))
                            <tr>
                                <td>Trunk Capacity</td>
                                <td class="br_lft_1">{{ $car->trunk_capacity->name }}</td>
                                <td class="br_lft_1">{{ $car1->trunk_capacity->name }}</td>
                            </tr>
                            @endif
                            @if (!empty($car->wheelbase->name))
                            <tr>
                                <td> Wheel Base</td>
                                <td class="br_lft_1">{{ $car->wheelbase->name }}</td>
                                <td class="br_lft_1">{{ $car1->wheelbase->name }}</td>
                            </tr>
                            @endif




                            </tr>
                        </table>
                    </div>
                </nav>

                <section class="Googl_ads">
                    <div class="container">
                        <div class="adsgg">
                            <img src="https://www.codot.gov/safety/colorado-teen-drivers/driving-tool-kit/Seat%20Belt_Tab/Seatbelt_WebsiteBanners_728x90.gif">
                        </div>
                    </div>
                </section>

                <nav class="drop-down-menu">
                    <input type="checkbox" class="activate" id="accordion-2" name="accordion-2">
                    <label for="accordion-2" class="menu-title">
                        <div class="section-heading">
                            <h2 class="title mb-30 cmprtitle">
                                Comfort & Convenience -DEMO
                            </h2>
                        </div>
                    </label>

                    <div class="drop-down lnhgt55">
                        <table class="compareDetail_list">
                            <tr>
                                <td class="keyDifferences ">Power Steering</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Power Windows Front</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Power Windows Rear</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Automatic Climate Control</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Air Quality Control</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Remote Trunk Opener</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Remote Fuel Lid Opener</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Low Fuel Warning Light</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Accessory Power Outlet</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Trunk Light</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Vanity Mirror</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Rear Reading Lamp</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Rear Seat Headrest</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Rear Seat Centre Arm Rest</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>



                        </table>
                    </div>
                </nav>


                <nav class="drop-down-menu">
                    <input type="checkbox" class="activate" id="accordion-3" name="accordion-2">
                    <label for="accordion-3" class="menu-title">
                        <div class="section-heading">
                            <h2 class="title mb-30 cmprtitle">
                                Safety
                            </h2>
                        </div>
                    </label>

                    <div class="drop-down lnhgt55">
                        <table class="compareDetail_list">
                            <tr>
                                <td class="keyDifferences ">Power Steering</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Power Windows Front</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Power Windows Rear</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Automatic Climate Control</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Air Quality Control</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Remote Trunk Opener</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Remote Fuel Lid Opener</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Low Fuel Warning Light</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Accessory Power Outlet</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Trunk Light</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Vanity Mirror</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Rear Reading Lamp</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Rear Seat Headrest</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>
                            <tr>
                                <td class="keyDifferences ">Rear Seat Centre Arm Rest</td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-check"></i></td>
                                <td class="br_lft_1 keyDifrnsrght"><i class="icon-deletearrow"></i></td>
                            </tr>



                        </table>
                    </div>
                </nav>

            </nav>
        </div>
    </div>
</section>
<!-- compare car details End-->