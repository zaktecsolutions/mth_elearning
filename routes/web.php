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
// route it to the home page
Route::get('/home', 'ContentsController@home')->name('home');
Route::get('/', 'ContentsController@home')->name('home');

Route::get('/demo', function () {
   return view('demo');
});
Route::get('/', function () {
    return view('welcome');
});

