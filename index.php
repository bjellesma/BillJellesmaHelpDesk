<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bill Jellesma Helpdesk">
    <!--TODO add media queries-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="bower_components/normalize/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <!-- References a icon (16 x 16) to associate with your page. Save it in the root directory for IE -->
    <link rel="icon" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script type="text/javascript" src="ajaxrequest.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
    <!-- use the following to invoke the thickbox plugin-->

    <!-- The following is a simple js function to check that all the check boxes on the form are filled out -->
    <script type="text/javascript">

      function checkForm(form)
      {

        alert("Success!  The form has been completed, validated and is ready to be submitted...");
        return false;
      }



    </script>
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
          <li>Home</li>
          <li>Blog</li>
          <li>Contact</li>
          <li>Github</li>
        </ul>
      </nav>
      <div class="col-md-12">
        <div class="col-md-6">
          <picture>
            <img id="wj_main_pic"src="images/profile-pic.jpg" alt="main picture" />
          </picture>
          <div id="wj_summary">
            <h2 class="h2">Who is Bill Jellesma?</h2>
            <p>I am a full stack engineer located in the Worcester, Massachusetts area.
              I have a clear passion in technology as well as the technical prowess to apply it.
              My goal is to use my knowledge to help create and further applications that will benefit society.
              If you're interested in projects I've accomplished and want to learn more, please read on!
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <section id="wj_recent_work">
            <h2 class="h2">Recent Work</h2>
              <li class="wj_recent_work_item">
                <img src="images/PyChat-1.PNG">
                <a href="#">PyChat</a>
              </li>
              <li class="wj_recent_work_item">
                <a href="#">Squid lomo Kickstarter art lomo Kickstarter art party cronut scenester.</a>
              </li>
              <li class="wj_recent_work_item">
                <a href="#">Organic raw denim lomo Kickstarter art Vice keffiyeh four loko.</a>
              </li>
              <li class="wj_recent_work_item">
                <a href="#">Organic raw denim Vice keffiyeh lomo Kickstarter art lomo Kickstarter art four loko.</a>
              </li>
          </section>
        </div>
      </div>
      <!--This is where the form went-->
      <footer id="wj_footer">
        <ul>
          <li><a href="https://twitter.com/bjellz"><i class="zocial-twitter"></a></li>
        </ul>
      </footer>
    </div>
  </body>
</html>
