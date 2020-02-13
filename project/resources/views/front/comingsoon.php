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


        









@endsection












@section('scripts')



@endsection