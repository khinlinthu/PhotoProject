@extends('frontend')

@section('content')


<div class="inner-page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="header-page-title">
                    <img src="{{asset('upload_images/1.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card w-75">
                <div class="card-header">{{ __('Upload Photo') }}</div>

                <div class="card-body">
                    <form action="/image" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="image[]" class="form-control-image" multiple accept="image/*">
                        </div>
                        <input type="submit" value="Upload" class="btn btn-primary" name="">
                    </form>
                    {{-- <form id="uploadform" action="/image" enctype="multipart/form-data" method="POST">
                    @csrf
                        <div id="droptarget">
                            <h2>Drag your photos here</h2>
                            <p class="por">or</p>
                            <span class="btn btn-upload fileinput-button">
                                <div id="uploadifive-file_upload" class="uploadifive-button upbtn">
                                    <label>Upload From Computer</label>
                                    <input id="file_upload" name="image[]" type="file" multiple="true" style="display: none;"><input type="file" style="font-size: 30px; opacity: 0; position: absolute; right: -3px; top: -3px; z-index: 100; cursor: pointer; height: 80px;" multiple accept="image/*">
                                </div>
                            </span>

                            <p>Recommended. max 10 photos at once<span class="mobile-br"></span> and .jpgs larger than 1200px X 600px. <br> By uploading photos, you agree to our terms of use.</p>
                        </div>

                    </form>
                    <div id="upload-socials" class="row" style="margin-top: 20px;">
                        <div class="col-xs-6">
                            <h3 style="text-align: right;">Import your photos from</h3>
                        </div>
                        <div class="import-api col-xs-6">
                            <a href="/user/import/facebook" class="fb " target="_parent"></a>
                            <a href="/user/import/instagram" class="instagram" target="_parent"></a>
                            <a href="/user/import/flickr" class="flickr" target="_parent"></a>
                        </div>
                    </div> --}}

                </div>
                    
            </div>
        </div>
    </div>
</div>



@endsection