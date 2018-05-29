<?php

use Controllers\BoardController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Auth::routes();

Route::get('/board', 'BoardController@index')->name('board');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/addtodolist','TodolistController@store')->name('addtodolist');

Route::post('/adds', 'BoardController@store')->name('adds');

Route::post('/changes', 'BoardController@update')->name('changes');

Route::get('/board/{id}','TodolistController@show');

Route::get('/deleteboard/{id}','BoardController@delete');

Route::get('/deletetodolist/{id}','TodolistController@delete');

Route::post('/invite','TodolistController@adduser')->name('invite');

Route::post('/update_status','TodolistController@update_status')->name('update_status');

Route::get('/viewprofile', function(){
	return view('viewprofile');
})->name('viewprofile');

Route::get('/editprofile', function(){
	$error="";
	$log="";
	return view('editprofile', compact('error','log'));
})->name('editprofile');

Route::post('/updateprofile','EditProfileController@edit')->name('updateprofile');

Route::post('/editpassword','EditProfileController@updatepassword')->name('editpassword');

Route::get('/image-upload','EditProfileController@imageUpload')->name('image-upload');

Route::post('/image-upload','EditProfileController@imageUploadPost')->name('image-upload');