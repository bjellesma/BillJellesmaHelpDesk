<?php require 'functions.php';
  $functions =  new Functions(); ?>
@extends('templates.default')

@section('content')
<div class="container">

      @if($posts->count())
        @foreach($posts as $post)
        <div class="row">
      <div class="col-md-2">
        <img alt="{{ $post->title }}" src="/<?php echo env('IMAGE_DIR') ?>/posts/{{ $post->thumbnail }}" width="200px" height="200px"/>
      </div>
        <div class="col-md-10">

            <article>
              <h2><a href="{{ $url=route('posts.getPost', $post->slug)}}">{!! strip_tags($post->title) !!}</a></h2>
              <p>Published on {{$post->created_at->format('l jS F Y')}}</p>
              <p>{!! $functions->whitelisted_tags(str_limit($post->body, 300)) !!}</p>
              <a href="{{ $url=route('posts.getPost', $post->slug)}}">Read More</a>
              <p>Published by: <?php echo BillJellesmaBlog\Models\Posts::getUserByID($post->user_id, 'username'); ?></p>
            </article>
            </div>
          </div>
            @endforeach
          @endif
          @if (Auth::user())
            <a href="{{ $url=route('posts.new')}}"><button type="button">New Post</button></a>
          @elseif (Auth::guest())
            Please login to create a new post
          @endif
</div>
@stop
