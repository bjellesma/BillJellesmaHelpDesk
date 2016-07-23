<!DOCTYPE HTML>
<?php require 'functions.php'; $globals = new Globals(); ?>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bill Jellesma Helpdesk">
    <!--TODO add media queries-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="/<?php $globals->getDomain(); ?>/bower_components/normalize/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/<?php $globals->getDomain(); ?>/css/styles.css">
    <!-- References a icon (16 x 16) to associate with your page. Save it in the root directory for IE -->
    <link rel="icon" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <script type="text/javascript" src="/<?php $globals->getJSDir(); ?>/nav.js"></script>
    <title>Bill Jellesma Help Desk</title>
    </head>
    <body>

    <div class="container">
      <button class="hamburger">&#9776;</button>
      <button class="cross">&#735;</button>

      <!--Header-->
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
          <li><a href="/<?php $globals->getDomain(); ?>/">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="/<?php $globals->getDomain(); ?>/contact/">Contact</a></li>
          <li><a href="https://github.com/bjellesma">Github</a></li>
        </ul>
      </nav>
