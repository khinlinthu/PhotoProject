<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutphoto;
use App\PhotoContest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Vote;
use App\Image;

class FrontendController extends Controller
{
    public function home($value='')
    {
        $photoconests = PhotoContest::all();
        $aboutphotos = Aboutphoto::take(3)->get();
        return view('frontend.photo_contest',compact('photoconests','aboutphotos'));
    }


    public function photodetail($id)
    {

        $photoconests = PhotoContest::all();

        $photodetail = DB::table('photo_contests')
        ->join('aboutphotos', 'aboutphotos.photo_contest_id', '=', 'photo_contests.id')
        ->where('photo_contests.id',$id)
        ->select('aboutphotos.*')
        ->get();
        return view('frontend.photodetail',compact('photodetail','photoconests'));
    }

    public function upload($value='')
    {
        return view ('frontend.upload');
    }

    public function profile ()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        return view('frontend.profile', compact('user'));
    }


    public function photo()
    {
        $image=DB::table('images')
        /*->join('images','images.id','=','votes.image_id')*/
        ->join('users','users.id','=','images.user_id')
        ->join('model_has_roles','model_has_roles.model_id','=','users.id')
        ->join('roles','roles.id','=','model_has_roles.role_id')
        
        /*->select('images.*','votes.count')
        ->join('images','images.id','=','votes.image_id')*/
        ->where('roles.id','=',4)
        
        /*->where('votes.image_id','=',NULL)*/
        
        ->select('images.*')
        
        /*sss*/
        ->get();
         
         
        $back_image=DB::table('votes')
        /*->join('images','images.id','=','votes.image_id')*/
        ->select('votes.image_id','votes.user_id')
        
        ->get();
        
        return view('frontend.vote',compact('image','back_image'));
    }
    
    public function vt($id,$name)
    {
        
        $user_id = DB::select('select user_id from votes');

        $image_id=DB::select('select image_id from votes');
            if ($user_id == $name && $image_id == $id) {
        
            $vote=DB::table('votes')->increment('count',5);

    }
    
        
    }

    public function live()
    {
    
        /*$live=DB::table('votes')
        ->select('users.name','images.image',DB::raw('sum(votes.count)as user_count'))
        ->join('users','users.id','=','images.user_id')
        ->join('images','images.id','=','votes.image_id')
        ->groupBy('images.id')
        ->orderBy('votes.count','DESC')
        ->get();*/
        $live=DB::table('images')
        ->select('users.name','images.image',DB::raw('sum(votes.count)as user_count'))
        ->join('users','users.id','=','images.user_id')
        ->join('votes','votes.image_id','=','images.id')
        ->groupBy('images.id')
        ->orderBy('votes.count','DESC')
        ->get();



        

        return view('frontend.live',compact('live'));

    }



    
}
