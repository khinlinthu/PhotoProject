@extends('frontend')

@section('content')
<style>
    .userProfileImage {
        width: 120px!important;
        height: 120px!important;
        object-fit: cover;
    }

    .bgcolour{
        background: #d3d3d3;
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
                <div class="card" style="background-color: #606060;">
                    <div class="card-body">                                                           
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img class="rounded-circle userProfileImage" alt="User Image" src="{{Auth::user()->photo}}">
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name ">{{Auth::user()->name}}</h4>
                                <h6 class="">{{Auth::user()->email}}</h6>
                                <h6 class="">{{Auth::user()->phone}}</h6>
                                {{-- <h6 class="text-muted">{{Auth::user()->role}}</h6> --}}
                                
                            </div>
                            <div class="col-auto profile-btn">
                                <div class="col-xl-1 col-lg-1 col-md-12 col-sm-12 col-12 order-xl-3 order-lg-3 order-md-2 order-sm-2 order-2">
                                    <button class="btn btn-info float-right profile_editBtn" type="button"> 
                                        Edit Profile
                                    </button>
                                    {{-- <button class="btn btn-danger float-right profile_cancelBtn" type="button"> 
                                        <i class="fas fa-window-close"></i>
                                    </button> --}}
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
            <fieldset disabled>
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
    </div>
</div>
<!-- /Page Content -->

</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){

        $('.profile_editBtn').show();
        $('.profile_cancelBtn').hide();

        $('.profile_editBtn').on('click', function(){
            $("fieldset").removeAttr("disabled");
            $("#imageUpload").removeAttr("disabled");

            $('.profile_editBtn').hide();
            $('.profile_cancelBtn').show();

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