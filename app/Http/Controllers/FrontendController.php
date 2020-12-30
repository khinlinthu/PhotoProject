<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutphoto;
use App\PhotoContest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

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
}
