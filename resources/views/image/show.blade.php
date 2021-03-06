@extends('backend')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Images</h2>
          <h4>{{$images->name}}</h4>
          <img src="{{asset($images->image)}}" class="img-fluid" alt="" style="width: 400px; height: 400px;">

          
        </div>
      </div>
    </div>
  </main>
@endsection