@extends('frontend')

@section('content')

<style >

.upload {
    padding: 13px 100px;
    background-color: #3A3938;
    color: #fff;
    border-radius: 30px;

}
.image{
    font-size: 20px;
    font-weight: bolder;
}

.text{
    font-size: 20px;
    font-weight: bolder;
}

.uploadcard{
    background-color: #D8DBBA;
}

.bgcolour{
        background: #d3d3d3;
    }
 

</style>


    <div class="inner-page-header bgcolour">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card w-100 uploadcard" style="height: 350px">
                        <div class="card-header text">{{ __('Upload Photo') }}</div>

                        <div class="card-body">
                            <fieldset>
                            <form action="/image" enctype="multipart/form-data" method="POST">
                                @csrf
                                
                                    <div class="form-group image offset-3">
                                        Photo :
                                        <input type="file" name="image[]" class="form-control-image  mt-5" multiple accept="image/*">
                                    </div>
                                    
                                
                                <input type="submit" value="Upload"  class="upload offset-4 mt-5">
                            </form>
                            </fieldset>

                        </div>
                            
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection