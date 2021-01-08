@extends('frontend')

@section('content')

<style>
    .userProfileImage {
        width: 140px!important;
        height: 140px!important;
        object-fit: cover;
        margin-left: 100px;
    }

    .userimg{
        /*width: 100px;*/
        height: 400px;
    }

    .bgcolour{
        background: #B6B6B4;
    }

    .card{
        background-color: #606060;
        color: #000;
        /*width: 97%;*/
        margin-left: 20px;
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

    .imgrow{
        width: 100%;
        padding-right: 25px;
        padding-left: 25px;
        margin-right: auto;
        margin-left: auto;
    }
</style>
    <div class="inner-page-header bgcolour">
        <div class="container-fluid">
            <div class="card">
                {{-- <div class="card-body"> --}}
                    @foreach($test as $detail)
                    <div class="row mt-5 mb-3">
                        <div class="col-md-12 col-lg-6">  <!-- <div class="row align-items-center"> -->
                            <div class="profile-image">
                                     <img class="rounded-circle userProfileImage" alt="User Image" src="{{$detail->photo}}"> 
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                                <h4 class="user-name "><label>User Name : &nbsp </label>{{$detail->name}}</h4>
                                <h5 class=""><label>Email : &nbsp</label>{{$detail->email}}</h5>
                                <h5 class=""><label>Phone Number : &nbsp</label>{{$detail->phone}}</h5>
                                {{-- <h6 class="text-muted">{{auth()->user()->getRoleNames()[0]=="member" OR "player"}}</h6> --}}
                                
                        </div>
                            
                    {{-- </div>     --}}
                </div>
            </div>
             @endforeach
                    
            <div class="row mt-5 imgrow">
                @foreach($images as $row)
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 mb-3">
                    <div class="hovereffect">
                        <img class="img-responsive userimg" src="{{asset($row->image)}}" alt="">
                    <div class="overlay">
                        <h2>Image Name</h2>
               <!-- <a class="info" href="#"></a> -->
                    </div>
                    </div>

                </div>
                @endforeach           
            </div>
          </div>
    </div>



@endsection