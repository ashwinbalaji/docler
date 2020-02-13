@extends('layouts.front')
@section('content')


  <!-- Breadcrumb Area Start -->
	<div class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="title">
							{{ $langg->lang5 }}
						</h1>
						<ul class="pages">
							{{-- Category Breadcumbs --}}

		          @if(isset($bcat))

		              <li>
		                <a href="{{ route('front.index') }}">
		                  {{ $langg->lang1 }}
		                </a>
		              </li>
		              <li class="active">
		                <a href="{{ route('front.blog') }}">
		                  {{ $langg->lang5 }}
		                </a>
		              </li>
		              <li>
		                <a href="{{ route('front.blogcategory',$bcat->slug) }}">
		                  {{ $bcat->name }}
		                </a>
		              </li>

		          @elseif(isset($slug))

		              <li>
		                <a href="{{ route('front.index') }}">
		                  {{ $langg->lang1 }}
		                </a>
		              </li>
		              <li class="active">
		                <a href="{{ route('front.blog') }}">
		                  {{ $langg->lang5 }}
		                </a>
		              </li>
		              <li>
		                <a href="{{ route('front.blogtags',$slug) }}">
		                  {{ $langg->lang308 }}: {{ $slug }}
		                </a>
		              </li>

		          @elseif(isset($search))

		              <li>
		                <a href="{{ route('front.index') }}">
		                  {{ $langg->lang1 }}
		                </a>
		              </li>
		              <li class="active">
		                <a href="{{ route('front.blog') }}">
		                  {{ $langg->lang5 }}
		                </a>
		              </li>
		              <li>
		                <a href="Javascript:;">
		                  {{ $langg->lang12 }}
		                </a>
		              </li>
		              <li>
		                <a href="Javascript:;">
		                  {{ $search }}
		                </a>
		              </li>

		          @else

		              <li>
		                <a href="{{ route('front.index') }}">
		                  {{ $langg->lang1 }}
		                </a>
		              </li>
		              <li class="active">
		                <a href="{{ route('front.blog') }}">
		                  {{ $langg->lang5 }}
		                </a>
		              </li>
		          @endif
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!-- Breadcrumb Area Start -->

	<!-- Blog Area Start -->
	<section class="blog blog-page" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">





          @foreach($blogs as $blogg)
							<div class="blog-box">


					<article id="post-7904" class="post_mod-b post_mod-d clearfix blog-item-gallery post-7904 post type-post status-publish format-gallery has-post-thumbnail hentry category-uncategorized post_format-post-format-gallery">
   <div class="entry-media">
      <img width="1920" height="1200" src="{{ $blogg->photo ? asset('assets/images/blogs/'.$blogg->photo):asset('assets/images/noimage.png') }}" class="img-responsive wp-post-image" alt="" srcset="" sizes="(max-width: 1920px) 100vw, 1920px">				
   </div>
   <div class="entry-main entry-main_mod-a">
      <div class="entry-main__inner">
         <h3 class="entry-title">
         	<a href="{{route('front.blogshow',$blogg->id)}}">{{strlen($blogg->title) > 50 ? substr($blogg->title,0,50)."...":$blogg->title}}</a>
         </h3>
         <div class="entry-meta">
            <span class="entry-meta__item">By::  <span class="entry-meta__link"> <a href="" title="Posts by admin" rel="author">{{ $langg->lang16 }}</a></span></span>
            <span class="entry-meta__item">COMMENTS:: <a href="" class="entry-meta__link">0</a></span>
         </div>
      </div>
      <div class="decor-1"></div>
      <div class="entry-date">
         <span class="entry-date__inner">
         <span class="entry-date__number">{{date('d', strtotime($blogg->created_at))}}</span>
         <br>{{date('M', strtotime($blogg->created_at))}}</span>
      </div>
      <div class="entry-content">
        {{strlen(strip_tags($blogg->details)) > 248 ? substr(strip_tags($blogg->details),0,248) . '...' : substr(strip_tags($blogg->details),0,248) }}
      </div>
      <div class="entry-footer">
         <div class="wrap-post-btn"><a class="post-btn btn-effect" href="{{route('front.blogshow',$blogg->id)}}"><span class="post-btn__inner">Read More</span></a></div>
         <div class="wrap-social-block wrap-social-block_mod-c">
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
            @endforeach

       

						<div class="row mt-5 mb-5">
							<div class="col-lg-12 text-center">
								{{ $blogs->appends(['search' => request()->input('search')])->links() }}
							</div>
						</div>
				</div>
				<div class="col-lg-4">
					<div class="blog-aside">


<aside class="sidebar">

	<div id="search-5" class="widget_search widget block_content">
	<!-- <h4 class="title">
								{{ $langg->lang301 }}
							</h4> -->
	<form action="{{ route('front.blogsearch') }}" method="get" id="search-global-form">    
    	<input type="text" placeholder="{{ $langg->lang302 }}" name="s" id="search" value="{{ request()->input('search') }}">
    	<button class="btn btn-primary btn-round hidden-xs submit" type="submit">{{ $langg->lang301 }}</button>
    </form>		
    </div>


    <div id="categories-5" class="widget_categories widget block_content">
    	<h4 class="widget-title"><span>{{ $langg->lang303 }}</span></h4>		
    	<ul>
    		@foreach($bcats as $cat)
			<li class="cat-item cat-item-1"><a href="{{ route('front.blogcategory',$cat->slug) }}" @if(!empty($bcat) && $bcat->slug == $cat->slug) class="active"  @endif>
                    <span>{{ $cat->name }}</span>
                    <span>({{ $cat->blogs()->count() }})</span>
                  </a></li>
                  @endforeach
		</ul>
	</div>


	<div id="archives-3" class="widget_archive widget block_content recent-post-widget">
		<h4 class="widget-title"><span>{{ $langg->lang304 }}</span></h4>		
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


			<div id="mc4wp_form_widget-3" class="widget_mc4wp_form_widget widget block_content">
				<h4 class="widget-title">
					<span>{{ $langg->lang305 }}</span></h4>

	<div class="gocover" style="background: url({{ asset('assets/front/images/loader.gif') }}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
							<form id="geniusform" action="{{ route('front.subscribe') }}" method="POST">
								{{ csrf_field() }}
								@include('includes.admin.form-both')
								<input type="text" name="email" placeholder="{{ $langg->lang306 }}" required>						
							</form>
<button class="btn btn-primary btn-round hidden-xs submit" type="submit">{{ $langg->lang307 }}</button>
</div>	





	<div id="recent-posts-3" class="widget_recent_entries widget block_content ">		
		<h4 class="widget-title"><span>{{ $langg->lang308 }}</span></h4>		

		<div class="tags">
							
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




		<!-- <div id="recent-comments-3" class="widget_recent_comments widget block_content"><h4 class="widget-title"><span>Recent Comments</span></h4><ul id="recentcomments"><li class="recentcomments"><span class="comment-author-link">admin</span> on <a href="http://autozone.templines.org/rental/autos/chrysler-sebring/#comment-203">Chrysler Sebring</a></li><li class="recentcomments"><span class="comment-author-link">admin</span> on <a href="http://autozone.templines.org/rental/autos/ferrari-california/#comment-202">Ferrari California</a></li><li class="recentcomments"><span class="comment-author-link">admin</span> on <a href="http://autozone.templines.org/rental/autos/fiat-bravo/#comment-200">Fiat Bravo</a></li><li class="recentcomments"><span class="comment-author-link">admin</span> on <a href="http://autozone.templines.org/rental/autos/mercedes-benz-c-220-2/#comment-199">Mercedes-Benz C 220</a></li><li class="recentcomments"><span class="comment-author-link">admin</span> on <a href="http://autozone.templines.org/rental/autos/land-rover/#comment-198">Land Rover</a></li></ul></div> -->


	</aside>






						
						


						
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
