@extends('frontend')

@section('content')

	    <!-- Slider Area Start Here-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{asset('frontend_asset/images/x0.jpg')}}" alt="" title="#slider-direction-1" />
                    <img src="{{asset('frontend_asset/images/x1.jpg')}}" alt="" title="#slider-direction-2" />
                    {{-- <img src="{{asset('frontend_asset/images/3.jpg')}}" alt="" title="#slider-direction-3" /> --}}
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1"><span>Your Best</span> Photography Shop</h1>
                            <div class="slider-botton">
                                <ul>
                                    <li class="acitve"><a href="/photo">View Now <i class="fa fa-angle-right"></i></a></li>
                                    @if(Auth::check())
                                    <li><a href="{{route('vote')}}">Photo Contest <i class="fa fa-angle-right"></i></a></li>
                                    @else
                                    <li><a href="/signin">Photo Contest<i class="fa fa-angle-right"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1"><span>Creative</span> Photo Graphy Agency</h1>
                            <div class="slider-botton">
                                <ul>
                                    <li class="acitve"><a href="#">More Details <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Contact Us <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Slider Area End Here-->


        <!-- Slider Bottom area start  here --> 
        <div class="slider-bottom-area pt-100 pb-90" style="background-color: #463E3F;">
            <div class="container">
                <div class="slider-bottom">
                    <div class="total-business">
                        <div class="single-business">
                            <i class="fa fa-camera-retro"></i>
                            <h3><a href="#">Gallery</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo, enim odit</p>
                            <div class="read-more"><a href="/photo">Read More</a></div>
                        </div>
                        <div class="single-business">
                            <i class="fa fa-trophy"></i>
                            <h3><a href="#">Contest</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo, enim odit</p>
                            <div class="read-more"><a href="{{route('travel')}}">Read More</a></div>
                        </div>
                        <div class="single-business">
                            <i class="fa fa-play-circle-o"></i>
                            <h3><a href="#">Live Announcement</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet non ducimus hic vel minus numquam neque iusto, expedita nemo, enim odit</p>
                            <div class="read-more"><a href="{{route('live')}}">Read More</a></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Bottom area end  here -->

        <!-- Home Page Shop Start Here -->
        <div class="related-winners-area home-shop pt-90 pb-90" style="background-color: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Our <span>Contests</span></h2>
                            <p>ပြည်နယ်/တိုင်း (၁၅)ခုမှ မိမိတို့နှစ်သစ်ရာ (၃)ခုသို့ သွားရောက်ကာ ရိုက်ကူးယှဉ်ပြိုင်ရမည်။ သဘာဝ (nature)၊ အထင်ကရ (landmark)၊ ယဉ်ကျေးမှု (culture) ဖြင့် ပုံမှန် သမာရိုးကျမဟုတ်ဘဲ လွတ်လပ်စွာ ဖန်တီးရိုက်ကူးကာ တစ်မျိုးလျှင် (၃)ပုံ၊ စုစုပေါင်း (၉)ပုံ ပေးပို့ကာ ယှဉ်ပြိုင်ရမည်။ စမှတ်ကို ကြိုတင်မသတ်မှတ်ထားသောကြောင့် မိမိတို့နေထိုင်ရာပြည်နယ်/တိုင်းမှ စတင်ကာ စာရင်းပေးသွင်းပြီး ပြိုင်ပွဲကို စတင်ယှဉ်ပြိုင်နိုင်ပါမည်။ ပြိုင်ပွဲကာလအား Season တစ်ခုလျှင် ကနဦး (၉၀)ရက် သတ်မှတ်ထားပြီး ပြည်နယ်/တိုင်း (၁၅)ခုတွင် မိမိတို့နှစ်သက်ရာ (၃)ခုကို ရွေးချယ်ကာ ပြည်နယ်(သို့)တိုင်း တစ်ခုစီတိုင်းအတွက် (၃၀)ရက်ရရှိမည်။ ထိုအချိန်ရက် (၃၀)အတွင်း မိမိတို့နှစ်သက်ရာ ရက်/အချိန်တွင် သွားရောက်ရိုက်ကူးနီုင်ပြီး သတ်မှတ်ရက်ထက် နောက်မကျဘဲပေးပို့နိုင်သည်။ မိမိတို့စမှတ်ကို အတည်ပြုပြီးသည်နှင့်တစ်ပြိုင်နှက် ခရီးလမ်းကြောင်းအား ရေးဆွဲပေးမည်ဖြစ်ပီး ပြိုင်ပွဲအတွင်း ခရီးသွားကုန်ကျစရိတ်အား S.C.W TRAVEL မှ ၅၀% ကျခံပေးသွားမည်ဖြစ်ပါသည်။</p>
                        </div>
                    </div>
                </div>

                
                <div class="home-ralated">
                    <div class="single-shop-area">
                        {{-- @php $i=1; @endphp --}}
                        {{-- @foreach($photoconests as $photocontest) --}}
                        <div class="single-winners">
                            <div class="images">
                                {{-- <a href=""><img src="{{asset($photocontest->photo)}}" alt="" class="img-fluid" style="height: 250px;"></a> --}}
                                <a href=""><img src="{{asset('frontend_asset/images/taunggyi.jpg')}}" alt="" class="img-fluid" style="height: 250px;"></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                           {{-- <a href="{{route('photodetail',$photocontest->id)}}"> <li>{{$photocontest->name}}</li></a> --}}
                                            
                                            <a href="{{route('travel')}}"> <li>Season One</li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                        <div class="single-winners">
                            <div class="images">
                                <a href=""><img src="{{asset('frontend_asset/images/inle.jpg')}}" alt="" class="img-fluid" style="height: 250px;"></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                           <a href="#"> <li>Season Two</li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-winners">
                            <div class="images">
                                <a href=""><img src="{{asset('frontend_asset/images/inle1.jpg')}}" alt="" class="img-fluid" style="height: 250px;"></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                           <a href="#"> <li>Season Three</li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-winners">
                            <div class="images">
                                <a href=""><img src="{{asset('frontend_asset/images/inle3.jpg')}}" alt="" class="img-fluid" style="height: 250px;"></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                           <a href="#"> <li>Season Four</li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-winners">
                            <div class="images">
                                <a href=""><img src="{{asset('frontend_asset/images/GIC.jpg')}}" alt="" class="img-fluid" style="height: 250px;"></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">     
                                            <a href="#"> <li>Final</li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Home Page Shop End Here -->            

        <!-- Home About Start Here -->
        <div class="home-about-area pt-100 pb-100" style="background-color: #463E3F;">
            <div class="container">
                <div class="row">
                    @foreach($aboutphotos as $aboutphoto)
                    <div class="col-lg-6 col-md-12 mb-md-30">
                        <div class="about-content-area">
                            <div class="about-content-area">
                                <h2>{{$aboutphoto->name}}</h2>
                                <p>{{$aboutphoto->description}}</p><br>
                                <h5 class="hidden-sm"><i class="fa fa-calendar"></i>&nbsp : &nbsp{{$aboutphoto->note}}</h5>
                                {{-- <div class="botton-area">
                                    <a class="radius-0" href="about.html">About Us   <i class="fa fa-angle-right"></i> </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="about-featured-image">
                            <a href="#"><img src="{{asset($aboutphoto->photo)}}" alt="image"></a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Home About End Here -->

        <!-- Partner Logo Area Start Here -->
        <div class="fix client-logo-area pt-90 pb-90" style="background-color: #D3D3D3;">
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
                                    {{-- <li><a href="#"><i class="fa fa-rss"></i></a></li> --}}
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
                        <h3>Sponsorship</h3>
                        <ul>
                            <li>
                                <a href="#"><img src="{{asset('frontend_asset/sponsorimages/AYA Bank.jpg')}}" alt="flicker photo" style="width: 100px; height: 80px;border-width: 1px; border-color: #F1C40F; border-style: solid;"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend_asset/sponsorimages/CB bank.png')}}" alt="flicker photo" style="width: 100px; height: 80px; border-width: 1px; border-color: #F1C40F; border-style: solid;"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend_asset/sponsorimages/MCB Bank.jpg')}}" alt="flicker photo" style="width: 100px; height: 80px; border-width: 1px; border-color: #F1C40F; border-style: solid;"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend_asset/sponsorimages/myanmar_tourism_bank.jpg')}}" alt="flicker photo" style="width: 100px; height: 80px; border-width: 1px; border-color: #F1C40F; border-style: solid;"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend_asset/sponsorimages/Myanmr Apex Bank.png')}}" alt="flicker photo" style="width: 100px; height: 80px; border-width: 1px; border-color: #F1C40F; border-style: solid;"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('frontend_asset/sponsorimages/Shwe Bank.jpg')}}" alt="flicker photo" style="width: 100px; height: 80px; border-width: 1px; border-color: #F1C40F; border-style: solid;"></a>
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
                        <p style="color: #000;"> &copy; 2021 SCW Myanmar CO., LTD. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area Section End Here -->

@endsection