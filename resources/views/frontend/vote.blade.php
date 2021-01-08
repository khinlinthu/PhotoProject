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
  </style>
  
   {{--  <div class="home-gellary-area pt-90 pb-100 bgcolour">
            <div class="container">
                <div class="row mt-3">
                   
                    @foreach($image as $image)
                    
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                        <div class="single-gellary">
                            <div class="image">
                                <img src="{{$image->image}}" alt="" class="size">
                                <div class="overley">
                                    @if(Auth::user()->getRoleNames()[0]=="member")
                                     
                                         
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
        </div>   --}}

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
                                    <ul>
                                      @if($images->user_id ==Auth::user()->id)
                                      <li><a href="#" class="heart_two"></a></li>
                                      @else
                                        <li><a class="heart" href="{{route('vot',['id'=>$images->id,'clicker'=>Auth::user()->id])}}"></a></li>
                                        <li><a class="image-popup" href="images/blog/1.jpg"><i class="fa fa-search"></i></a></li>
                                        @endif
                                    </ul>

                                  @endif
                                </div>
      
                              
                            </div>
                            
                        </div>
                    </div>
                  @endforeach  
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="pagination-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

  
   <script type="text/javascript">
     $( window ).load(function() {
  // Run code
});
   </script>

