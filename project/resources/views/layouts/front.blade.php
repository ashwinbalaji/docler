<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @if (request()->is('blog/*'))
        @yield('meta-infos')
        @else
        <meta name="keywords" content="{{ $seo->meta_keys }}">
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $gs->title }}</title>

        <!-- FONT AWSOM -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('assets/front/images/favicon.png')}}" type="image/x-icon">
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
        <!-- Plugin css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/plugin.css')}}">
        <!-- stylesheet -->
        <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
        <!-- responsive -->
        <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}">
        <!-- custom -->
        <link rel="stylesheet" href="{{asset('assets/front/css/custom.css')}}">
        <!-- base color -->
        <link rel="stylesheet" href="{{ asset('assets/front/css/styles.php?color='.str_replace('#','',$gs->colors)) }}">
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $seo->google_analytics }}"></script>
        <script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', '{{ $seo->google_analytics }}');
        </script>
    </head>


    @if($gs->is_loader == 1)
    <div class="preloader" id="preloader" style="background: url({{asset('assets/front/images/loader.gif')}}) no-repeat scroll center center #FFF;"></div>
    @endif


    <!--Main-Menu Area Start-->
    <header>
        <div class="mainmenu-area">

            <div class="top_header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="navbar-brand" href="{{ route('front.index') }}">
                                <img src="{{asset('assets/front/images/logo.png')}}" alt="">
                            </a>





                            <nav class="navbar navbar-expand-lg navbar-light rspnav">

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse fixed-height" id="main_menu">
                                    <ul class="navbar-nav mc-auto">

                                        <li class="nav-item">
                                            <a class="nav-link @if(request()->path() == '/') active @endif" href="{{ route('front.index') }}">{{ $langg->lang1 }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(request()->path() == 'cars')  @endif" href="{{ route('front.cars') }}">NEW CAR </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link @if(request()->path() == 'cars')  @endif" href="#">Preowned Car </a>
                                        </li>



                                        @if (!empty($menus))
                                        <!-- <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle @if (request()->is('*/pages')) active	@endif" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{ $langg->lang3 }}
                                                </a>
                                                <div class="dropdown-menu">
                                                        @foreach ($menus as $key => $menu)
                                                        <a class="dropdown-item @if (request()->is(" $menu->slug/pages")) active @endif" href="{{route('front.dynamicPage', $menu->slug)}}">{{$menu->title}}</a>
                                                        @endforeach
                                                </div>
                                        </li> -->
                                        @endif
                                        @if ($gs->is_faq == 1)
                                        <!-- <li class="nav-item">
                                                <a class="nav-link @if(request()->path() == 'faq') active @endif" href="{{ route('front.faq') }}">{{ $langg->lang4 }}</a>
                                        </li> -->
                                        @endif
                                        <li class="nav-item">
                                            <a class="nav-link @if(request()->path() == 'compare') active @endif" href="{{ route('front.compare') }}">Compare Cars</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(request()->path() == 'blog') active @endif" href="{{ route('front.blog') }}">{{ $langg->lang5 }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link @if(request()->path() == 'compare') active @endif" href="{{ route('front.compare') }}">News</a>
                                        </li>
                                        @if ($ps->is_contact == 1)
                                        <li class="nav-item">
                                            <a class="nav-link @if(request()->path() == 'contact') active @endif" href="{{ route('front.contact') }}">{{ $langg->lang6 }} </a>
                                        </li>
                                        @endif
                                    </ul>

                                    <ul class="m_ato f_right rspsbnavhdn">
                                        <li class="hdrht hidden-sm hidden-md"><span>Feedback</span></li>
                                        <li data-track-section="headertop" class="hdrht">
                                            <div class="dropdown">
                                                <button onclick="myFunction()" class="dropbtn">English<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                                                <div id="myDropdown" class="dropdown-content">
                                                    <a href="#home">English</a>
                                                    <a href="#about">हिन्दी</a>
                                                    <a href="#contact">தமிழ்</a>
                                                    <a href="#contact">తెలుగు</a>
                                                    <a href="#contact">മലയാളം</a>
                                                    <a href="#contact">ಕನ್ನಡ</a>
                                                </div>
                                            </div>

                                                                                <!-- <span class="languagedropdown customSelect">
                                                                                        <select data-open="true">
                                                                                                <option value="en" data-lang="English" data-value="" selected="">English</option>
                                                                                                <option value="hi" data-lang="Hindi" data-value="">हिन्दी</option>
                                                                                                <option value="ta" data-lang="Tamil" data-value="">தமிழ்</option>
                                                                                                <option value="te" data-lang="Telugu" data-value="">తెలుగు</option>
                                                                                                <option value="ml" data-lang="Malayalam" data-value="">മലയാളം</option>
                                                                                                <option value="kn" data-lang="Kannada" data-value="">ಕನ್ನಡ</option>
                                                                                        </select>
                                                                                </span> -->
                                        </li>
                                        <li class="hdrht">
                                            <div class="dropdown loreg">
                                                <button class="dropbtn loreg"><i class="fa fa-user-o" aria-hidden="true"></i>
                                                    Login / Register<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                                                <div class="dropdown-content loreg">
                                                    <a href="#">Login</a>
                                                    <hr>
                                                    <a href="#">Register</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>



                        </div>

                        <div class="col-md-5 m_ato">
                            <form class="classNameHere" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control crsrch" placeholder="Search Cars or Brands" name="srch-term" id="srch-term">
                                    <div class="input-group-btn tpsch">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-4 m_ato ">


                            <ul class="m_ato f_right  rspsbnavhdn">
                                <li class="hdrht hidden-sm hidden-md"><span>Feedback</span></li>
                                <li data-track-section="headertop" class="hdrht">
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">English<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="#home">English</a>
                                            <a href="#about">हिन्दी</a>
                                            <a href="#contact">தமிழ்</a>
                                            <a href="#contact">తెలుగు</a>
                                            <a href="#contact">മലയാളം</a>
                                            <a href="#contact">ಕನ್ನಡ</a>
                                        </div>
                                    </div>

                                                                <!-- <span class="languagedropdown customSelect">
                                                                                        <select data-open="true">
                                                                                                <option value="en" data-lang="English" data-value="" selected="">English</option>
                                                                                                <option value="hi" data-lang="Hindi" data-value="">हिन्दी</option>
                                                                                                <option value="ta" data-lang="Tamil" data-value="">தமிழ்</option>
                                                                                                <option value="te" data-lang="Telugu" data-value="">తెలుగు</option>
                                                                                                <option value="ml" data-lang="Malayalam" data-value="">മലയാളം</option>
                                                                                                <option value="kn" data-lang="Kannada" data-value="">ಕನ್ನಡ</option>
                                                                                        </select>
                                                                                </span> -->
                                </li>
                                <li class="hdrht">
                                    <div class="dropdown loreg">
                                        <button class="dropbtn loreg"><i class="fa fa-user-o" aria-hidden="true"></i>
                                            Login / Register<i class="fa fa-sort-desc" aria-hidden="true"></i></button>
                                        <div class="dropdown-content loreg">
                                            <a href="#">Login</a>
                                            <hr>
                                            <a href="#">Register</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>



                            <!-- @auth -->

                            <!-- already comment -->
                            <!-- <a href="{{ route('user.login-signup') }}" class="mybtn1 ml-4">
                                            {{ $langg->lang8 }}
                                    </a> -->
                            <!-- already comment -->


                            <!-- @endauth
                                    @guest
                                    <a href="{{ route('user.login-signup') }}" class="mybtn1 pull_right">
                                            {{ $langg->lang7 }}
                                            @endguest
                                    </a> -->
                        </div>
                    </div>

                </div>
            </div>

            <div class="bottom_header">
                <div class="container cnt_bbtmhead">

                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler rspnon" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse fixed-height" id="main_menu">
                            <ul class="navbar-nav mc-auto">

                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == '/') active @endif" href="{{ route('front.index') }}">{{ $langg->lang1 }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == '/')  @endif" href="{{ route('front.index') }}">NEW CAR </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'cars')  @endif" href="#">Preowned Car </a>
                                </li>
                                <!-- <li class="nav-item">
                                        <a class="nav-link @if(request()->path() == '/')  @endif" href="{{ route('front.index') }}">Sell CAR </a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'cars') active @endif" href="{{ route('front.cars') }}">{{ $langg->lang2 }}</a>
                                </li>
                                @if (!empty($menus))
                                <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle @if (request()->is('*/pages')) active	@endif" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ $langg->lang3 }}
                                        </a>
                                        <div class="dropdown-menu">
                                                @foreach ($menus as $key => $menu)
                                                <a class="dropdown-item @if (request()->is(" $menu->slug/pages")) active @endif" href="{{route('front.dynamicPage', $menu->slug)}}">{{$menu->title}}</a>
                                                @endforeach
                                        </div>
                                </li> -->
                                @endif
                                @if ($gs->is_faq == 1)
                                <!-- <li class="nav-item">
                                        <a class="nav-link @if(request()->path() == 'faq') active @endif" href="{{ route('front.faq') }}">{{ $langg->lang4 }}</a>
                                </li> -->
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'compare') active @endif" href="{{ route('front.compare') }}">Compare Cars</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'blog') active @endif" href="{{ route('front.blog') }}">{{ $langg->lang5 }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'compare') active @endif" href="{{ route('front.compare') }}">News</a>
                                </li>
                                @if ($ps->is_contact == 1)
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'contact') active @endif" href="{{ route('front.contact') }}">{{ $langg->lang6 }} </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
    </header>
    <!--Main-Menu Area Start-->

    @yield('content')






    <body>

        <!-- Footer Area Start -->
        <footer class="footer" id="footer">


            <div class="footer_Trafic">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <span class="icon-india-no"></span>
                            <div class="trafic_col">
                                <div class="title">India’s #1</div>
                                <p>Largest Auto portal</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <span class="icon-car-sold"></span>
                            <div class="trafic_col">
                                <div class="title">Car Sold</div>
                                <p>Every 4 minute</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <span class="icon-offers"></span>
                            <div class="trafic_col">
                                <div class="title">Offers</div>
                                <p>Stay updated pay less</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <span class="icon-compare-car"></span>
                            <div class="trafic_col">
                                <div class="title">Compare</div>
                                <p>Decode the right car</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <div class="footer-widget about-widget">
                            <!-- <div class="footer-logo">
                                    <a href="{{ route('front.index') }}">
                                            <img src="{{ asset('assets/front/images/footer_logo.png')}}" alt="">
                                    </a>
                            </div> -->
                            <h4 class="title">
                                OVERVIEW
                            </h4>

                                                <!-- <p>
                                                                {{ $gs->footer }}
                                                        </p> -->
                            <ul class="ftr_overview">
                                <li><a href="">About us</a></li>
                                <li><a href="">FAQs</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms &amp; Conditions</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="footer-widget address-widget">
                            <h4 class="title">
                                <!-- {{ $langg->lang18 }} -->
                                OTHERS
                            </h4>
                            <ul class="ftr_overview">
                                <li><a href="">Trustmarked used cars</a></li>
                                <li><a href="">Advertise with Us</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Customer Care</a></li>
                            </ul>
                            <!-- <ul class="about-info">
                                    <li>
                                            <p>
                                                    <i class="fas fa-globe"></i>
                                                    {{ $gs->footer_address }}
                                            </p>
                                    </li>
                                    <li>
                                            <p>
                                                    <i class="fas fa-phone"></i>
                                                    {{ $gs->footer_phone }}
                                            </p>
                                    </li>
                                    <li>
                                            <p>
                                                    <i class="far fa-envelope"></i>
                                                    {{ $gs->footer_email }}
                                            </p>
                                    </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="footer-widget  footer-newsletter-widget">
                            <h4 class="title">
                                <!-- {{ $langg->lang19 }} -->
                                CONNECT WITH US
                            </h4>

                            <ul class="ftr_overview">
                                <li><a href="">1800 200 3000 (Toll-Free)</a></li>
                                <li><a href="">support@carsearchme.com</a></li>
                                <li><a href="">Dealer solution</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Feedback</a></li>
                            </ul>

                            <!-- @include('includes.admin.form-both')
                            <div class="gocover" style="background: url({{ asset('assets/front/images/loader.gif') }}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                            <div class="newsletter-form-area">
                                    <form id="geniusform" action="{{ route('front.subscribe') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="email" name="email" placeholder="Your email address..." required>
                                            <button type="submit">
                                                    <i class="far fa-paper-plane"></i>
                                            </button>
                                    </form>
                            </div>
                            <div class="social-links">
                                    <h4 class="title">
                                            {{ $langg->lang20 }} :
                                    </h4>
                                    <div class="fotter-social-links">
                                            <ul>
                                                    @if ($gs->f_status == 1)
                                                    <li>
                                                            <a href="{{$gs->facebook}}" target="_blank">
                                                                    <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                    </li>
                                                    @endif
                                                    @if ($gs->t_status == 1)
                                                    <li>
                                                            <a href="{{$gs->twitter}}" target="_blank">
                                                                    <i class="fab fa-twitter"></i>
                                                            </a>
                                                    </li>
                                                    @endif
                                                    @if ($gs->i_status == 1)
                                                    <li>
                                                            <a href="{{$gs->instagram}}" target="_blank">
                                                                    <i class="fab fa-instagram"></i>
                                                            </a>
                                                    </li>
                                                    @endif
                                                    @if ($gs->g_status == 1)
                                                    <li>
                                                            <a href="{{$gs->gplus}}" target="_blank">
                                                                    <i class="fab fa-google-plus-g"></i>
                                                            </a>
                                                    </li>
                                                    @endif
                                                    @if ($gs->l_status == 1)
                                                    <li>
                                                            <a href="{{$gs->linkedin}}" target="_blank">
                                                                    <i class="fab fa-linkedin-in"></i>
                                                            </a>
                                                    </li>
                                                    @endif
                                                    @if ($gs->d_status == 1)
                                                    <li>
                                                            <a href="{{$gs->dribble}}" target="_blank">
                                                                    <i class="fas fa-basketball-ball"></i>
                                                            </a>
                                                    </li>
                                                    @endif
                                            </ul>
                                    </div>
                            </div> -->





                        </div>
                    </div>



                    <div class="col-md-3 col-lg-3">
                        <div class="footer-widget address-widget">
                            <h4 class="title">
                                <!-- {{ $langg->lang18 }} -->
                                EXPERIENCE CARSEARCHME APP
                            </h4>
                            <ul class="row appholder">
                                <li class="col-md-6">
                                    <a href="" title="" target="_blank" rel="noopener">
                                        <img class="apicon" data-servewebp="true" data-lazy="true" data-gsll-src="https://stimg.cardekho.com/pwa/img/appstore.png" alt="" src="https://stimg.cardekho.com/pwa/img/appstore.png">
                                    </a>
                                </li>
                                <li class="col-md-6">
                                    <a href="" title="" target="_blank" rel="noopener">
                                        <img class="apicon" data-servewebp="true" data-lazy="true" data-gsll-src="https://stimg.cardekho.com/pwa/img/playstore.png" alt="" src="https://stimg.cardekho.com/pwa/img/playstore.png">
                                    </a>
                                </li>
                            </ul>
                            <h4 class="title1">
                                Follow us
                            </h4>
                            <div class="fotter-social-links">
                                <ul>
                                    <li>
                                        <a href="{{$gs->facebook}}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$gs->twitter}}" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$gs->instagram}}" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$gs->gplus}}" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$gs->linkedin}}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$gs->dribble}}" target="_blank">
                                            <i class="fas fa-basketball-ball"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="copy-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <div class="content">
                                    <p class="copyRight">© 2020 carsearchme </p>
                                    <!-- <p>{{$gs->copyright }}</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- Back to Top Start -->
        <div class="bottomtotop">
            <i class="fas fa-chevron-right"></i>
        </div>
        <!-- Back to Top End -->

        <!-- jquery -->
        <script src="{{asset('assets/front/js/jquery.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <!-- popper -->
        <script src="{{asset('assets/front/js/popper.min.js')}}"></script>
        <!-- plugin js-->
        <script src="{{asset('assets/front/js/plugin.js')}}"></script>
        <script src="{{asset('assets/front/js/toltip.js')}}"></script>
        <!-- main -->
        <script src="{{asset('assets/front/js/main.js')}}"></script>
        <script>
                                                                            var gs = @php echo json_encode($gs) @endphp;
        </script>
        <!-- custom -->
        <script src="{{asset('assets/front/js/custom.js')}}"></script>




        <!-- DROPDOWN -->
        <script>
                                                                            /* When the user clicks on the button, 
                                                                             toggle between hiding and showing the dropdown content */
                                                                            function myFunction() {
                                                                                document.getElementById("myDropdown").classList.toggle("show");
                                                                            }

                                                                            // Close the dropdown if the user clicks outside of it
                                                                            window.onclick = function (event) {
                                                                                if (!event.target.matches('.dropbtn')) {
                                                                                    var dropdowns = document.getElementsByClassName("dropdown-content");
                                                                                    var i;
                                                                                    for (i = 0; i < dropdowns.length; i++) {
                                                                                        var openDropdown = dropdowns[i];
                                                                                        if (openDropdown.classList.contains('show')) {
                                                                                            openDropdown.classList.remove('show');
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
        </script>






        @yield('scripts')
    </body>

</html>