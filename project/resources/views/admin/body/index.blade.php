@extends('layouts.admin')

@section('content')
<style>
	.spec_search_area {
		background: #dce1f7;
		margin: 5px;
		padding: 10px;
	}

	.spec_search_btn {
		margin: 9px !important;
		height: 42px !important;
		width: 129px !important;
		border: none !important;
		border-radius: 5px !important;
	}

	.select2-container .select2-selection--single .select2-selection__rendered {
		padding: 21px 25px 11px 20px !important;

	}
</style>
<input type="hidden" id="headerdata" value="BRAND">
<div class="content-area">
	<div class="mr-breadcrumb">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Specifications</h4>
				@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
				@endif
				<ul class="links">
					<li>
						<a href="{{ route('admin.dashboard') }}">Dashboard </a>
					</li>
					<li>
						<a href="#">Car Specifications</a>
					</li>
					<li>
						<a href="#">Specifications</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="product-area">
		<div class="spec_search_area">
			<div class="col-md-12">
				<div class="row">
					<div class="col-lg-6">
						<select name='spec_type' style="width: 100% !important" id="filter_box" class="js-example-basic-single">
							<option value="" disabled selected>Select Specification Type</option>
							<option value="drive_type">drive_type</option>
							<option value="cylinders">cylinders</option>
							<option value="engine_capacity">engine capacity</option>
							<option value="acceleration">Acceleration</option>
							<option value="fuel_economy">fuel economy</option>
							<option value="fuel_tank_capacity">fuel tank capacity</option>
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
						<button class="add-btn spec_search_btn" id="filter_submit" style="margin:26px; width:120px" type="submit">Filter</button>
					</div>
					<div class="col-lg-3" style="margin-top: 22px;">
						<a class="add-btn spec_search_btn" data-href="{{route('admin-body-create')}}" id="add-data" data-toggle="modal" data-target="#modal1"> Add New Specification </a>

					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="mr-table allproduct">

				@include('includes.admin.form-success')





				<div class="table-responsiv" id="spec_data">
					<table id="specification_list" class="table table-hover dt-responsive" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">

	</div>

</div>

{{-- ADD / EDIT MODAL --}}

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content" style="left: 250px;top: -65px;">
			<div class="submit-loader">
				<img src="{{asset('assets/images/spinner.gif')}}" alt="">
			</div>
			<div class="modal-header">
				<h4>Add Specifications</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
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
				<p class="text-center">You are about to delete this Body Type. Everything under this body type will be deleted.</p>
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
	$(document).ready(function() {

		$('.js-example-basic-single').select2();
		$("#spec_data").hide();
	});

	$("#filter_submit").click(function() {

		if ($("#filter_box").val() == null) {

			alert("Please Select Specification")
		} else {
			$('#specification_list').dataTable().fnClearTable();
			$('#specification_list').dataTable().fnDestroy();
			$('#specification_list').DataTable({

				"processing": true,

				"serverSide": true,

				"ajax": {

					"url": "{{ route('admin.specification.list') }}",

					"dataType": "json",

					"type": "POST",

					"data": {
						_token: "{{csrf_token()}}",
						table: $("#filter_box").val(),

					}

				},

				"columns": [

					{
						"data": "id"
					},
					{
						"data": "name"
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
			$("#spec_data").show();

		}

	});
</script>

@endsection