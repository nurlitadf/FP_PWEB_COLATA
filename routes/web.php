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
});

Route::get('/board', function () {
    return view('board');
});

Auth::routes();

Route::get('/board', 'BoardController@index');

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/home', 'BoardController');

Route::post('/adds', 'BoardController@store');