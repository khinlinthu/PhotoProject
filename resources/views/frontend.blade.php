<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Photo Contests</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend_asset/images/fav.png')}}">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/font-awesome.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/animate.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/jquery-ui.min.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/owl.carousel.css')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/inc/custom-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/inc/custom-slider/css/preview.css')}}">
    <!-- lightbox css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/lightbox.min.css')}}">
	<!-- TimeCircles css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/TimeCircles.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('frontend_asset/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>
    
    <!--End preview here -->
    <!--Header area start here-->
<header>
    <div class="header-top-area hidden-sm">
        <div class=" container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="header-top-left">
                        <ul>
                            <li><i class="fa fa-phone"></i><a href="tel:+959-899 3333 87">+959-899 3333 87</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:yourmail@gmail.com">zinlinn@scwmyanmar.com.mm</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="right-side-tool text-right">
                        <div class="social-media-area">
                            <ul>
                                <li><a href="https://www.facebook.com/scwtravel"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                {{-- <li><a href="#"><i class="fa fa-rss"></i></a></li> --}}
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/scw_travel/?fbclid=IwAR3NGM9ACOnGq0-Al3EM-yL77282rMM8ucBb1jPw7rkNZD9-ccxhAILX3dw"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="header-top-right">
                            <ul>
                                @auth
                                <li style="color: #F1C40F; ">Login Successful!</li>
                                
                                @else

                                <li><i class="fa fa-user"></i><a href="{{ route('user.signin') }}">LOGIN</a></li>
                            
                                @endauth
                            </ul>
                        </div>
                        
                    </div>
                 </div>
            </div>
        </div>
    </div>
    
    <div class="header-middle-area" id="sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="logo-area">
                        <a href="{{route('photo_contest')}}"><img src="{{asset('frontend_asset/images/scw myanmar.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('photo_contest')}}"> Contests <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{route('travel')}}">Photo Contest</a></li>
                                        <li><a href="#">Season Two</a></li>
                                    </ul>
                                </li>
                                 <li class="{{ Request::is('photo') ? 'active' : '' }}"><a href="/photo">Photos <i class="fa fa-angle-down"></i></a> 
                                    <ul>
                                        <li><a href="#">Travel</a> 
                                        <li><a href="#">Event</a></li>
                                    </ul>
                                </li>

                                <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="#">Gallery <i class="fa fa-angle-down"></i></a> 
                                    <ul>
                                        <li><a href="#">Photo</a> 
                                        <li><a href="#">Video</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('vote') ? 'active' : '' }}"><a href="@auth {{route('vote')}} @else {{route('user.signin')}}  @endauth">Vote {{-- <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="portfolio1.html">Portfolio 1</a></li>
                                        <li><a href="portfolio2.html">Portfolio 2</a></li>
                                        <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="{{ Request::is('upload') ? 'active' : '' }}">
                                    <a href="@auth {{route('uploadpage')}} @else {{route('user.signin')}}  @endauth">+UPLOAD  <i class="fa fa-angle-down"></i></a>  --}}
                                    
                                     {{-- <ul>
                                        <li><a href="gallery.html">Gallery One</a></li>
                                        <li><a href="gallery1.html">Gallery Two</a></li>
                                        <li><a href="gallery2.html">Gallery Three</a></li>
                                    </ul> 
                                </li> --}}
                                <li class="{{ Request::is('new') ? 'active' : '' }} "><a href="#">News & Announcements <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{route('live')}}">Live Score</a></li>
                                        <li><a href="#">Prize</a></li>
                                    </ul>
                                </li>
                                
                                {{-- <li><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a href="contact.html">Contact Us</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12">
                    {{-- <div class="cart-area"> --}}
                        {{-- <a href="cart.html"><i class="fa fa-shopping-basket"></i><span>3</span></a> --}}

                    @if(Auth::check())
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li >
                                    <a href="/profile"><img src="{{Auth::user()->photo}}" class="rounded-circle">{{-- {{Auth::user()->name}} --}}{{-- <i class="fa fa-angle-down"></i> --}}</a>
                                    <ul>
                                        {{-- <li><a href="/profile">Profile</a></li> --}}
                                        <li><a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>


    <!-- Slide Menu Section Start Here -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('photo_contest')}}"> Contests <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="index.html">Season One</a></li>
                                        <li><a href="index2.html">Season Two</a></li>
                                    </ul>
                                </li>
                                 <li class="{{ Request::is('photo') ? 'active' : '' }}"><a href="/photo">Photos <i class="fa fa-angle-down"></i></a> 
                                    <ul>
                                        <li><a href="about.html">Travel</a> 
                                        <li><a href="about-me.html">Event</a></li>
                                    </ul>
                                </li>

                                <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="/photo">Gallery <i class="fa fa-angle-down"></i></a> 
                                    <ul>
                                        <li><a href="about.html">Photo</a> 
                                        <li><a href="about-me.html">Video</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('vote') ? 'active' : '' }}"><a href="@auth {{route('vote')}} @else {{route('user.signin')}}  @endauth">Vote {{-- <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="portfolio1.html">Portfolio 1</a></li>
                                        <li><a href="portfolio2.html">Portfolio 2</a></li>
                                        <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="{{ Request::is('upload') ? 'active' : '' }}">
                                    <a href="@auth {{route('uploadpage')}} @else {{route('user.signin')}}  @endauth">+UPLOAD  <i class="fa fa-angle-down"></i></a>  --}}
                                    
                                     {{-- <ul>
                                        <li><a href="gallery.html">Gallery One</a></li>
                                        <li><a href="gallery1.html">Gallery Two</a></li>
                                        <li><a href="gallery2.html">Gallery Three</a></li>
                                    </ul> 
                                </li> --}}
                                <li class="{{ Request::is('new') ? 'active' : '' }} "><a href="#">News & Announcements <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="{{route('live')}}">Live Score</a></li>
                                        <li><a href="#">Prize</a></li>
                                    </ul>
                                </li>
                                
                                {{-- <li><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a href="contact.html">Contact Us</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!--Header area end here-->

@yield('content')

@yield('content1')

<!-- jquery latest version -->
<script src="{{asset('frontend_asset/js/vendor/jquery.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('frontend_asset/js/bootstrap.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('frontend_asset/js/owl.carousel.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('frontend_asset/js/owl.carousel.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{asset('frontend_asset/js/jquery.meanmenu.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{asset('frontend_asset/js/jquery-ui.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('frontend_asset/js/wow.min.js')}}"></script>
<!-- jquery.counterup js -->
<script src="{{asset('frontend_asset/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend_asset/js/waypoints.min.js')}}"></script>
<!-- jquery light box -->
<script src="{{asset('frontend_asset/js/lightbox.min.js')}}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{asset('frontend_asset/js/isotope.pkgd.min.js')}}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{asset('frontend_asset/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('frontend_asset/js/jquery.magnific-popup.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('frontend_asset/js/jquery.magnific-popup.min.js')}}"></script>
<!-- jQuery MixedIT Up -->
<script src="{{asset('frontend_asset/js/jquery.mixitup.min.js')}}" type="text/javascript"></script>
<!-- Counter Down js -->
<script src="{{asset('frontend_asset/js/simplyCountdown.min.js')}}"></script>
<!-- Nivo slider js -->
<script src="{{asset('frontend_asset/inc/custom-slider/js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('frontend_asset/inc/custom-slider/home.js')}}"></script>
<!-- jQuery Multistep form -->
<script src="{{asset('frontend_asset/js/multi_step_form.js')}}"></script>
<!-- jquery.fancybox.pack js -->
<script src="{{asset('frontend_asset/inc/fancybox/jquery.fancybox.pack.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('frontend_asset/js/plugins.js')}}"></script>
<!-- jquery weave effects -->
<script src="{{asset('frontend_asset/js/waves.js')}}"></script>
<!-- TimeCircles js -->
<script src="{{asset('frontend_asset/js/TimeCircles.js')}}"></script>
<!-- main js -->
<script src="{{asset('frontend_asset/js/main.js')}}"></script>

@yield('script')
</body>

</html>