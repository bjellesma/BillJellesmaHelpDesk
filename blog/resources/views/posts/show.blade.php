@extends('layouts.app')
@section('title')
{{ $post->title}}
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <article>
            <h2><a href="{{ $url=route('post-show', $post->slug)}}">{{ $post->title }}</a></h2>
            <p>Published on {{ $post->created_at->format('l jS  F Y')}}</p>
            <p>{{ $post->body}}</p>
          </article>
          <form action="{{ url('posts/'.$post->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>
        </form>
        </div>
    </div>
</div>
@endsection
