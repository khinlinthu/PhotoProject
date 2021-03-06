f<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//frontend user

Route::get('/', 'FrontendController@home')->name('photo_contest');

Route::get('photodetail/{id}','FrontendController@photodetail')->name('photodetail');

Route::resource('user', 'UserController');

Route::get('/signin', 'UserController@login')->name('user.signin');

Route::get('/player/register', 'UserController@playerCreate')->name('user.player');

Route::post('/player/store','UserController@playerstore')->name('user.playerstore');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('upload', 'FrontendController@upload')->name('uploadpage');

Route::get('/photo', 'ImageController@photo');

Route::post('/image', 'ImageController@post');

Route::get('deleteimage/{id}','ImageController@delete')->name('deleteimage');

Route::get('/profile', 'FrontendController@profile')->name('profile');

Route::get('userdetail/{id}/{img_id}','ImageController@userdetail')->name('userdetail');

Route::get('vote','FrontendController@photo')->name('vote');

Route::get('voting/{id}/{clicker}','ImageController@vt')->name('vot');

Route::get('live','FrontendController@live')->name('live');

Route::get('travelphoto','FrontendController@travelphoto')->name('travel');

// Route::get('/profile','ImageController@userprofile')->name('profile');

//Backend
//admin route
Route::group(['middleware'=>['siteadmin']],function(){

	Route::resource('photocontest', 'PhotoContestController');

	Route::resource('aboutphoto', 'AboutphotoController');

	Route::resource('image', 'ImageController');

});


Route::group(['middleware'=>['admin']],function(){

Route::get('/role/{id}', 'UserController@role')->name('user.role');

Route::put('/role/{id}', 'UserController@roleUpdate')->name('user.roleUpdate');

});



// Route::get('upload1', 'FrontendController@uploadddd')->name('uploadpage1');

// Route::post('/image1', 'ImageController@upload');