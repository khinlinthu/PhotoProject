@extends('frontend')

@section('content')

<div class="container">
    <a href="/photo" class="btn btn-warning">Upload</a>
</div>
<div class="container mt-2">
    <div class="row">
        @forelse($images as $image)
        <div class="col-xl-4 col-lg-4 col-md-g col-xs-12">
            <div class="card mb-3">
                <img src="{{asset($image->image)}}" class="card-img-top" alt="Broken" height="300px">
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

@endsection