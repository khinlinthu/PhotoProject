@extends('frontend')

@section('content')

  <style >
      .size{
        height: 400px;
      }
      .bgcolour{
        background: #463E3F;
      }
      .heart {
      color: white;
      background-color: currentColor;
      display: inline-block;
      height: 50px;
      margin: 0 10px;
      position: relative;
      top: 0;
      transform: rotate(-45deg);
      position: absolute; 
      left: 45%; top: 45%;
      width: 50px;
    }

    .heart::before,
    .heart::after {
      content: "";
      background-color: currentColor;
      border-radius: 50%;
      height: 50px;
      position: absolute;
      width: 50px;
    }

    .heart:before {
      top: -25px;
      left: 0;
    }

    .heart:after {
      left: 25px;
      top: 0;
    }

    .heart:focus {
      color: red;
    }
    .heart_two{
      color: black;
      background-color: currentColor;
      display: inline-block;
      height: 50px;
      margin: 0 10px;
      position: relative;
      top: 0;
      transform: rotate(-45deg);
      position: absolute; 
      left: 45%; top: 45%;
      width: 50px;
    }
    .heart_two::before,
    .heart_two::after {
      content: "";
      background-color: currentColor;
      border-radius: 50%;
      height: 50px;
      position: absolute;
      width: 50px;
    }

    .heart_two:before {
      top: -25px;
      left: 0;
    }

    .heart_two:after {
      left: 25px;
      top: 0;
    }
    .heart_two:focus {
      color: black;
    }
  </style>
  

        <div class="blog-page-area pt-100 pb-100 bgcolour">
            <div class="container">
                <div class="row">
                  @foreach($image as $images)
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="single-blog-slide">
                            <div class="images">
                              
                                <a href="#"><img src="{{$images->image}}" alt="" class="size"></a>
                                {{-- <a class="heart" href="#"></a> --}}
                                <div class="overley">
                                  @if(Auth::user()->getRoleNames()[0]=="member")
                                  
                                  @forelse ($back_image as $bi)

                                    <ul>
                                      @if($bi->image_id ==$images->id and $bi->user_id == Auth::user()->id )
                                      <li><a href="#" class="heart_two"></a></li>
                                      @else
                                        <li><a class="heart" href="{{route('vot',['id'=>$images->id,'clicker'=>Auth::user()->id])}}"></a></li>
                                        
                                        @endif
                                    </ul>
                                  @empty
                                    <ul>
                                      <li><a href="{{route('vot',['id'=>$images->id,'clicker'=>Auth::user()->id])}}" class="heart"></a></li>
                                    </ul>
                                  @endforelse

                                  @endif
                                </div>
      
                              
                            </div>
                            
                        </div>
                    </div>
                  @endforeach  
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
                        <h3>ပြိုင်ပွဲဝင်များ</h3>
                        <p>ပြိုင်ပွဲဝင်များ ရိုက်ထားသောပုံများအား ပရိတ်သတ်များမှနေ၍ ကြိုက်နှစ်သက်ရာ ပုံများကို မဲပေး၍ ရွေးချယ်နိုင်ပါသည်။</p>
                        
                        <h3>အသင်းဝင်များ</h3>
                        <p>မိမိတို့ကြိုက်နှစ်သက်သောပြိုင်ပွဲဝင်များ၏ပုံများကို မိမိတို့စိတ်ကြိုက် အသင်းဝင်များမှ မဲပေးရွေးချယ်နိုင်ပါသည်။</p>
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
                        <h3>အကဲဖြတ်ဒိုင်လူကြီးများ</h3>
                        <p>ပြိုင်ပွဲဝင်များ ရိုက်ကူးထားသောပုံများကို လအလိုက်၊ နေရာအလိုက် အချိန်နှင့်တစ်ပြေးညီ ဖော်ပြထားပေးမှာဖြစ်ပြီး အကဲဖြတ်ဒိုင်များမှလည်း သေချာစီစစ်၍ အမှတ်ပေးသွားမည် ဖြစ်ပါသည်။</p>
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

  
   <script type="text/javascript">
     $( window ).load(function() {
  // Run code
});
   </script>

