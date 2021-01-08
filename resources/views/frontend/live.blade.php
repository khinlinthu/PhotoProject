@extends('frontend')

@section('content')
<style >
  .tlive{
    background-color: #696C6D;
    color: #ffffff;
    border-radius: 15px;
    border-collapse: collapse;
    color: #000000;
    font-size: 20px;
  }

  tr:hover {background-color: #EDEADF ;}
  /*tr:nth-child(even) {background-color: #f2f2f2;}*/

  th {
  background-color: #1F1B0D;
  color: white;
}

  .colname{
    color: #000000;
    font-weight: bolder;
    font-size: 25px;
  }

  .bgcolour{
        background: #d3d3d3;
  }

</style>
 <div class="inner-page-header bgcolour">
  <div class="container">
   <table class="table table-striped pt-90 pb-100 tlive ">
  <thead>
    @php
       $num = 1;
    @endphp
    <tr class="colname">
      <th scope="col">No</th>
      <th scope="col">Player Name</th>
      <th scope="col">Photo</th>
      <th scope="col">Counts</th>
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