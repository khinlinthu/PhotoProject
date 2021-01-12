@extends('frontend')

@section('content')

<style >
    .reg{
        margin-left: 330px;
    }
    .bgcolour{
        background: #d3d3d3;
    }
</style>

<!-- Page Content -->
<div class="loginregistration-area pt-100 pb-100 bgcolour">
        <div class="container">
                <div class="row">
    				<div class="col-lg-6 col-md-6 col-sm-12 reg">
                        <div class="registration-area">
                            <h2>Registration</h2>
                            <div class="login-header">
                                    <h3><span class="text-muted">PhotoContest | </span>Member Register {{-- <br><a
                                            href="{{ route('user.player') }}">Are you a Player?</a> --}}
                                    </h3>
                                </div>
                            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                <fieldset>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Photo *</label>
                                            <input type="file" name="photo" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="user" class="label">Username *</label>
                                            <input id="user" type="text" class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                <div class="form-control-feedback text-danger">
                                                  {{$errors->first('name')}}
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="label">Email *</label>
                                            <input id="pass" type="text" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                <div class="form-control-feedback text-danger">
                                                  {{$errors->first('email')}}
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password" class="label">Password *</label>
                                            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" data-type="password" name="password" required>
                                                <div class="form-control-feedback text-danger">
                                                  {{$errors->first('password')}}
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password-confirm" class="label">Confirm Password *</label>
                                            <input id="cpassword" type="password" class="input form-control" data-type="password" name="cpassword" required>
                                            <span id="cerror"></span>
                                        <span class="text text-danger">{!! session()->get('error') !!}</span>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group form-focus">
                                        <label class="focus-label">Mobile Number *</label>
                                        <input type="text" name="phone" class="form-control floating"
                                            value="{{ old('phone') }}">                                       
                                        @error('phone')
                                            <span class="text text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">Member</button>
                                           
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Page Content -->

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

    @section('script')
    <script>
        //password validate
        $("#password, #cpassword").on("keyup", function() {
            if ($("#password").val() == $("#cpassword").val()) {
                $("#cerror").html("Match").css("color", "green");
            } else
                $("#cerror").html("Not Match").css("color", "red");
        });

    </script>
@endsection