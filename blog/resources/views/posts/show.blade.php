@extends('templates.default')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-2">
        <img alt="{{ $post->title }}" src="/<?php echo env('IMAGE_DIR') ?>/posts/{{ $post->thumbnail }}" width="200px" height="200px"/>
      </div>
        <div class="col-md-10">
          <article>
            <h2><a href="{{ $url=route('posts.getPost', $post->slug) }}">{{ $post->title }}</a></h2>
            <p>Published on {{ $post->created_at->format('l jS  F Y')}}</p>
            <p>{{$post->body }}</p>
            <p>Published by: <?php echo BillJellesmaBlog\Models\Posts::getUserByID($post->user_id, 'username'); ?></p>
          </article>
          @if (Auth::id() == $post->user_id || BillJellesmaBlog\Models\User::admin())
          <form action="{{ url('posts/'.$post->id) }}" method="POST">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>
            <a href= "{{ $url=route('posts.edit', $post->slug) }}"><input type="button" value="Edit"></a>
        </form>
        @endif
        </div>
    </div>
</div>
@stop
