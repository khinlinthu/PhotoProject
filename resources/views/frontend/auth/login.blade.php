@extends('frontend')

@section('content')

<style >
    .reg{
        margin-left: 330px;
    }
    .bgcolour{
        background: #808080;
    }
    .col-lg-6,.col-md-6,.col-sm-12{
        padding-left: 0;
        padding-right: 0;
    }

    .alink{
        color: #000000;
    }

    .alink:hover {
        color: red;
    }
</style>

<div class="loginregistration-area pt-100 pb-100 bgcolour">
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 mb-sm-15 ">
                        <div class="login-area">
                            <h2>Login</h2>
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <fieldset>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            <div class="form-control-feedback text-danger">
                                                {{$errors->first('email')}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password" class="label">{{ __('Password') }}</label>
                                            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" data-type="password" name="password" required autocomplete="current-password">

                                            <div class="form-control-feedback text-danger">
                                              {{$errors->first('password')}}
                                        </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                                <div class="checkbox">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember" style="margin-left: 30px;">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">{{ __('Login') }}</button>
                                            <div class="text-center dont-have">
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link alink" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif 
                                                <a class="alink" href="{{ route('user.create') }}" style="font-size: 20px;">|&nbsp Register</a>
                                            </div>
                                        	</div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                       <div>
                           <img src="{{asset('frontend_asset/images/inle3.jpg')}}">
                       </div>
                    </div>
                </div>
            </div>
        </div>


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
                        <p> &copy; 2021 SCW Myanmar CO., LTD. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area Section End Here -->

@endsection