@extends('frontend')

@section('content')

  <style >
      .size{
        height: 400px;
      }
      .bgcolour{
        background: #d3d3d3;
    }
  </style>
  
    <div class="home-gellary-area pt-90 pb-100 bgcolour">
            <div class="container">
                <div class="row mt-3">

                    @foreach($image as $image)
                    
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <div class="single-gellary">
                            <div class="image">
                                <img src="{{$image->image}}" alt="" class="size">
                                <div class="overley">
                                    @if(Auth::user()->getRoleNames()[0]=="member" OR "judge")
                                    <ul>
                                        <li><a href="{{route('vot',['id'=>$image->id,'clicker'=>Auth::user()->id])}}"><i class="fa fa-heart"></i></a></li>
                                    
                                        <li>{{$image->count}}</li>
                                        

                                        
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    @endforeach
                </div>
                
            </div>
        </div> 


@endsection
@section('scripts')
   
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <script type="text/javascript">
       $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $(document).ready(function() {
  $("#clicker").click(function () {
    alert("Hello!");
    
  });
});
   </script>

@endsection
