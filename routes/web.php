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

/* Route::get('/demo', function () {
return view('demo');
}); */

// Route for user to sign in and signup and logout and get to dashboard
Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup',
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin',
]);

Route::get('/dashboard', [
    'uses' => 'UserController@getdashboard',
    'as' => 'dashboard',
    'middleware' => 'auth',
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout',

]);

Route::get('/account', [
    'uses' => 'UserController@getAccount',
    'as' => 'account',
]);

Route::post('/updateaccount', [
    'uses' => 'UserController@PostsaveAccount',
    'as' => 'account.save',
]);
Route::get('/userimage/{filename}', [
    'uses' => 'UserController@getUserImage',
    'as' => 'account.image',
]);

// Route to show, create, delete  post
Route::get('/post', [
    'uses' => 'PostController@getpost',
    'as' => 'post',
    'middleware' => 'auth',
]);

Route::post('/createpost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => 'auth',
]);

Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth',
]);

Route::post('edit', [
    'uses' => 'PostController@postEditPost',
    'as' => 'edit',
    'middleware' => 'auth',
]);
