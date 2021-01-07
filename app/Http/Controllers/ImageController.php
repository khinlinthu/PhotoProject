<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Image;
use Session;
use Auth;
use App\Vote;

class ImageController extends Controller
{
    public function index()
    {
         $images = Image::all();
        return view('Images.index',compact('images'));
    }

    public function create()
    {
        //
    }


    public function show($id)
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
    		'image' => 'required'
    	]);
    	$images = $request->image;
    	foreach ($images as $image) {
    		$image_new_name = time() .$image->getClientOriginalName();
    		$image->move('images', $image_new_name);
    		$post = new Image;
    		$post->user_id = Auth::user()->id;
    		$post->image = 'images/' . $image_new_name;
    		$post->save();
    	}
    	Session::flash('success', 'Images uploaded');
    	return redirect('/photo');
    }
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect()->route('images.index');

    }

    public function userdetail($id)
    {
        
        $test=DB::table('users')

        ->select('users.*')
        ->where('users.id','=',$id)
        ->get();
        $images=DB::table('images')
        ->join('users','users.id','=','images.user_id')
        ->select('images.*')
        ->where('images.user_id','=',$id)
        ->get();
        

        return view('frontend.userdetail',compact('test','images'));
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
        ->select('votes.count')
        
        ->get();
 
        Session::put('back', $back_image);
         return redirect()->route('vote')/*->with('message',$back_image)*/;   
        /* return view('frontend.vote2',compact('image'));*/             
    }
}
