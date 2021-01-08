@extends('frontend')

@section('content')

<style >
    .image{
        /*width: 900px;*/
        height: 400px;
    }
    .bgcolour{
        background: #f5f5f5;
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
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    background-color: rgba(75,75,75,0.7);
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }

  .hovereffect:hover .overlay {
    background-color: rgba(48, 152, 157, 0.4);
  }

  .hovereffect img {
    display: block;
    position: relative;
  }

  .hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
    -webkit-transform: translateY(155px);
    -ms-transform: translateY(155px);
    transform: translateY(155px);
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
  }

  .hovereffect:hover h2 {
    -webkit-transform: translateY(55px);
    -ms-transform: translateY(55px);
    transform: translateY(55px);
  }

  .hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
    color: #fff;
    border: 1px solid #fff;
    background-color: transparent;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    font-weight: normal;
    margin: -52px 0 0 0;
    padding: 65px 200px 300px 200px;
  }

  .hovereffect:hover a.info {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }

  .hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
  }
</style>

    <div class="inner-page-header bgcolour">
        <div class="container">
        <!-- <div class="row">
            @forelse($images as $image)
            <div class="col-xl-4 col-lg-3 col-md-g col-xs-12">
                <div class="card mb-2">
                    <a href="{{route('userdetail',$image->user_id)}}"><img src="{{asset($image->image)}}" class="image" alt="Broken" ></a>
                     @if(Auth::check())
                    @if($image->user_id == Auth::user()->id)
                    <div class="card-body">
                        <form action="/image/{{ $image->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" name="">
                        </form>
                    </div>
                    @endif
                    @endif 
                </div>
            </div>
            @empty
            <h1 class="text-danger">There is no uploads</h1>
            @endforelse
        </div> -->
            <div class="row">
                @forelse($images as $image)
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 mb-3">
                    <div class="hovereffect">
                        <img src="{{asset($image->image)}}" class="image img-responsive" alt="Broken" >
                            <div class="overlay">
                                <h2><i class="fa fa-user fa-lg"></i>&nbsp User Detail</h2>
                                <p>
                                    <a class="info " href="{{route('userdetail',$image->user_id)}}"></a>
                                </p>
                            </div>
                    </div>
                </div>
                @empty
                    <h1 class="text-danger">There is no uploads</h1>
                @endforelse

            </div>

        <div class="row justify-content-center">
            {{ $images->links()}}
        </div>
        </div>
    </div>


@endsection