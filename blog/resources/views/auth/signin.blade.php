@extends('templates.default')

@section('content')
<div class="row">
        <div class="col-lg-6">
                <form class="form-vertical" role="form" method="post" action="{{ route('auth.signin') }}">
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="control-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                                @if ($errors->has('username'))
                                  <span class="help-block">{{ $errors->first('username') }}</span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                                @if ($errors->has('password'))
                                  <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif
                        </div>
                        <div class="checkbox">
                                <label>
                                        <input type="checkbox" name="remember"> Remember me
                                </label>
                        </div>
                        <div class="form-gorup">
                                <button type="submit" class="btn btn-default">Sign in</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                </form>
        </div>
</div>
@stop