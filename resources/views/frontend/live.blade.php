@extends('frontend')

@section('content')
<style >
  .tlive{
    background-color: #696C6D;
    color: #ffffff;
    border-radius: 15px;
    border-collapse: collapse;
    color: #000000;
    font-size: 20px;
  }

  tr:hover {background-color: #EDEADF ;}
  /*tr:nth-child(even) {background-color: #f2f2f2;}*/

  th {
  background-color: #1F1B0D;
  color: white;
}

  .colname{
    color: #000000;
    font-weight: bolder;
    font-size: 25px;
  }

  .bgcolour{
        background: #d3d3d3;
  }

</style>
 <div class="inner-page-header bgcolour">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
   <table class="table table-striped pt-90 pb-100 tlive ">
  <thead>
    @php
       $num = 1;
    @endphp
    <tr class="colname">
      <th scope="col">No</th>
      <th scope="col">Player Name</th>
      <th scope="col">Photo</th>
      <th scope="col">Counts</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($live as $lives)
    <tr>
      <td scope="row">{{ $num++ }}</td>
      <td>{{$lives->name}}</td>
      <td><img src="{{$lives->image}} " style="width: 100px; height: 100px;"></td>
      <td>{{$lives->user_count}}</td>
     
    </tr>
    
   @endforeach
  </tbody>
</table>
</div>
  <div class="col-lg-6 col-md-6 col-sm-12">
   <table class="table table-striped pt-90 pb-100">
  <thead>
    {{-- @php
       $num = 1;
    @endphp --}}
    <tr class="colname">
      <th scope="col">No</th>
      <th scope="col">Player Name</th>
      <th scope="col">Result</th>
      <th scope="col">Remark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mg Ye</td>
      <td>QQQQQ</td>
      <td>200</td>
    </tr>
  </tbody>
</table>
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
                        <h3>ဒိုင်များ၏အမှတ်ပေးရွေးချယ်မှု</h3>
                        <p>ပြိုင်ပွဲကာလအတွင်း ပြိုင်ပွဲဝင်ထားသောပုံများကို ဒိုင်များမှ online ကနေ တိုက်ရိုက်တင်ပြခြင်းဖြင့် အမှတ်ပေးရွေးချယ်သွားမှာ ဖြစ်ပါတယ်။</p>
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
                        <h3>ပရိတ်သတ်များ၏အမှတ်ပေးရွေးချယ်မှု</h3>
                        <p>ပြိုင်ပွဲဝင်များ၏ ပြိုင်ပွဲဝင်ထားသောပုံများကို ပရိတ်သတ်များမှ voting စနစ်ဖြင့်ရွေးချယ်နေသည်ကို online မှ တိုက်ရိုက်ထုတ်လွှင့် ပြသသွားမည် ဖြစ်ပါသည်။</p>
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