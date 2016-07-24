<?php

namespace App\Http\Controllers;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //the take method is the equivalent of using LIMIT in sql
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        return view('home')->with('posts', $posts);
    }
}
