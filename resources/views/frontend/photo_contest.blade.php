@extends('frontend')

@section('content')

	    <!-- Slider Area Start Here-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{asset('frontend_asset/images/m1.jpg')}}" alt="" title="#slider-direction-1" />
                    <img src="{{asset('frontend_asset/images/m2.jpg')}}" alt="" title="#slider-direction-2" />
                    {{-- <img src="{{asset('frontend_asset/images/3.jpg')}}" alt="" title="#slider-direction-3" /> --}}
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1"><span>Myanmar Photography</span></h1>
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
                            <h1 class="title1"><span>International Photography</span></h1>
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
                            <h3><a href="#">ပြခန်း</a></h3>
                            <p>အသင်းဝင်များနှင့် ပြိုင်ပွဲဝင်များအားလုံးမှ တင်ထားသောဓာတ်ပုံများကို အောက်ဖော်ပြပါနေရာတွင် ဝင်ရောက် ကြည့်ရှုရန်…</p>
                            <div class="read-more"><a href="/photo">Read More</a></div>
                        </div>
                        <div class="single-business">
                            <i class="fa fa-trophy"></i>
                            <h3><a href="#">ပြိုင်ပွဲ</a></h3>
                            <p>ဓါတ်ပုံပြိုင်ပွဲဝင်များမှ Season အလိုက် ပြိုင်ပွဲအမျိုးအစားနှင့် ပြိုင်ပွဲဝင်ဓါတ်ပုံများကို အောက်ဖော်ပြပါနေရာတွင် ဝင်ရောက်ကြည့်ရှုရန်…</p>
                            <div class="read-more"><a href="{{route('travel')}}">Read More</a></div>
                        </div>
                        <div class="single-business">
                            <i class="fa fa-play-circle-o"></i>
                            <h3><a href="#">တိုက်ရိုက်ထုတ်လွင့်မှု</a></h3>
                            <p>ပြိုင်ပွဲများနှင့် ပြိုင်ပွဲဝင်များ၏ ရမှတ်ဇယား၊ ပရိတ်သတ်များ၏ Voting ဇယားများ နှင့် ဒိုင်များ၏အမှတ်ပေး စာရင်းများကို အောက်ဖော်ပြပါနေရာတွင် ဝင်ရောက်ကြည့်ရှုရန်</p>
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
                            <p>ပြည်နယ်နှင့်တိုင်း (၁၅) ခုမှ မိမိတို့နှစ်သက်ရာ မြို့ (၃) မြို့သို့သွားရောက်ကာ ရိုက်ကူးယှဉ်ပြိုင်ရမည်။ သဘာဝ(nature)၊ အထင်ကရ(landmarks)၊ ယဉ်ကျေးမှု(culture) စသည်ဖြင့် မိမိတို့၏ ကိုယ်ပိုင် အရည်အချင်း များဖြင့် လွတ်လပ်စွာ ဖန်တီးရိုက်ကူးပြီး တစ်မြို့လျှင် ပုံ(၃)ပုံ၊ သုံးမြို့ပေါင်းအတွက် ပုံ(၉)ပုံး ပေးပို့ယှဉ်ပြိုင်ရမည် ဖြစ်ပါသည်။ စမှတ်ကို ကြိုတင်မသတ်မှတ်ထားသောကြောင့် မိမိတို့နေထိုင်ရာမြို့ (သို့မဟုတ်) ကြိုက်နှစ် သက်ရာ မြို့မှ စ၍ စတင်ကာစာရင်းပေးသွင်းပြီး ပြိုင်ပွဲကိုဝင်ရောက်ယှဉ်ပြိုင်နိုင်ပါမည်။ ပြိုင်ပွဲကာလအား Season တစ်ခုတွင် (၃)လ သတ်မှတ်ထားပြီး မိမိတို့ကြိုက်နှစ်သက်ရာ ပြည်နယ် နှင့် တိုင်း များထဲမှ (၃)မြို့ကိုရွေးချယ်ကာ ပြည်နယ် (သို့မဟုတ်) တိုင်း တစ်ခုစီတိုင်းအတွက် အချိန် (၁)လ ရရှိမည်ဖြစ်ပါသည်။ ထိုကဲ့သို့ပေးထားသော အချိန်တစ်လအတွင်း မိမိတို့ဆန္ဒရှိသည့် အချိန်နှင့်ရက်များတွင် သွားရောက်ရိုက်ကူးကာ ပြိုင်ပွဲမှသတ်မှတ်ထားသောရက်ထက်နောက်မကျဘဲပေးပို့ရပါမည်။ မိမိတို့စမှတ်ကို အတည်ပြုပြီးသည်နှင့် တစ်ပြိုင်နက် သွားရောက်ရိုက်ကူးမည့်မြို့များအတွက် ခရီးစဉ်လမ်းကြောင်းများကို (၁၅) ရက်ကြိုတင်ပေးပို့ရမည်ဖြစ်သည်။ (SCW 50%...)</p>
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
                        <h3>SCW MYANMAR</h3>
                        <p>SCW Myanmar သည် မြန်မာနိုင်ငံသား ပုဂ္ဂလိကပိုင် အဖြစ်တည်ထောင်ထားသော Portal တစ်ခုဖြစ်ပါသည်။ နောင်တွင်လည်း မြန်မာနိုင်ငံ ဓါတ်ပုံပညာရှင်များ၏ ပင်ကိုယ်အရည်အချင်များဖြင့် ပုံဖော်ရိုက်ကူးထားသော ဂုဏ်ယူဝင့်ကြွားစွာလှပနေသော မြန်မာ့အလှအပဓါတ်ပုံများကို နိုင်ငံတကာသို့ ထိုးဖောက်နိုင်ရန် ရည်ရွယ်ပါသည်။ ထိုကဲ့သို့ရည်ရွယ်ချက်များကို နိုင်ငံတကာမှသိမြင်နိုင်စေရန်အတွက်လည်း အောက်ပါ Linkများနှင့် ချိတ်ဆက်ထားပါသည်။</p>
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
                        <h3>SCW TRAVEL</h3>
                        <p>SCW Travel သည် မြန်နိုင်ငံသား ပုဂ္ဂလိကပိုင် ကုမ္ပဏီအဖြစ် တည်ထောင်ထားသော ခရီးသွားလုပ်ငန်းတစ်ခုဖြစ် ပါသည်။ နိုင်ငံတကာလေကြာင်းများ၊ ပြည်တွင်းလေကြောင်းလိုင်များ၊ ဟိုတယ်များ၊ ကားများ နှင့် ခရီးသွားဆိုင်ရာ ဝန်ဆောင်မှုများကို တစ်နေရာထဲတွင် ရရှိနိုင်သော ကုမ္ပဏီတစ်ခုဖြစ်ပါသည်။ ခရီးသွားလုပ်ငန်များကို အရှိန်အဟုန်ပြင်းစွာ လည်ပတ်နိုင်ရန်အတွက် များစွာသောရည်ရွယ်ချက်များဖြင့် တည်ထောင်ထားသော ကုမ္ပဏီတစ်ခုဖြစ်ပါသည်။</p>
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
                        <h3>ဆက်သွယ်ရန်</h3>
                        <nav>
                            <ul>
                                <li><i class="fa fa-paper-plane-o"></i>အမှတ် ၂၅၊ ဆင်စွယ် လမ်း၊ ပန်းလှိုင်ဂေါက်ကွင်းအိမ်ရာ၊ လှိုင်သာယာမြို့နယ်၊ ရန်ကုန်တိုင်းဒေသကြီး (ရုံးချုပ်)</li>
                                <li><i class="fa fa-paper-plane-o"></i>အမှတ် ၂၂ (ဘီ-ပထမထပ်)၊ သီရိမြိုင်(၄)လမ်း၊ လှိုင်မြို့နယ်၊ ရန်ကုန်တိုင်းဒေသကြီး (ရုံးခွဲ)</li>
                                <li><i class="fa fa-phone"></i> <a href="tel:+959-899 3333 87">၀၉ ၈၉၉ ၃၃၃ ၃၈၇</a></li>
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