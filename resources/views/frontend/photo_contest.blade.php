@extends('frontend')

@section('content')

	<!-- Slider Area Start Here-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{asset('frontend_asset/images/scw.png')}}" alt="" title="#slider-direction-1" />
                    <img src="{{asset('frontend_asset/images/scw.png')}}" alt="" title="#slider-direction-2" />
                </div>
                <!-- direction 2 -->
                {{-- <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1 uppercase"><span>Your Best</span> Photo Graphy Shop </h1>
                            <div class="slider-botton">
                                <ul>
                                    <li><a class="radius-0" href="shop.html">Shop Now <i class="fa fa-angle-right"></i></a></li>
                                    <li class="acitve"><a class="radius-0" href="about.html">About Us <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                direction 2
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1 uppercase"><span>Creative</span> Photo Graphy Agency</h1>
                            <div class="slider-botton">
                                <ul>
                                    <li class="acitve"><a class="radius-0" href="winners.html">More Details <i class="fa fa-angle-right"></i></a></li>
                                    <li><a class="radius-0" href="contact.html">Contact Us <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Slider Area End Here-->

        <!-- Home Page Shop Start Here -->
        <div class="related-winners-area home-shop pt-90 pb-90 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Our <span>Contests</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius.Photograhy HTML is very </p>
                        </div>
                    </div>
                </div>

                <div class="home-ralated">
                    <div class="single-shop-area">
                        @foreach($photoconests as $photocontest)
                        <div class="single-winners">
                            <div class="images">
                                <a href=""><img src="{{asset($photocontest->photo)}}" alt="" class="img-fluid" style="height: 250px;"></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                           <a href="{{route('photodetail',$photocontest->id)}}"> <li>{{$photocontest->name}}</li></a>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        
                            {{-- <h3><a href="product-details.html">Camera Lence</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li>
                                        <del>$150 </del> $120</li>
                                </ul>
                            </div> --}}
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Home Page Shop End Here -->            

        <!-- Home About Start Here -->
        <div class="home-about-area pt-100 pb-100 gray-bg">
            <div class="container">
                <div class="row">
                    @foreach($aboutphotos as $aboutphoto)
                    <div class="col-lg-6 col-md-12 mb-md-30">
                        <div class="about-content-area">
                            <div class="about-content-area">
                                <h2>{{$aboutphoto->name}}</h2>
                                <p>{{$aboutphoto->description}}</p>
                                <p class="hidden-sm">{{$aboutphoto->note}}</p>
                                {{-- <div class="botton-area">
                                    <a class="radius-0" href="about.html">About Us   <i class="fa fa-angle-right"></i> </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-featured-image">
                            <a href="about.html"><img src="{{asset($aboutphoto->photo)}}" alt="image"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Home About End Here -->

        <!-- Partner Logo Area Start Here -->
        <div class="fix client-logo-area pt-90 pb-90">
            <div class="container">
                <div class="client-logo">
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/4.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/5.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/6.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/7.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-logo">
                        <a href="#"><img src="{{asset('frontend_asset/images/client/3.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner Logo Area End Here -->

@endsection