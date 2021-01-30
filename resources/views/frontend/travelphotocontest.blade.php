@extends('frontend')

@section('content')

<style type="text/css">
	.img{
		border-width: 1px;   
        border-color: #F1C40F;   
        border-style: solid;
        height: 300px;
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
    .home-activities-area h3:hover{
        color: #FF0000;
    }
    .media-body h4:hover{
        color: #FF0000;
    }

	
</style>

		<!-- Slider Area Start Here-->
        <div class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="{{asset('frontend_asset/images/q.jpg')}}" alt="" title="#slider-direction-1" />
                    <img src="{{asset('frontend_asset/images/p.jpg')}}" alt="" title="#slider-direction-1" />
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Travel Photo Contest</h1>
                            <div class="slider-botton">
                                <ul>
                                    <li><a href="#headerone1">အထင်ကရနေရာများ</a></li>
                                    <li class="acitve"><a href="#headerone2">ယဥ်ကျေးမှုများ</a></li>
                                    <li><a href="#headerone3">ကိုယ်ပိုင်စိတ်ကြိုက်ဖန်တီးမှုများ</a></li>
                                    <li class="acitve"><a href="#headertwo">စည်းကမ်းချက်များ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- direction 2 -->
                {{-- <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1"><span>Creative</span> Photo Graphy Agency</h1>
                            <div class="title2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex quos aliquid laborum asperiores quidem, aliquam sunt expedita praesentium.</div>
                            <div class="slider-botton">
                                <ul>
                                    <li class="acitve"><a href="about.html">More Details <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="contact.html">Contact Us <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Slider Area End Here-->

        {{-- <section id="headerone"> --}}
		<div class="slider-bottom-area pt-100" style="background-color: #463E3F;">

            <div class="container">
                <div class="slider-bottom">
                    <div class="total-business">
                        <section id="headerone1">
                            <div class="single-business">
                                <h3><a href="#">အထင်ကရနေရာများ</a></h3>
                                <ul>
                                	<li style="color: #ffffff;">မိမိတို့ကြိုက်နှစ်သက်ရာမြို့များမှ အထင်ကရနေများ၏ ပုံများဖြင့် ပြိုင်ပွဲဝင်ရန်</li> 
                                </ul>
                                <img src="{{asset('frontend_asset/images/shwedagon.jpg')}}" class="mt-3 img">
                            </div>
                        </section>
                        <section id="headerone2">
                            <div class="single-business">
                                <h3><a href="#">ယဥ်ကျေးမှုများ</a></h3>
                                <ul>
                                	<li style="color: #ffffff;">မိမိတို့ကြိုက်နှစ်သက်ရာမြို့များမှ ယဥ်ကျေးမှုအမွေအနှစ်ပုံများဖြင့် ပြိုင်ပွဲဝင်ရန်</li>
                                </ul>
                                <img src="{{asset('frontend_asset/images/traditional.jpg')}}" class="mt-3 img">
                            </div>
                        </section>
                        <section id="headerone3">
                            <div class="single-business">
                                <h3><a href="#">ကိုယ်ပိုင်စိတ်ကြိုက်ဖန်တီးမှုများ</a></h3>
                                <ul>
                                	<li style="color: #ffffff;">မိမိတို့ ကြိုက်နှစ်ရာမြို့များမှ ပြိုင်ပွဲဝင်များအနေဖြင့် ကြိုက်နှစ်သက်ရာ ပုံများဖြင့် ပြိုင်ပွဲဝင်ရန်</li>
                                </ul>
                                <img src="{{asset('frontend_asset/images/it1.jpg')}}" class="mt-3 img">
                            </div>
                        </section>
                    </div>
                </div>

                <div class="row mt-3">
                	<div class="col-lg-12 col-md-12 col-sm-12">
                		<div class="section-title">
	                		<p style="color: #ffffff;">ပြိုင်ပွဲဝင်များသည် ဝင်ကြေးအနေဖြင့် ကျပ် ၁၁၀၀၀ ပေးရမည်ဖြစ်သည်။ ရာသီတစ်ခု၏ ဆုအနေဖြင့် $1000 ရရှိမှာဖြစ်ပီး ရာသီလေးခု ပြိုင်ရမည်ဖြစ်သည်။ ရာသီလေးခု အပြီးနောက်ဆုံးရာသီတွင် ဆုအနေဖြင့် $5000 နှင့် Sponsorship အား ရရှိမှာဖြစ်သည်။ </p>
	                		<h4>"သင်တို့၏အရည်ချင်းများဖြင့် မြန်မာနိုင်ငံ၏အလှအား ကမ္ဘာသိအောင် ပြလိုက်ကြပါစို့"</h4>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    	{{-- </section> --}}

        <!-- Home page core services start here -->
       <section id="headertwo">
        <div class="container-fluid acurate">
            <div class="home-page-core-activities-area">
                <div class="row acurate">
                    <div class="col-lg-6 col-md-12 acurate">
                        <img class="normal  img" src="{{asset('frontend_asset/images/11.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 acurate">
                        <div class="home-activities-area">
                            <h3 style="margin-top: 8px;">မြန်မာနိုင်ငံ၏ပထမဦးဆုံးသောခရီးသွားဓာတ်ပုံပြိုင်ပွဲများ</h3>

                            <div class="single-activities">
                                <div class="media">
                                    
                                    <div class="media-body">
                                       
                                        <h4 class="media-heading">{{-- <a href="#">Shop Intregated</a> --}}
                                            ပြိုင်ပွဲဝင်များလိုက်နာရန် စည်းကမ်းချက်များ
                                        </h4>
                                        <ul style="list-style-type:disc; color: #fff;">
                                            <li>ပြိုင်ပွဲဝင်များသည် Season တစ်ခုတွင် ကြိုက်နှစ်ရာ တိုင်းနှင့်ပြည်နယ် သုံးခုကို ရွေးချယ်၍ သွားရောက်ရမည်။
                                            </li>
                                            <li>Season တစ်ခုတွင် သုံးလသတ်မှတ်ထားသောကြောင့် တစ်လပြီးတစ်လ ခရီးသွား၍ ရိုက်ကူးရမည်ဖြစ်ပါသည်။ ရွေးချယ်ထားသောမြို့၏ ပုံများကို တစ်လတွင် သုံးပုံရိုက်ကူးရပါမည်။</li>
                                            <li>ထိုကဲ့သို့ ခရီးသွားရာတွင်လည်း SCW Travel & Tours တစ်ခုထဲကိုသာ မိမိတို့သွားလိုသော လေယာဥ်လက်မှတ်၊ ကားလက်မှတ်များနှင့် ဟိုတည်များကို အသုံးပြုရမည်ဖြစ်သည်။</li>
                                            <li>ထိုကဲ့သို့ အသုံးပြုရာတွင် SCW Travel မှ ပြိုင်ပွဲဝင်များအတွက် 50% အားလျှော့ပေးမည် ဖြစ်သည်။</li>
                                            <li>ပြိုင်ပွဲဝင်များသည် ပြိုင်ပွဲဝင်သည်နှင့်တပြိုင်နက် SCW Travel & Tours ၏ ကျန်းမားရေးဌာနမှ COVID-19 စစ်ဆေးမှုများကိုပြုလုပ်သွားမည်ဖြစ်သည်။</li>
                                            <li>ပြိုင်ပွဲဝင်များသည် SCW Travel နှင့် ပြိုင်ပွဲ၏ဒိုင်များမှ ချမှတ်ထားသော စည်းကမ်းချက်များကို လိုက်နာရမည်ဖြစ်သည်။</li>
                                            <li>ပြိုင်ပွဲအတွင်း ကိစ္စ တစုံတရာရှိလာပါက SCW Travel ၏ ဆုံးဖြတ်ချက်များသာ အတည်ဖြစ်ပါသည်။</li>
                                        </ul>
                                        @if(Auth::check())
                                        <a href="{{route('vote')}}"><button type="button" class="btn mt-4">ဝင်ရောက်ရန်</button></a>
                                        @else
                                        <a href="/signin"><button type="button" class="btn mt-4">ဝင်ရောက်ရန်</button></a>
                                        @endif

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