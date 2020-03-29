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

// Route for user to sign in and signup and logout and get to dashboard
Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin',
]);

// Route for user to sign in and signup and logout and get to dashboard
Route::get('/dashboard', [
    'uses' => 'ContentsController@getdashboard',
    'as' => 'dashboard',
    'middleware' => 'auth',
]);

// Route for user to sign in and signup and logout and get to dashboard
Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout',
    'middleware' => 'auth',

]);

// Route for user to sign in and signup and logout and get to dashboard
Route::get('/account', [
    'uses' => 'UserController@getAccount',
    'as' => 'account',
    'middleware' => 'auth',

]);

// Route for user to sign in and signup and logout and get to dashboard
Route::post('/updateaccount', [
    'uses' => 'UserController@PostsaveAccount',
    'as' => 'account.save',
    'middleware' => 'auth',
]);

// Route for user to sign in and signup and logout and get to dashboard
Route::get('/userimage/{filename}', [
    'uses' => 'UserController@getUserImage',
    'as' => 'account.image',
    'middleware' => 'auth',
]);

// Route to show, create, delete  post
Route::get('/post', [
    'uses' => 'PostController@getpost',
    'as' => 'post',
    'middleware' => 'auth',
]);

// Route for user to sign in and signup and logout and get to dashboard
Route::post('/createpost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create',
    'middleware' => 'auth',
]);

// Route for user to sign in and signup and logout and get to dashboard
Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete',
    'middleware' => 'auth',
]);

// Route for user to sign in and signup and logout and get to dashboard
Route::post('edit', [
    'uses' => 'PostController@postEditPost',
    'as' => 'edit',
    'middleware' => 'auth',
]);

// Route for admin to direct input form to controlloer 
Route::get('/inputdata', [
    'uses' => 'ContentsController@getInputData',
    'as' => 'inputdata',
    'middleware' => 'auth',
]);

// Route to insert data in course table
Route::post('/insertcourse', [
    'uses' => 'CourseController@postInsertCourse',
    'as' => 'insertcourse',
    'middleware' => 'auth',
]);

// Route to insert data in course table
Route::post('/inserttopic', [
    'uses' => 'TopicController@PostInsertTopic',
    'as' => 'inserttopic',
    'middleware' => 'auth',
]);

// Route to insert data in course table
Route::post('/insertlesson', [
    'uses' => 'LessonController@PostInsertLesson',
    'as' => 'insertlesson',
    'middleware' => 'auth',
]);

Route::resource('questions', 'QuestionController');