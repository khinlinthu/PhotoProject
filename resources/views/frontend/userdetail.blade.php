@extends('frontend')

@section('content')

<style>
    .userProfileImage {
        width: 120px!important;
        height: 120px!important;
        object-fit: cover;
    }

    .userimg{
        /*width: 100px;*/
        height: 400px;
    }

    .bgcolour{
        background: #d3d3d3;
    }
</style>
    <div class="inner-page-header bgcolour">
        {{-- <div class="container">
            <div class="single-shop-area">
                @foreach($userdetail as $row)
                    <div class="single-winners">
                        <div class="images">
                            <a href=""><img src="{{asset($row->photo)}}" alt="" class="img-fluid" style="height: 250px;"></a>
                                <div class="overley">
                                    <div class="winners-details">
                                            
                                    </div>
                                </div>
                        </div>
                            
                                
                    </div>
                @endforeach
            </div>
        </div> --}}

        <div class="row">
            {{-- @foreach($userdetail as $row) --}}
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body">   
                    @foreach($test as $detail)                                                        
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                     <img class="rounded-circle userProfileImage" alt="User Image" src="{{$detail->photo}}"> 
                                </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name ">{{$detail->name}}</h4>
                                <h6 class="text-muted">{{$detail->email}}</h6>
                                <h6 class="text-muted">{{$detail->phone}}</h6>
                                {{-- <h6 class="text-muted">{{auth()->user()->getRoleNames()[0]=="member" OR "player"}}</h6> --}}
                                
                            </div>
                            
                        </div>
                    @endforeach
                    </div>
                    
                </div>
            </div>
             

           
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-body">    
                                                                            
                        <div class="row align-items-center">
                            @foreach($images as $row)
                            <div class="col-md-6 col-lg-6">
                            
                                <a href="#">
                                    <img class="userimg" alt="User Image" src="{{asset($row->image)}}">
                                </a>
                            
                        </div>
                            @endforeach
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>



@endsection