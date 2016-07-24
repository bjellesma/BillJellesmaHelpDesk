@extends('layouts.app')
@section('title')
Home
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          @if($posts->count())
            @foreach($posts as $post)
            <article>
              <h2><a href="{{ $url=route('post-show', $post->slug)}}">{{$post->title}}</a></h2>
              <p>Published on {{$post->created_at->format('l jS F Y')}}</p>
              <p>{{ str_limit($post->body, 300)}}</p>
              <a href="{{ $url=route('post-show', $post->slug)}}">Read More</a>
            </article>
            @endforeach
          @endif
          @if (Auth::user())
            <a href="{{ $url=route('post-create')}}"><button type="button">New Post</button></a>
          @elseif (Auth::guest())
            Please login to create a new post
          @endif
        </div>
    </div>
</div>
@endsection
