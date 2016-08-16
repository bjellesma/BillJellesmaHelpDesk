<!--
This template is useful if you need to flash a message
such as if the user needs to be told to login again
we can just pass ->with('info', $info) in routes.php
-->
@if (Session::has('info'))
  <div class="alert alert-info" role="alert">
    {{ Session::get('info') }}
  </div>
@endif
