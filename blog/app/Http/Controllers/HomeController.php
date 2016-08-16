<?php

namespace BillJellesmaBlog\Http\Controllers;
use BillJellesmaBlog\Models\Posts;
class HomeController extends Controller
{
  public function index()
  {
    //the take method is the equivalent of using LIMIT in sql
    $posts = Posts::orderBy('created_at', 'desc')->take(4)->get();
    return view('home')->with('posts', $posts);
  }
}
?>
