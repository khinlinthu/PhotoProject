@extends('frontend')

@section('content')

<style type="text/css">
	img{
		border-width: 1px;   
        border-color: #F1C40F;   
        border-style: solid;
	}

	.btn{
		padding: 15px 40px;
		border-radius: 50px;
		color: #000000;
	}

	.btn:hover {
		padding: 15px 40px;
		border-radius: 50px;
		color: #ffffff;
		background-color: red;
	}
	
</style>

		<!-- Slider Area Start Here-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{asset('frontend_asset/images/q.jpg')}}" alt="" title="#slider-direction-1" />
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Travel Photo Contest</h1>
                            <div class="slider-botton">
                                <ul>
                                    <li><a href="#headerone">header </a></li>
                                    <li class="acitve"><a href="#headerone">header</a></li>
                                    <li><a href="#headerone">header </a></li>
                                    <li class="acitve"><a href="#headertwo">header</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End Here-->

        <section id="headerone">
		<div class="slider-bottom-area pt-100 pb-90">
            <div class="container">
                <div class="slider-bottom">
                    <div class="total-business">
                        <div class="single-business">
                            <h3><a href="#">Photo Brading</a></h3>
                            <ul>
                            	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo, enim odit</li> 
                            </ul>
                            <img src="{{asset('frontend_asset/images/travel.jpg')}}" class="mt-3">
                        </div>
                        <div class="single-business">
                            <h3><a href="#">Photo Editing</a></h3>
                            <ul>
                            	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo, enim odit</li>
                            </ul>
                            <img src="{{asset('frontend_asset/images/travel.jpg')}}" class="mt-3">
                        </div>
                        <div class="single-business">
                            <h3><a href="#">Photoshot</a></h3>
                            <ul>
                            	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo, enim odit</li>
                            </ul>
                            <img src="{{asset('frontend_asset/images/travel.jpg')}}" class="mt-3">
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                	<div class="col-lg-12 col-md-12 col-sm-12">
                		<div class="section-title">
	                		<p style="color: #000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                		cillum dolore eu fugiat nulla pariatur..</p>
	                		<h4> Excepteur sint occaecat cupidatat non
	                		proident</h4>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    	</section>

        <!-- Home page core services start here -->
        <section id="headertwo">
        <div class="container-fluid acurate">
            <div class="home-page-core-activities-area">
                <div class="row acurate">
                    <div class="col-lg-7 col-md-12 acurate">
                        <img class="normal" src="{{asset('frontend_asset/images/11.jpg')}}" alt="">
                        {{-- <img class="tablate" src="images/activities-bg1.jpg" alt=""> --}}
                    </div>
                    <div class="col-lg-5 col-md-12 acurate">
                        <div class="home-activities-area">
                            <h3>Photo Contest Features</h3>
                            <div class="single-activities">
                                <div class="media">
                                    {{-- <div class="pull-left">
                                        <a href="#">
                                            <i class="fa fa-camera-retro"></i>
                                        </a>
                                    </div> --}}
                                    <div class="media-body">
                                        <h4 class="media-heading">{{-- <a href="#">Shop Intregated</a> --}}
                                        	Photo Contest
                                        </h4>
                                        <ul class="text-danger" style="list-style-type:disc">
                                        	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        	</li>
                                        	<li> sed do eiusmod
                                        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
                                        	<li>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        	consequat. </li>
                                        	<li>Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
                                        	<li>cillum dolore eu fugiat nulla pariatur.</li>
                                        	<li>Excepteur sint occaecat cupidatat non
                                        	proident, </li>
                                        	<li>sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                                        </ul>
                                        <a href=""><button type="button" class="btn mt-4">Vote Now</button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Home page core services end here -->

@endsection


@section('content1')

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
                                    <li><a href="https://www.facebook.com/scwtravel"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/scw_travel/?fbclid=IwAR3NGM9ACOnGq0-Al3EM-yL77282rMM8ucBb1jPw7rkNZD9-ccxhAILX3dw"><i class="fa fa-instagram"></i></a></li>
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
                                <li><i class="fa fa-paper-plane-o"></i> No.25, Ivory Court Villa Pun Hlaing Goft Estate, Haling Thar Yar Tsp, Yangon. (Head Office) </li>
                                <li><i class="fa fa-paper-plane-o"></i> No.22/B. 1st Floor, Thiri Myaing 4th Street, Hlaing Tsp, Yangon. (Branch Office) </li>
                                <li><i class="fa fa-phone"></i> <a href="tel:+959-899 3333 87">+959-799 3333 87</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:yourmail@gmail.com">zinlinn@scwmyanmar.com.mm</a></li>
                                {{-- <li><i class="fa fa-fax"></i> Fax: (123) 4589761</li> --}}
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
                        <p> &copy; 2021 SCW Myanmar CO., LTD. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area Section End Here -->

@endsection