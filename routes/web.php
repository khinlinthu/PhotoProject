<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'FrontendController@home')->name('photo_contest');

Route::get('photodetail/{id}','FrontendController@photodetail')->name('photodetail');

// Route::get('signin','FrontendController@signin')->name('registration');

Route::resource('photocontest', 'PhotoContestController');

Route::resource('aboutphoto', 'AboutphotoController');


Route::resource('user', 'UserController');
Route::get('/signin', 'UserController@login')->name('user.signin');
Route::get('/player/register', 'UserController@playerCreate')->name('user.player');
Route::post('/player/store', 'UserController@playerstore')->name('user.playerstore');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');






Route::get('upload', 'FrontendController@upload')->name('uploadpage');

Route::get('/photo', 'ImageController@photo');

Route::post('/image', 'ImageController@post');

Route::delete('/image/{id}', 'ImageController@destory');


//Auth::routes();


//Auth::routes(['verify' => true]);

//Route::get('/home', 'AuthController@home')->name('home');

// Route::get('register','AuthController@register')->name('register');
// Route::get('login','AuthController@login')->name('login');
// Route::get('profile','AuthController@profile')->name('profile');

Route::get('/profile', 'FrontendController@profile')->name('profile');

// Route::get('edit_profile/{Auth::user()->id}','AuthController@edit_profile')->name('edit_profile');

// Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('photo','AuthController@photo')->name('photo');

// Route::get('vote',function(){
//    return view('vote');
// });
