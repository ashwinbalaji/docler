@extends('layouts.admin')

@section('content')

<div class="content-area">
    <div class="row row-cards-one">
        <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="mycard bg1">
                <div class="left">
                    <h5 class="title">Total Users! </h5>
                    <span class="number">{{ \App\Models\User::where('status', 1)->count() }}</span>
                    <a href="{{ route('admin-user-index') }}" class="link">View All</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="mycard bg2">
                <div class="left">
                    <h5 class="title">Total Plans!</h5>
                    <span class="number">{{ \App\Models\Plan::where('status', 1)->count() }}</span>
                    <a href="{{ route('admin-plan-index') }}" class="link">View All</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="mycard bg3">
                <div class="left">
                    <h5 class="title">Total Posts</h5>
                    <span class="number">{{ \App\Models\Blog::count() }}</span>
                    <a href="{{ route('admin-blog-index') }}" class="link">View All</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="icofont-newspaper"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="mycard bg4">
                <div class="left">
                    <h5 class="title">Total Social Links!</h5>
                    <span class="number">{{ $gs->f_status + $gs->i_status + $gs->g_status + $gs->t_status + $gs->l_status + $gs->d_status }}</span>
                    <a href="{{ route('admin-gs-socialsetting') }}" class="link">View All</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="fa fa-link" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="mycard bg5">
                <div class="left">
                    <h5 class="title">Total Testimonials!</h5>
                    <span class="number">{{ \App\Models\Testimonial::count() }}</span>
                    <a href="{{ route('admin-tstm-index') }}" class="link">View All</a>
                </div>
                <div class="right d-flex align-self-center">
                    <div class="icon">
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row row-cards-one">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <h5 class="card-header">Recently Added Cars</h5>
                <div class="card-body">
                    <div class="table-responsiv  dashboard-home-table">
                        <div id="poproducts_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row btn-area">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-5"></div>
                                <div class="col-sm-12 col-md-7"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection