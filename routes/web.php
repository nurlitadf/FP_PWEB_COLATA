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

Route::post('/invite','TodolistController@adduser')->name('invite');

Route::post('/update_status','TodolistController@update_status')->name('update_status');