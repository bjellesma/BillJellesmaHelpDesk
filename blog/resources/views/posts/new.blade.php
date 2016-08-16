@extends('templates.default')
@section('content')
<div class="row">
  <div class="col-lg-6">
      <form class="form-vertical" role="form" method="post" action="{{ route('posts.new') }}">
          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              <label for="title" class="control-label">Title:</label>
              <input type="text" name="title" class="form-control" id="title" value="{{ Request::old('title') ?: ''}}">
              @if ($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
              @endif
          </div>
          <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
              <label for="username" class="control-label">Message:</label>
              <textarea name="text" class="form-control" id="username">{{ Request::old('text') ?: ''}}</textarea>
              @if ($errors->has('text'))
                <span class="help-block">{{ $errors->first('text') }}</span>
              @endif
          </div>
          <div class="col-md-8">
            <span style="float:right">Upload a thumbnail image:<br><input type="file" name="thumbnail" id="thumbnail"></span>
          </div>
          @if ($errors->has('thumbnail'))
            <span class="help-block">{{ $errors->first('thumbnail') }}</span>
          @endif
          <div class="form-group">
              <button type="submit" class="btn btn-default">Post</button>
          </div>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
  </div>
</div>
@stop
