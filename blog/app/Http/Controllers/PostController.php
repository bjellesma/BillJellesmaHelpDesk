<?php

namespace App\Http\Controllers;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller {

  public function Show($slug){
    $post=Post::where('slug', '=', $slug)->firstOrFail();

    return view('posts.show')->with('post', $post);
  }

  public function Create(){

    return view('posts.create');
  }

  public function Delete(Post $post){
    $post->delete();

    return redirect('/home');
  }


} ?>
