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
      <img id="wj_main_pic"src="images/profile-pic.jpg" alt="main picture" />
      <section id="wj_recent_work">
        <h2 class="h2">Recent Work</h2>
        <ul>
          <li class="wj_recent_work_item">
            <a href="#">Gastropub distillery Marfa farm-to-table, Etsy Truffaut fingerstache.</a>
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
        </ul>
      </section>
      <main id="main">

        <!-- bootstrap-->
        <div class="col-md-12">
          <div id="wj_summary">
            <h2 class="h2">Who is Bill Jellesma?</h2>
            <p>Bill Jellesma is a full stack engineer experienced located in the Worcester, Massachusetts area.
              I have a clear passion in technology as well as technical prowess to apply it.
              My goal is to use my knowledge to help create and further applications that will benefit society.
              If you're interested in projects I've accomplished, please read on!
            </p>
          </div>
        </div>
          <img id="wj_twitter_box"src="http://placehold.it/358x358">
          <div id="wj_projects">
            <h2 class="h2">Projects</h2>
          </div>
        <!-- /bootstrap -->

        <!-- the bg, thickbox, and picture will go here-->
      </main>
      <footer id="footer">
        <!-- the contact form will go here -->
        <h2>All Fields are required</h2>
        <form method="POST" action="sendMail.php">
          <fieldset>
          <!-- We use onchange on our form because it processes as soon as the form is unfocused and will give us valueable feedback -->
          <!-- We are replacing any special characters using a regular expression -->
          <p>Name: <input type="text" size="32" name="name" id="name" onblur="
            if(!(this.value.match(/[^a-zA-Z ]/g) === '')){
              this.value = this.value.replace(/[^a-zA-Z ]/g, '');
              ajaxValidate('checkName', this.value, this.id);
            }"
            onkeyup="checkValid();">
          <input type="checkbox" disabled name="valid_name" id='valid_name'></p>
          <div id="rsp_name"><!-- --></div>
          <p>Email: <input type="text" size="32" id="email" name="email" onkeyup="if(this.value != '') ajaxValidate('checkEmail', this.value, this.id);">
            <input id="valid_email" type="checkbox" disabled name="valid_email"></p>
            <!-- An empty comment is needed by some older browsers -->
            <div id="rsp_email"><!-- --></div>
          <p>Summary of request: <textarea id="request" name="request" onkeyup="this.value = this.value.replace(/^\s+|\s+$/g, ''); valid_request.checked = this.value; checkValid();">

            </textarea>
            <input id="valid_request" type="checkbox" disabled name="valid_request"></p>
            <div id="rsp_request"><!-- --></div>
          <p><input type="submit" disabled id="valid_submit"></p>
          </fieldset>
        </form>
        <script type="text/javascript">
          function ajaxValidate(method, value, target){
            if(encodeURIComponent){
              var req = new AjaxRequest();
              //encodeURIComponent will strip most special characters
              var params = "method=" + method + "&value=" + encodeURIComponent(value) + "&target=" + target;
              req.setMethod("POST");
              req.loadXMLDoc('form-process.php', params);
            }
            checkValid();


          }
          function checkValid(){
            if(document.getElementById('valid_name').checked &&
               document.getElementById('valid_email').checked &&
               document.getElementById('valid_request').checked){
              $('#valid_submit').removeAttr("disabled");
            }
          }

        </script>
        <script type="text/javascript">
        //creates an object with thickbox functionality
          $('.modal').modal({
            'thickbox': 'thickbox',
            'close': 'modal-close',
            'closeText': 'Goodbye',
            'shade': 'thickbox-shade'
          });
        </script>
      </footer>
    </div>
  </body>
</html>
