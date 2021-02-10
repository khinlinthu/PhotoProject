@extends('frontend')

@section('content')
        

        <!-- Inner Page Header serction start here -->
        <div class="inner-page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-title">
                            <h2>Upload Your Photo</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="header-page-locator">
                            <ul>
                                <li><a href="index.html">Home /</a> Upload Photo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Header serction end here -->

        <!-- Multistep Form Start Here -->
        <div class="multistep-form pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!-- multistep form -->
                        <form class="regform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active">Upload Photo Informations</li>
                                <li>Preview Details Again</li>
                                <li>Terms and Conditions</li>
                                <li>Status </li>
                            </ul>
                            <!-- fieldsets -->
                            
                            <fieldset id="first">

                                <form action="/image1" enctype="multipart/form-data" method="POST">
                                    @csrf
                                <h2 class="title">Upload Photo Informations</h2>
                                <select class="options">
                                    <option>--Select Category--</option>
                                    <option>Photo Contest</option>
                                </select>
                                <br/>
                                <input type="text" class="text_field" name="name" placeholder="Your Photo Name" />
                                <br/>
                                <input type="text" class="text_field" name="size" placeholder="Photo Size" />
                                <br/>
                                <input type="text" class="text_field" name="color" placeholder="Photo Color" />
                                <br/>
                                <input type="file" class="text_field" name="image[]" multiple accept="image/*" />
                                <br/>
                                <textarea name="textarea" cols="30" rows="10" placeholder="Photo Upload"></textarea>
                                <input type="button" name="previous" class="pre_btn" value="< Back" />
                                <input type="button" name="next" class="next_btn" value="Next >" />
                            </fieldset>
                            <fieldset>
                                <h2 class="title">Preview Details Again</h2>
                                <ul id="preview">
                                    <li><img src="images/preview.jpg" alt=""></li>
                                    <li><span>Name :</span> John Deo</li>
                                    <li><span>E-mail :</span> johndeo@gmail</li>
                                    <li><span>Photo Name :</span> Natural Photo for Photo Grapher</li>
                                    <li><span>Photo Category :</span> Natural Photo</li>
                                    <li><span>Photo Size :</span> 1920x7000</li>
                                    <li><span>Photo Nature :</span> HD</li>
                                    <li><span>Photo Color :</span> Dark</li>
                                    <li><span>Photo Status :</span> Publish</li>
                                </ul>
                                <input type="button" name="previous" class="pre_btn" value="< Back" />
                                <input type="button" name="next" class="next_btn" value="Next >" />
                            </fieldset>
                            <fieldset>
                                <h2 class="title">Terms and Conditions</h2>
                                <div class="term-and-conditions">
                                    <input type="checkbox"> I have read and accept Official contest rules
                                </div>
                                <input type="button" name="previous" class="pre_btn" value="< Back" />
                                <input type="button" name="next" class="next_btn" value="Submit >" />
                            </fieldset>
                            </form>
                            <fieldset>
                                <h2 class="title">Status Sucess</h2>
                                <p>Thanks for your submitting Photo , we will inform you soon.</p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Multistep Form End Here -->

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