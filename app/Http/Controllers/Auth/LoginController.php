<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function logout(Request $request)
    // {
    //     auth()->logout();
    //     return redirect('/login');
    // }

    public function redirectTo()
    {
        $roles = auth()->user()->getRoleNames()[0];
        // dd($roles);
        //checking user roles
        switch ($roles) {
            case 'superadmin':
                return '/photocontest';
                break;

            case 'admin':
                return '/user';
                break; 

            case 'siteadmin':
                return '/image';
                break;    

            case 'player':
                return '/upload';
                break;

            case 'member':
                return '/upload';
                break;

            default:
                return '/vote';
        }
    }
}
