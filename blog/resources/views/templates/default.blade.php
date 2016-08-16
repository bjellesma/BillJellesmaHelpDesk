<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"
          integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="/<?php echo env('CSS_DIR') ?>/styles.css">
<script type="text/javascript" src="/<?php echo env('JS_DIR') ?>/nav.js"></script>
  <meta charset="utf-8">
  <title>BillJellesmaBlog</title>
</head>
<body>

  <div class="container">
    @include('templates.partials.navigation')
    @include('templates.partials.alerts')
    @yield('content')
  </div>
</body>
</html>
