@extends('frontend')

@section('content')

<style >
    .image{
        /*width: 500px;*/
        height: 400px;
    }
    .bgcolour{
        background: #d3d3d3;
    }
</style>

<div class="inner-page-header bgcolour">
<div class="container">
    <div class="row">
        @forelse($images as $image)
        <div class="col-xl-4 col-lg-3 col-md-g col-xs-12">
            <div class="card mb-2">
                <a href="{{route('userdetail',$image->user_id)}}"><img src="{{asset($image->image)}}" class="image" alt="Broken" ></a>
                {{-- @if(Auth::check())
                @if($image->user_id == Auth::user()->id)
                <div class="card-body">
                    <form action="/image/{{ $image->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Delete" class="btn btn-danger" name="">
                    </form>
                </div>
                @endif
                @endif --}}
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