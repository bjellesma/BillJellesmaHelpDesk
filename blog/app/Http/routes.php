<?php
  use App\Post;
  use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
|REMEMBER: The route is seen as first come
*/


// Posts routes...
Route::get('/', [
  'as' => 'home',
  'uses' => 'HomeController@index'
]);

Route::get('/home', [
  'as' => 'home',
  'uses' => 'HomeController@index'
]);

Route::get('/posts/new', [
  'as' => 'post-create',
  'uses' => 'PostController@Create'
]);

Route::post('/post', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'wj_blog_create_title' => 'required|max:255',
        'wj_blog_create_text' => 'required|max:1255'
    ]);

    if ($validator->fails()) {
        return redirect('/posts/new')
            ->withInput()
            ->withErrors($validator);
    }

    $post = new Post;
    $post->title = $request->wj_blog_create_title;
    $post->body = $request->wj_blog_create_text;
    $post->save();

    return redirect('/home');
});

Route::get('/post', [
  'as' => 'post-show',
  'uses' => 'HomeController@index'
]);

Route::get('/posts/{slug}', [
  'as' => 'post-show',
  'uses' => 'PostController@Show'
]);

Route::delete('/posts/{post}', function (Post $post) {
    $post->delete();

    return redirect('/');
});

Route::auth();
