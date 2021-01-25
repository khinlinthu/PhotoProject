@extends('frontend')

@section('content')

<style >

.bgcolour{
  background-color: #D3D3D3;
}

.upload {
    padding: 15px 100px;
    background-color: #fff;
    color: #000;
    border-radius: 30px;
    text-transform: uppercase;
    box-shadow: 12px 7px 2px 1px rgba(0, 0, 255, .2);
    text-shadow: 2px 2px 4px #000000;
}

.upload:hover {
    background-color: #FF0000;
    color: #fff;
}


/*.bgcolour{
        background: #000000;
}*/
 
 @import url(https://fonts.googleapis.com/css?family=Exo+2:400,700,500,300);

body {
  background: #ebeff2;
  font-family: "Exo 2";
}

.zone {      
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
  background: radial-gradient(ellipse at center,#808080,#808080 100%);
  width:100%;
  height:500px;  
  border:5px dashed gray;
  border-radius: 30px;
  text-align:center;
  color: black;
  z-index: 20;
  transition: all 0.3s ease-out;
  /*box-shadow: 0 0 0 10px rgba(255,255,255,.05),inset 0 0 .25em 0 rgba(0,0,0,.25);*/
  /*color: white;*/
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-shadow: 2px 2px 4px #000000;
  .btnCompression {
    .btn {

    } 
    .active {
      background: #EB6A5A;
      color:white;
    }
  }
  i {
    text-align: center;
    font-size: 50em;  
    color:#fff;
    /*margin-top: 50px;*/
  }
  .selectFile {
    height: 50px;
    margin: 50px auto;
    position: relative;
    width: 200px;          
  }

  label, input {
    cursor: pointer;
    display: block;
    height: 50px;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    border-radius: 5px;          
  }

  label {
    background: #fff;
    color:#EB6A5A;
    display: inline-block;
    font-size: 50px;
    line-height: 50px;
    padding: 0;
    text-align: center;
    white-space: nowrap;
    text-transform: uppercase;
    font-weight: bolder;   
    box-shadow: 0 1px 1px gray;
  }

  input[type=file] {
    opacity: 0;
  }

    }
    .zone.in{
      color:white;
      border-color:white;
      background: radial-gradient(ellipse at center,#EB6A5A 0,#c9402f 100%);
      i {          
        color:#fff;
      }
      label {
        background: #fff;
        color:#EB6A5A;
      }
    }
    .zone.hover {
      color:gray;
      border-color:white;
      background:#fff;
      border:3px dashed gray;
      i {          
        color:#EB6A5A;
      }
      label {
        background: #fff;
        color:#EB6A5A;
      }
    }
    .zone.fade {
      transition: all 0.3s ease-out;
      opacity: 1;
    }

</style>
    <div class="inner-page-header bgcolour">
        <div class="container-fluid pb-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="uploadcard" style=" width: 100%; height: 400px">
                        {{-- <div class="text">{{ __('Upload Photo') }}</div> --}}

                        {{-- <div class="card-body"> --}}
                            <div class="zone">
                                <div id="dropZ" class="mt-5">
                                    <i class="fa fa-cloud-upload fa-5x"></i>
                                <div class="mb-3" style="font-size: 30px;">Drag and drop your file here</div>
                                <span style="font-size: 20px;">OR</span>
                                    <fieldset>
                                    <form action="/image" enctype="multipart/form-data" method="POST">
                                        @csrf
                                            <div class="selectFile mt-5 mb-3">
                                                <label for="file" style="font-size: 20px;">PHOTO :</label>
                                                <input type="file" name="image[]" multiple accept="image/*">
                                            </div>
                                            <input type="submit" value="Upload"  class="upload mt-5">
                                            
                                    </form>
                                    </fieldset>
                                </div>
                            </div>
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
                                <li><i class="fa fa-fax"></i> Fax: (123) 4589761</li>
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
  
  <script type="text/javascript">
    $(document).bind('dragover', function (e) {
    var dropZone = $('.zone'),
        timeout = window.dropZoneTimeout;
    if (!timeout) {
        dropZone.addClass('in');
    } else {
        clearTimeout(timeout);
    }
    var found = false,
        node = e.target;
    do {
        if (node === dropZone[0]) {
            found = true;
            break;
        }
        node = node.parentNode;
    } while (node != null);
    if (found) {
        dropZone.addClass('hover');
    } else {
        dropZone.removeClass('hover');
    }
    window.dropZoneTimeout = setTimeout(function () {
        window.dropZoneTimeout = null;
        dropZone.removeClass('in hover');
    }, 100);
    });
  </script>
@endsection