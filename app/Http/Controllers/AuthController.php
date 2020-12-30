<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\User;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response;
use DB;
class AuthController extends Controller
{
    
    public function profile()
    {
        return view('frontend.profile');
    }
    public function edit_profile(Request $request,$id)
    {
        dd($request);
        $user = User::findOrFail($id);
        dd($user);
    }
    // public function photo()
    // {
    //     $photo =DB::select('select * from photos');

    //     return view('frontend.vote',compact('photo'));
    // }
}
