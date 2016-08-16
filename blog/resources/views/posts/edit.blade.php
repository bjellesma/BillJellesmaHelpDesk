@extends('templates.default')
@section('content')
<div class="row">
  <div class="col-lg-8">
      <form class="form-vertical" role="form" method="post" action="{{ $url=route('posts.edit', $post->slug) }}" enctype="multipart/form-data">
          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              <label for="title" class="control-label">Title:</label>
              <input type="text" name="title" class="form-control" id="title" value="{{ Request::old('title') ?: $post->title}}">
              @if ($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
              @endif
          </div>
          <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
              <label for="username" class="control-label">Message:</label>
              <textarea name="text" class="form-control" id="username">{{ Request::old('text') ?: $post->text}}</textarea>
              @if ($errors->has('text'))
                <span class="help-block">{{ $errors->first('text') }}</span>
              @endif
              <label for="thumbnail" class="control-label" style="float:left">Thumbnail:</label>
              <div class="col-md-8">
                <img alt="{{ $post->title }}" src="/<?php echo env('IMAGE_DIR') ?>/posts/{{ $post->thumbnail }}" width="200px" height="200px"/>
                <span style="float:right">Upload a new file:<br><input type="file" name="thumbnail" id="thumbnail"></span>
              </div>
              @if ($errors->has('thumbnail'))
                <span class="help-block">{{ $errors->first('thumbnail') }}</span>
              @endif
          </div>
          <div class="form-group col-md-8">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
              <button type="submit" class="btn btn-default">Post</button>
          </div>

      </form>
  </div>
</div>
@stop
