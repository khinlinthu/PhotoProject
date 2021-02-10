@extends('frontend')

@section('content')

<style>
    .userProfileImage {
        width: 140px!important;
        height: 140px!important;
        object-fit: cover;
        margin-left: 100px;
    }

    .userimg{
        width: 1000px;
        height: 400px;
        border-width: 1px;   
        border-color: #F1C40F;   
        border-style: solid;
       /* margin-left: 20px;
        margin-right: 20px;*/
    }

    .img{
        width:auto;
        height:auto;
        border-width: 1px;   
        border-color: #F1C40F;   
        border-style: solid;
        margin-left:340px;
    }

    .bgcolour{
        background: #463E3F;
    }

    .card{
        background-color: #606060;
        color: #000;
        /*width: 97%;*/
        margin-left: 20px;
    }

    .hovereffect {
      width: 100%;
      height: 100%;
      float: left;
      overflow: hidden;
      position: relative;
      text-align: center;
      cursor: default;
    }

    .hovereffect .overlay {
      position: absolute;
      overflow: hidden;
      width: 80%;
      height: 80%;
      left: 10%;
      top: 10%;
      border-bottom: 1px solid #FFF;
      border-top: 1px solid #FFF;
      -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
      transition: opacity 0.35s, transform 0.35s;
      -webkit-transform: scale(0,1);
      -ms-transform: scale(0,1);
      transform: scale(0,1);
    }

    .hovereffect:hover .overlay {
      opacity: 1;
      filter: alpha(opacity=100);
      -webkit-transform: scale(1);
      -ms-transform: scale(1);
      transform: scale(1);
    }

    .hovereffect img {
      display: block;
      position: relative;
      -webkit-transition: all 0.35s;
      transition: all 0.35s;
    }

    .hovereffect:hover img {
      filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
      filter: brightness(0.6);
      -webkit-filter: brightness(0.6);
    }

    .hovereffect h2 {
      text-transform: uppercase;
      text-align: center;
      position: relative;
      font-size: 25px;
      background-color: transparent;
      color: #FFF;
      padding: 3em 0;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
      transition: opacity 0.35s, transform 0.35s;
      -webkit-transform: translate3d(0,-100%,0);
      transform: translate3d(0,-100%,0);
    }

    .hovereffect a, .hovereffect p {
      color: #FFF;
      padding: 1em 0;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
      transition: opacity 0.35s, transform 0.35s;
      -webkit-transform: translate3d(0,100%,0);
      transform: translate3d(0,100%,0);
    }

    .hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
      opacity: 1;
      filter: alpha(opacity=100);
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0);
    }

    .imgrow{
        width: 100%;
        padding-right: 25px;
        padding-left: 25px;
        margin-right: auto;
        margin-left: auto;
    }
</style>
    <div class="inner-page-header bgcolour">
        <div class="container-fluid">
            <div class="card">
                {{-- <div class="card-body"> --}}
                    @foreach($test as $detail)
                    <div class="row mt-5 mb-3">
                        <div class="col-md-12 col-lg-6">  <!-- <div class="row align-items-center"> -->
                            <div class="profile-image">
                                     <img class="rounded-circle userProfileImage" alt="User Image" src="{{$detail->photo}}"> 
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                                <h4 class="user-name "><label>User Name : &nbsp </label>{{$detail->name}}</h4>
                                <h5 class=""><label>Email : &nbsp</label>{{$detail->email}}</h5>
                                <h5 class=""><label>Phone Number : &nbsp</label>{{$detail->phone}}</h5>
                                {{-- <h6 class="text-muted">{{auth()->user()->getRoleNames()[0]=="member" OR "player"}}</h6> --}}
                                
                        </div>
                            
                    {{-- </div>     --}}
                </div>
            </div>
             @endforeach

             <div class="row mt-5 imgrow">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3 mt-3">
                    
                        <img class="img-responsive img" src="{{asset($query->image)}}" alt="">
                  

                </div>
             </div>
                    
            <div class="row mt-3 imgrow">
                @foreach($images as $row)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-3">
                    <div class="hovereffect">
                        <img class="img-responsive userimg" src="{{asset($row->image)}}" alt="">
                    <div class="overlay">
                        <h2>{{$row->name}}</h2>
               <!-- <a class="info" href="#"></a> -->
                    </div>
                    </div>

                </div>
                @endforeach           
            </div>

            <div class="row justify-content-center">
              {{ $images->links()}}
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