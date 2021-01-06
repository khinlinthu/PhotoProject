@extends('frontend')

@section('content')
<style >
  .tlive{
    background-color: #696C6D;
    color: #ffffff;
  }

  .colname{
    color: #FDD835;
    font-weight: bolder;
    font-size: 20px;
  }
</style>
 <div class="inner-page-header">
  <div class="container">
   <table class="table table-striped pt-90 pb-100 tlive">
  <thead>
    @php
       $num = 1;
    @endphp
    <tr class="colname">
      <th scope="col">No</th>
      <th scope="col">Player Name</th>
      <th scope="col">Photo</th>
      <th scope="col">Count</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($live as $lives)
    <tr>
      <td scope="row">{{ $num++ }}</td>
      <td>{{$lives->name}}</td>
      <td><img src="{{$lives->image}} " style="width: 100px; height: 100px;"></td>
      <td>{{$lives->user_count}}</td>
     
    </tr>
    
   @endforeach
  </tbody>
</table>
</div>
</div>


@endsection