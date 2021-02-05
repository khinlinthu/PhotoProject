<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Image;
use Session;
use Auth;
use App\Vote;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

     public function index()
    {
        $images = Image::all();
        return view('image.index',compact('images'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
         // 
    }



    public function show($id)
    {
        $images = Image::find($id);
        return view('image.show',compact('images'));
    }

    public function edit($id)
    {
        // 
    }

    public function update(Request $request, $id)
    {
        // 
    }


	public function photo()
    {
    	$images = Image::paginate(30);
    	return view('frontend.photos')->with('images', $images);
    }
    	
    public function post(Request $request)
    {

    	$this->validate($request, [
            'imagename' => 'required',
    		'image' => 'required'
    	]);

    	$images = $request->image;
    	foreach ($images as $image) {
    		$image_new_name = time() .$image->getClientOriginalName();
    		$image->move('images', $image_new_name);
    		$post = new Image;
    		$post->user_id = Auth::user()->id;
            $post->name = $request->imagename;
    		$post->image = 'images/' . $image_new_name;
    		$post->save();
    	}

    	Session::flash('success', 'Images uploaded');
    	return redirect('/photo');
    }
    public function delete($id)
    {
          // dd($id);
          $d_img=Image::find($id);
          $d_img->delete();
          return redirect('/profile');
    
    }

    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect()->route('image.index');

    }

    public function userdetail($id,$img_id)
    {
        // dd($img_id);
        $test=DB::table('users')
        ->select('users.*')
        ->where('users.id','=',$id)
        ->get();

        $images=DB::table('images')
        ->join('users','users.id','=','images.user_id')
        ->select('images.*','users.name')
        ->where('images.user_id','=',$id)
        ->paginate(30);
         
        $query = Image::find($img_id);
        // dd($images);

        return view('frontend.userdetail',compact('test','images','query'));
    }

    public function vt($id,$clicker)
    {
        
        /*$query=DB::table('votes')
        ->select('user_id','image_id')
        ->where('user_id','!=',$clicker)
        ->where('image_id','!=',$id)
        ->get();

        $query1=DB::table('votes')
        ->select('user_id','image_id')
        ->where('image_id','=',$id)
        ->where('user_id','!=',$clicker)
        ->get();
        $query2=DB::table('votes')
        ->select('user_id','image_id')
        ->where('user_id','=',$clicker)
        ->where('image_id','=',$id)
        ->get();*/

        
        /*if ($query->isEmpty()){

            $vote= new Vote();
            $vote->user_id= $clicker;
            $vote->image_id= $id;
            $vote->count=1;
            $vote->save();
            
            return redirect('/vote');
        }*/
        /*if ($query1->isNotEmpty()) {
            DB::table('votes')
            ->increment('count');
            return redirect('/vote');

        }if ($query2->isNotEmpty()) {
            return redirect('/vote');
        }*/
        
        $user_id=$clicker;
        $img_id=$id;
         
         
        $query=DB::table('votes')
        ->select('image_id')
        
        ->where('image_id','=',$img_id)
        ->get();
        
        /*$query2=DB::table('votes')
        ->select('user_id','image_id')
        ->where('user_id' ,'!=',$user_id)
        ->where('image_id','=',$img_id)
        ->get();
        dd($query2);*/
        if ($query->isEmpty()) {
            $vote= new Vote();
            $vote->user_id= $clicker;
            $vote->image_id= $id;
            $vote->count=1;
            $vote->save();
        }elseif ($query->isNotEmpty()) {
           DB::table('votes')
           ->where('user_id','!=',$clicker)
           ->where('image_id','=',$id)

           ->increment('count');

           Vote::where('image_id',$id)->update(array('user_id'=>$clicker));
        }

        $count=DB::table('votes')
            ->select('count')
            ->where('image_id','=',$id)
            ->get();

        $back_image=DB::table('votes')
        ->join('images','images.id','=','votes.image_id')
        ->select('votes.image_id')
        
        ->get();
 
        Session::put('back', $back_image);
         return redirect()->route('vote')->with('message',$back_image);   
        /* return view('frontend.vote2',compact('image'));*/             
    } 

   
}
