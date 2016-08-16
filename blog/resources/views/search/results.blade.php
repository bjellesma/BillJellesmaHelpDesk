@extends('templates.default')

@section('content')
  <h3>Searching for "{{ Request::input('query') }}"</h3>

  @if (!$users->count())
    <p>No Results found</p>
  @endif

  <div class="row">
    <div class="col-lg-12">

      @foreach($users as $user)
        @include('user/partials/userblock')
      @endforeach
    </div>
  </div>
@stop
