<?php

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Twitter Auth 
Route::get('logintwitter', 'Auth\LoginController@twitterProvider');
Route::get('login/twitter/callback', 'Auth\LoginController@twitterhandleProviderCallback');

// Google Auth 
Route::get('logingoogle', 'Auth\LoginController@googleProvider');
Route::get('login/google/callback', 'Auth\LoginController@googlehandleProviderCallback');

// user profile 
Route::get('profile', function(){
    return view('user.profile');
});
