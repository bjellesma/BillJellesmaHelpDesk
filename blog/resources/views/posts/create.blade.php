@extends('layouts.app')
@section('title')
New Post
@stop
@if (Auth::user())
  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/post') }}">
                {{ csrf_field() }}
                <h2>Enter a Title: <input type="text" name="wj_blog_create_title" id="wj_blog_create_title"></h2>
                <p>Enter the text<textarea name="wj_blog_create_text" name="wj_blog_create_text"></textarea></p>
                <input type="submit" value="Submit">
            </form>

          </div>
      </div>
  </div>
  @endsection
@elseif (Auth::guest())
  @section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
            Please login to create a new post

          </div>
      </div>
  </div>
  @endsection

@endif
