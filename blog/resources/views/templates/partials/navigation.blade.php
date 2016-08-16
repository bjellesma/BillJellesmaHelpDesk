<button class="hamburger">&#9776;</button>
<button class="cross">&#735;</button>
<header id="wj_header">
        <div id="wj_logo">
          <img src="http://placekitten.com/30/30" alt="logo" />
        </div>
        <div id="wj_heading">
          Bill Jellesma Help Desk
        </div>
      </header>
      <nav id="wj_nav">
        <ul>
          <li><a href="/<?php echo env('SITE_NAME') ?>/">Site Home</a></li>
          <li><a href="/<?php echo env('SITE_NAME') ?>/blog/public/">Blog Home</a></li>
                                @if(Auth::check())
                                <li><a href="{{ route('profile.index', ['username' => Auth::user()->username]) }}">{{ Auth::user()->getNameOrUsername() }}</a></li>
                                <li><a href="{{ route('profile.edit')}}">Update profile</a></li>
                                <li><a href="{{ route('auth.signout')}}">Sign out</a></li>
                                @else
                                <li><a href="{{ route('auth.signup')}}">Sign up</a></li>
                                <li><a href="{{ route('auth.signin')}}">Sign in</a></li>
                                @endif
                        </ul>
                        <div class="collapse navbar-collapse">
                                @if (Auth::check())
                                <form action="{{ route('search.results') }}" role="search" class="navbar-form navbar-left">
                                        <div class="form-group">
                                                <input type="text" name="query" class="form-control"
                                                placeholder="Find people"/>
                                        </div>
                                        <button type="submit" class="btn btn-default">Search</button>
                                </form>
                                @endif
                </div>
            </nav>
