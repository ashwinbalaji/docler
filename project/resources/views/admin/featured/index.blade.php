@extends('layouts.admin')
@section('content')
<style>
    a.edit_btn {
        background: #1f224f;
        width: 59px;
        height: 100px;
        padding: 7px;
    }
</style>
<input type="hidden" id="headerdata" value="CATGORY">
<div class="content-area">
    <div class="mr-breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading">Featured Cars</h4>
                <ul class="links">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>
                    <li>
                        <a href="">Car Management</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="mr-table allproduct">
                    @include('includes.admin.form-success')
                    <div class="table-responsiv" style="overflow-y: scroll;">
                        <table id="customers_list" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Car Name</th>
                                    <th>Acceleration</th>
                                    <th>Cylinders</th>
                                    <th>Drive Type</th>
                                    <th>Engine Capacity</th>
                                    <th>Fuel Economy</th>
                                    <th>Fuel Tank Capacity</th>
                                    <th>Fuel Type</th>
                                    <th>Height</th>
                                    <th>Length</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Seating Capacity</th>
                                    <th>Top Speed</th>
                                    <th>Torque</th>
                                    <th>Transmission</th>
                                    <th>Trunk Capacity</th>
                                    <th>Wheelbase</th>
                                    <th>Width</th>
                                    <th>Horsepower</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ADD / EDIT MODAL --}}
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="submit-loader">
                <img src="{{asset('assets/images/spinner.gif')}}" alt="">
            </div>
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{-- ADD / EDIT MODAL ENDS --}}
{{-- DELETE MODAL --}}
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h4 class="modal-title d-inline-block">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center">You are about to delete this Category. Everything under this category will be deleted.</p>
                <p class="text-center">Do you want to proceed?</p>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
{{-- DELETE MODAL ENDS --}}
@endsection
@section('scripts')
{{-- DATA TABLE --}}

<script type="text/javascript">
    // customers list

    $('#customers_list').DataTable({

        "processing": true,

        "serverSide": true,

        "ajax": {

            "url": "{{ route('admin.car.featuredlist') }}",

            "dataType": "json",

            "type": "POST",

            "data": {
                _token: "{{csrf_token()}}",
                route: 'products'
            }

        },

        "columns": [

            {
                "data": "id"
            },
            {
                "data": "car_name"
            },
            {
                "data": "acceleration"
            },
            {
                "data": "cylinders"
            },
            {
                "data": "drive_type"
            },
            {
                "data": "engine_capacity"
            },
            {
                "data": "fuel_economy"
            },
            {
                "data": "fuel_tank_capacity"
            },
            {
                "data": "fuel_type"
            },
            {
                "data": "height"
            },
            {
                "data": "length"
            },
            {
                "data": "make"
            },
            {
                "data": "model"
            },
            {
                "data": "seating_capacity"
            },
            {
                "data": "top_speed"
            },
            {
                "data": "torque"
            },
            {
                "data": "transmission"
            },
            {
                "data": "trunk_capacity"
            },
            {
                "data": "wheelbase"
            },
            {
                "data": "width"
            },
            {
                "data": "horsepower"
            },

            {
                "data": "action"
            }

        ],
        aoColumnDefs: [

            {

                bSortable: false,

                aTargets: [-1]

            }

        ]



    });
</script>
@endsection