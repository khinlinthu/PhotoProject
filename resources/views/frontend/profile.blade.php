@extends('frontend')

@section('content')
<style>
    .userProfileImage {
        width: 120px!important;
        height: 120px!important;
        object-fit: cover;
    }

    
    .userProfileImage {
        width: 140px!important;
        height: 140px!important;
        object-fit: cover;
        margin-left: 100px;
    }

    .userimg{
        width: 800px;
        height: 400px;
        border-width: 1px;   
        border-color: #F1C40F;   
        border-style: solid;
    }

    .bgcolour{
        background: #000000;
    }

    .card{
        background-color: #606060;
        color: #000;
        /*width: 97%;*/
        margin-left: 20px;
    }

    .button {
        background-color: #000000;
        border: none;
        color: #fff;
        padding: 7px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-width: 1px;   
        border-color: #F1C40F;   
        border-style: solid;
        border-radius: 30px;
    }

    .button:hover {
        background-color: red;
        border: none;
        color: black;
        padding: 7px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-width: 1px;   
        border-color: #F1C40F;   
        border-style: solid;
        border-radius: 30px;
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
    }

</style>

<div class="inner-page-header bgcolour">
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('photo_contest')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">User Profile</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->
<!-- Page Content -->
<div class="content">
    <div class="container">
        {{-- profile card --}}
        <div class="row">
            <div class="col-md-12 col-lg-12">
                {{-- flash back message start--}}
            @if (!empty(session()->get('success')))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong class="mr-1">Update Success !</strong>{!! session()->get('error') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            {{-- flash back message end--}}
                <div class="card" style="background-color: #606060;">
                    <div class="card-body">                                                           
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle userProfileImage" alt="User Image" src="{{Auth::user()->photo}}">
                                </a>
                            </div>
                            @foreach($role as $roles)
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name ">{{Auth::user()->name}}</h4>
                                <h6 class="">{{Auth::user()->email}}</h6>
                                <h6 class="">{{Auth::user()->phone}}</h6>
                                <h6 class="">{{$roles->name}}</h6>
                                
                            </div>
                            @endforeach
                            <div class="col-auto profile-btn">
                                <div class="col-xl-1 col-lg-3 col-md-12 col-sm-12 col-12 order-xl-3 order-lg-3 order-md-2 order-sm-2 order-2">
                                    <button class="btn btn-info float-right profile_editBtn" type="button" style="margin-right: 15px;"> 
                                        Edit Profile
                                    </button>
                                    <button class="btn btn-info" type="button"> 
                                        <i class="fas fa-window-close"></i><a href="{{route('uploadpage')}}" style="color: white;">+upload </a>  
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- profile card --}}

        {{-- edit profile  --}}
        <div class="col-md-10 offset-md-1 mt-5 ">
            
            <fieldset disabled class="dis">
                <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input name="oldphoto" type="hidden" value="{{Auth::user()->photo}}">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input name="photo" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" disabled="" data-user_id = "" multiple />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-1" for="inputName"> Name</label>
                                <input name="name" class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" value="{{Auth::user()->name}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small mb-1" for="phone">Phone Number</label>
                                <input name="phone" class="form-control py-4" id="phone" type="text" placeholder="Enter Phone Number" value="{{Auth::user()->phone}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" value="{{Auth::user()->email}}"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group hideForm d-flex align-items-center justify-content-between mt-4 mb-0">
                        <button type="submit" class="btn btn-outline-primary"> Save </button>
                    </div>
                </form>
            </fieldset>
        </div>
        {{-- edit profile  --}}

        <div class="col-md-12 col-lg-12">
            <div class="row mt-5 imgrow">
                @foreach($query as $row)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-3">
                    <div class="hovereffect">
                        <img class="img-responsive userimg" src="{{asset($row->image)}}" alt="">
                        <div class="overlay">
                            <h2>{{$row->name}}</h2>
                            <button class="button"><a href="{{route('deleteimage',$row->id)}}" >Delete</a></button>
                        </div>
                    </div>
                </div>
                @endforeach           
            </div>
        </div>

        <div class="row justify-content-center">
            {{ $query->links()}}
        </div>
    </div>
</div>
<!-- /Page Content -->

</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){

        // $('.profile_editBtn').show();
        // $('.profile_cancelBtn').hide();
         $('fieldset').hide();

        $('.profile_editBtn').on('click', function(){
            $("fieldset").removeAttr("disabled");
            $("#imageUpload").removeAttr("disabled");

            $('.profile_editBtn').hide();
            $('.profile_cancelBtn').show();

            $('fieldset').show();

        });

        $('.profile_cancelBtn').on('click', function(){
            $('#imageUpload').prop('disabled', true);
            $('fieldset').prop('disabled', true);


            $('.profile_editBtn').show();
            $('.profile_cancelBtn').hide();

        });
    });
</script>
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