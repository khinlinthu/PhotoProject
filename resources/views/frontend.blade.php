<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>photo contest</title>
        <meta name="description" content="">
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
                                    <li><i class="fa fa-phone"></i><a href="tel:+985-2356-14566">+985-2356-14566</a></li>
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="right-side-tool text-right">
                                <div class="social-media-area">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>

                                <div class="header-top-right">
                                    <ul>
                                        @auth
                                        <li>Login Successful!!</li>
                                        
                                        @else

                                        <li><i class="fa fa-users"></i><a href="{{ route('user.signin') }}">Login/Registration</a></li>
                                    
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
                                <a href="index.html"><img src="{{asset('frontend_asset/images/scwlogo.jpg')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('photo_contest')}}">Photo Contests {{-- <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index2.html">Home Two</a></li>
                                            </ul>
                                        </li> --}}
                                         <li class="{{ Request::is('photo') ? 'active' : '' }}"><a href="/photo">Photos <i class="fa fa-angle-down"></i></a> 
                                            {{-- <ul>
                                                <li><a href="about.html">About Us</a> 
                                                <li><a href="about-me.html">About Me</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="{{ Request::is('vote') ? 'active' : '' }}"><a href="#">Vote {{-- <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="portfolio1.html">Portfolio 1</a></li>
                                                <li><a href="portfolio2.html">Portfolio 2</a></li>
                                                <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="{{ Request::is('upload') ? 'active' : '' }}"><a href="{{route('uploadpage')}}">+UPLOAD  {{-- <i class="fa fa-angle-down"></i></a>
                                             <ul>
                                                <li><a href="gallery.html">Gallery One</a></li>
                                                <li><a href="gallery1.html">Gallery Two</a></li>
                                                <li><a href="gallery2.html">Gallery Three</a></li>
                                            </ul> --}}
                                        </li>
                                        <li class="{{ Request::is('new') ? 'active' : '' }} "><a href="#">News & Announcements <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="shop.html">Live Score</a></li>
                                                <li><a href="product-details.html">Prize</a></li>
                                            </ul>
                                        </li>
                                        
                                        {{-- <li><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                                <li><a href="single-blog.html">Single Blog</a></li>
                                            </ul>
                                        </li> --}}
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
                                            <a href="#"><img src="{{Auth::user()->photo}}" class="rounded-circle"">{{-- {{Auth::user()->name}} --}}<i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="/profile">Profile</a></li>
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
                                        <li class="active"><a href="index.html">Photo Contests {{-- <i class="fa fa-angle-down"> --}}</i></a>
                                            {{-- <ul>
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index2.html">Home Two</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="/photo">Photos {{-- <i class="fa fa-angle-down"> --}}</i></a> 
                                            {{-- <ul>
                                                <li><a href="about.html">About Us</a> 
                                                <li><a href="about-me.html">About Me</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="#">Vote {{-- <i class="fa fa-angle-down"></i> --}}</a>
                                            {{-- <ul>
                                                <li><a href="portfolio1.html">Portfolio 1</a></li>
                                                <li><a href="portfolio2.html">Portfolio 2</a></li>
                                                <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="{{route('uploadpage')}}">+UPLOAD  {{-- <i class="fa fa-angle-down"></i> --}}</a>
                                            {{-- <ul>
                                                <li><a href="gallery.html">Gallery One</a></li>
                                                <li><a href="gallery1.html">Gallery Two</a></li>
                                                <li><a href="gallery2.html">Gallery Three</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="#">News & Announcements <i class="fa fa-angle-down"></i></a>
                                            <ul>
                                                <li><a href="shop.html">Live Score</a></li>
                                                <li><a href="product-details.html">Prize</a></li>
                                                
                                            </ul>
                                        </li>
                                        
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

        <!-- Footer Area Section Start Here -->
        <footer>
            <div class="footer-top-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="single-footer footer-one">
                                <h3>About Company</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum repellat, maxime vel alias impedit veritatis temporibus, sequi quos veniam eius optio corporis modi dicta molestias at inventore culpa, natus explicabo.</p>
                                <div class="footer-social-media-area">
                                    <nav>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 hidden-sm">
                            <div class="single-footer footer-two">
                                <h3>Twitter Feed</h3>
                                <nav>
                                    <ul>
                                        <li><i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">https://twitter.com/?lang=en</a>
                                            <br/> 3 days ago
                                        </li>
                                        <li><i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">https://twitter.com/?lang=en</a>
                                            <br/> 3 days ago
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 hidden-md col-sm-12">
                            <div class="single-footer footer-three">
                                <h3>Flickr Photos</h3>
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{asset('frontend_asset/images/flicker/1.png')}}" alt="flicker photo"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('frontend_asset/images/flicker/2.png')}}" alt="flicker photo"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('frontend_asset/images/flicker/3.png')}}" alt="flicker photo"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('frontend_asset/images/flicker/4.png')}}" alt="flicker photo"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('frontend_asset/images/flicker/5.png')}}" alt="flicker photo"></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('frontend_asset/images/flicker/6.png')}}" alt="flicker photo"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="single-footer footer-four margin-0">
                                <h3>Corporate Office</h3>
                                <nav>
                                    <ul>
                                        <li><i class="fa fa-paper-plane-o"></i> 44 New Design Street, rne 00 USA</li>
                                        <li><i class="fa fa-phone"></i> <a href="tel:+985-2356-14566">+985-2356-14566</a></li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a></li>
                                        <li><i class="fa fa-fax"></i> Fax: (123) 4589761</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-bottom">
                                <p> &copy; Copyrights 2018. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area Section End Here -->

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