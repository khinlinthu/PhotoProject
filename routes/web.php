<?php

use Illuminate\Support\Facades\Route;



//Admin
Route::get('/', 'FrontendController@home')->name('photo_contest');

Route::get('photodetail/{id}','FrontendController@photodetail')->name('photodetail');

Route::middleware('role:admin')->group(function () {

Route::resource('photocontest', 'PhotoContestController');

Route::resource('aboutphoto', 'AboutphotoController');

Route::resource('image', 'ImageController');

});

//frontend user
Route::resource('user', 'UserController');

Route::get('/signin', 'UserController@login')->name('user.signin');
Route::get('/player/register', 'UserController@playerCreate')->name('user.player');
Route::post('/player/store', 'UserController@playerstore')->name('user.playerstore');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('upload', 'FrontendController@upload')->name('uploadpage');

Route::get('/photo', 'ImageController@photo');


Route::post('/image', 'ImageController@post');

// Route::delete('/image/{id}', 'ImageController@destory');

Route::get('/profile', 'FrontendController@profile')->name('profile');

Route::get('userdetail/{id}','ImageController@userdetail')->name('userdetail');

Route::get('vote','FrontendController@photo')->name('vote');

Route::get('voting/{id}/{clicker}','ImageController@vt')->name('vot');

Route::get('live','FrontendController@live')->name('live');
/*
Route::get('photo_vote','FrontendController@photo2')->name('photo_vote');*/


//backend

Route::get('/role/{id}', 'UserController@role')->name('user.role');

Route::put('/role/{id}', 'UserController@roleUpdate')->name('user.roleUpdate');
