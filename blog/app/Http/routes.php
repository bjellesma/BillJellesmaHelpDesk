<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\HomeController@index',
  'as' => 'home',
]);
Route::get('/home', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\HomeController@index',
  'as' => 'home',
]);
//using middleware enables us to only let the user use there routes with proper auth
Route::get('/signup', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\AuthController@getSignup',
  'as' => 'auth.signup',
  'middleware' => ['guest'],
]);

Route::post('/signup', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\AuthController@postSignup',
  'middleware' => ['guest'],
]);

Route::get('/signin', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\AuthController@getSignin',
  'as' => 'auth.signin',
  'middleware' => ['guest'],
]);

Route::post('/signin', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\AuthController@postSignin',
  'middleware' => ['guest'],
]);

Route::get('/signout', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\AuthController@getSignout',
  'as' => 'auth.signout',
]);

Route::get('/search', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\SearchController@getResults',
  'as' => 'search.results',
]);

/**
* User Profile
*/
Route::get('/user/{username}', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\ProfileController@getProfile',
  'as' => 'profile.index',
]);

Route::get('/profile/edit', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\ProfileController@getEdit',
  'as' => 'profile.edit',
  'middleware' => ['auth'],
]);

Route::post('/profile/edit', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\ProfileController@postEdit',
  'middleware' => ['auth'],
]);

/**
* Posts
*/

Route::get('/posts/new', [
  'as' => 'posts.new',
  'uses' => '\BillJellesmaBlog\Http\Controllers\PostController@getNew',
  'middleware' => ['auth'],
]);

Route::post('/posts/new', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\PostController@postNew',
  'middleware' => ['auth'],
]);

Route::get('/post', [
  'as' => 'posts.showAllPosts',
  'uses' => '\BillJellesmaBlog\Http\Controllers\PostController@getAllPosts'
]);

Route::get('/posts/{slug}', [
  'as' => 'posts.getPost',
  'uses' => '\BillJellesmaBlog\Http\Controllers\PostController@getPost'
]);

Route::get('/posts/{slug}/edit', [
  'as' => 'posts.edit',
  'uses' => '\BillJellesmaBlog\Http\Controllers\PostController@getPostEdit',
  'middleware' => ['auth'],
]);
Route::post('/posts/{slug}/edit', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\PostController@postPostEdit',
  'middleware' => ['auth'],
]);

Route::delete('/posts/{post}', [
  'uses' => '\BillJellesmaBlog\Http\Controllers\PostController@deletePost',
  'middleware' => ['auth'],
]);

/**
* Admin
*/
Route::get('/admin', [
  'as' => 'admin.admin',
  'uses' => '\BillJellesmaBlog\Http\Controllers\AdminController@getAdmin',
  'middleware' => ['admin'],
]);
