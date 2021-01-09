@extends('frontend')

@section('content')

  <style >
      .size{
        height: 400px;
      }
      .bgcolour{
        background: #f5f5f5;
      }
      .heart {
  color: white;
  background-color: currentColor;
  display: inline-block;
  height: 50px;
  margin: 0 10px;
  position: relative;
  top: 0;
  transform: rotate(-45deg);
  position: absolute; 
  left: 45%; top: 45%;
  width: 50px;
}

.heart::before,
.heart::after {
  content: "";
  background-color: currentColor;
  border-radius: 50%;
  height: 50px;
  position: absolute;
  width: 50px;
}

.heart:before {
  top: -25px;
  left: 0;
}

.heart:after {
  left: 25px;
  top: 0;
}

.heart:focus {
  color: red;
}
.heart_two{
  color: black;
  background-color: currentColor;
  display: inline-block;
  height: 50px;
  margin: 0 10px;
  position: relative;
  top: 0;
  transform: rotate(-45deg);
  position: absolute; 
  left: 45%; top: 45%;
  width: 50px;
}
.heart_two::before,
.heart_two::after {
  content: "";
  background-color: currentColor;
  border-radius: 50%;
  height: 50px;
  position: absolute;
  width: 50px;
}

.heart_two:before {
  top: -25px;
  left: 0;
}

.heart_two:after {
  left: 25px;
  top: 0;
}
.heart_two:focus {
  color: black;
}
  </style>
  

        <div class="blog-page-area pt-100 pb-100 bgcolour">
            <div class="container">
                <div class="row">
                  @foreach($image as $images)
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="single-blog-slide">
                            <div class="images">
                              
                                <a href="#"><img src="{{$images->image}}" alt="" class="size"></a>
                                {{-- <a class="heart" href="#"></a> --}}
                                <div class="overley">
                                  @if(Auth::user()->getRoleNames()[0]=="member")
                                  
                                  @forelse ($back_image as $bi)

                                    <ul>
                                      @if($bi->image_id ==$images->id and $bi->user_id == Auth::user()->id )
                                      <li><a href="#" class="heart_two"></a></li>
                                      @else
                                        <li><a class="heart" href="{{route('vot',['id'=>$images->id,'clicker'=>Auth::user()->id])}}"></a></li>
                                        
                                        @endif
                                    </ul>
                                  @empty
                                    <ul>
                                      <li><a href="{{route('vot',['id'=>$images->id,'clicker'=>Auth::user()->id])}}" class="heart"></a></li>
                                    </ul>
                                  @endforelse

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

  
   <script type="text/javascript">
     $( window ).load(function() {
  // Run code
});
   </script>

