@extends('layouts.front')

@section('meta-infos')
	<meta name="keywords" content="{{ $blog->meta_tag }}">
	<meta name="description" content="{{ $blog->meta_description }}">
@endsection

@section('content')
  <!-- Breadcrumb Area Start -->
	<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="title">
							{{ $langg->lang309 }}
						</h1>
						<ul class="pages">
							<li>
								<a href="{{ route('front.index') }}">
									{{ $langg->lang1 }}
								</a>
							</li>
							<li class="active">
								<a href="#">
									{{ $langg->lang309 }}
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!-- Breadcrumb Area Start -->

	<!-- Blog Area Start -->
	<section class="blog blog-details">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">





					<article id="post-7904" class="post_mod-b post_mod-d clearfix blog-item-gallery post-7904 post type-post status-publish format-gallery has-post-thumbnail hentry category-uncategorized post_format-post-format-gallery">
   <div class="entry-media">
      <img width="1920" height="1200" src="{{ asset('assets/images/blogs/'.$blog->photo) }}" class="img-responsive wp-post-image" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px">				
   </div>
   <div class="entry-main entry-main_mod-a">
      <div class="entry-main__inner">
         <h3 class="entry-title"><a href="">{{ $blog->title }}</a></h3>
         <div class="entry-meta">
            <span class="entry-meta__item">By::  <span class="entry-meta__link"> <a href="" title="Posts by admin" rel="author">{{ $langg->lang16 }}</a></span></span>
            <span class="entry-meta__item">COMMENTS:: <a href="" class="entry-meta__link">0</a></span>
         </div>
      </div>
      <div class="decor-1"></div>
      <div class="entry-date">
         <span class="entry-date__inner">
         <span class="entry-date__number">{{date('d', strtotime($blog->created_at))}}</span>
         <br>{{date('M', strtotime($blog->created_at))}}</span>
      </div>
      <div class="entry-content">
         {{ $blog->details }}	
      </div>
      <div class="entry-footer">
         <div class="wrap-post-btn"></div>
         <div class="wrap-social-block wrap-social-block_mod-c pull-right">
            <div class="social-block ">
               <div class="social-block__inner">
                  <span class="social-block__title">Share This</span>
                  <ul class="social-block__list list-inline">
                     <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                     </li>
                     <li><a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{urlencode(url()->current()) }}"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://plus.google.com/share?url={{urlencode(url()->current()) }}"><i class="fab fa-google-plus-g"></i></a></li>
                     <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url()->current()) }}&amp;title=my share text&amp;summary=dit is de linkedin summary"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</article>



					

				</div>
				<div class="col-lg-4">
					<div class="blog-aside">
						<div class="serch-widget">
							<h4 class="title">
								{{ $langg->lang301 }}
							</h4>
							<form action="{{ route('front.blogsearch') }}">
								<input type="text" value="{{ request()->input('search') }}" name="search" placeholder="{{ $langg->lang302 }}" required="">
								<button class="submit" type="submit">{{ $langg->lang301 }}</button>
							</form>
						</div>
						<div class="categori">
							<h4 class="title">{{ $langg->lang303 }}</h4>
							<ul class="categori-list">
                @foreach($bcats as $cat)
                <li>
                  <a href="{{ route('front.blogcategory',$cat->slug) }}" @if(!empty($bcat) && $bcat->slug == $cat->slug) class="active"  @endif>
                    <span>{{ $cat->name }}</span>
                    <span>({{ $cat->blogs()->count() }})</span>
                  </a>
                </li>
                @endforeach
							</ul>
						</div>
						<div class="recent-post-widget">
							<h4 class="title">{{ $langg->lang304 }}</h4>
							<ul class="post-list">
                @foreach (App\Models\Blog::orderBy('created_at', 'desc')->limit(4)->get() as $blog)
                <li>
                  <div class="post">
                    <div class="post-img">
                      <img src="{{ asset('assets/images/blogs/'.$blog->photo) }}" alt="">
                    </div>
                    <div class="post-details">
                      <a href="{{ route('front.blogshow',$blog->id) }}">
                          <h4 class="post-title">
                              {{strlen($blog->title) > 45 ? substr($blog->title,0,45)." .." : $blog->title}}
                          </h4>
                      </a>
                      <p class="date">
                          {{ date('M d - Y',(strtotime($blog->created_at))) }}
                      </p>
                    </div>
                  </div>
                </li>
                @endforeach
							</ul>
						</div>
						<div class="newsletter-widget">
							<h4 class="title">
									{{ $langg->lang305 }}
							</h4>
							<div class="gocover" style="background: url({{ asset('assets/front/images/loader.gif') }}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
							<form id="geniusform" action="{{ route('front.subscribe') }}" method="POST">
								{{ csrf_field() }}
								@include('includes.admin.form-both')
								<input type="text" name="email" placeholder="{{ $langg->lang306 }}" required>
								<button class="submit" type="submit">{{ $langg->lang307 }}</button>
							</form>
						</div>
						<div class="tags">
							<h4 class="title">{{ $langg->lang308 }}</h4>
							<span class="separator"></span>
							<ul class="tags-list">
                @foreach($tags as $tag)
                  @if(!empty($tag))
                  <li>
                    <a href="{{ route('front.blogtags',$tag) }}">{{ $tag }} </a>
                  </li>
                  @endif
                @endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Area End-->

@endsection

@section('scripts')
<script>

setTimeout(function() {
	$(".commentCount").each(function(i) {
		// console.log($(this).html());
		if ($(this).html() == 'Comments') {
			$(this).html('0 Comments');
		}
	});
}, 2000);



</script>
@endsection
