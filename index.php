<!DOCTYPE HTML>
<!-- Tells the browser to render the page using the HTML5 specification -->
<!-- Defines the documents primary language as English -->


<html lang="en">
  <head>
    <!-- Defines the documents encoding character set (Multi-lingual Universal Transformation Format) -->
    <meta charset="UTF-8">
    <meta name="description" content="Bill Jellesma Helpdesk">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"/>
    <!-- References a icon (16 x 16) to associate with your page. Save it in the root directory for IE -->
    <link rel="icon" href="favicon.ico"/>
    <script   src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script type="text/javascript" src="ajaxrequest.js"></script>
    <script type="text/javascript" src="stars.js"></script>
    <script type="text/javascript" src="slider.js"></script>
    <script type="text/javascript" src="tab-panels.js"></script>
    <script type="text/javascript" src="lightbox.js"></script>
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
    <header id="header">
      <div id="heading">
        <strong><center>Bill Jellesma Help Desk</center></strong>
      </div>
      <!-- the jquery slider will go here -->
      <div id="slider">
          <ul class="slides">
            <!--These take too long in development to load the page (shitty hosting)-->
              <li class="slide slide1"><a href='#' class="modal" data-content='content/Sample1.html'><img src="http://placekitten.com/200/300"/></a></li>
              <li class="slide slide2"><a href='#' class="modal" data-content='content/Sample1.html'><img src="http://placekitten.com/200/300"/></a></li>
              <li class="slide slide3"><a href='#' class="modal" data-content='content/Sample1.html'><img src="http://placekitten.com/200/300"/></a></li>
              <li class="slide slide3"></li>
          </ul>
      </div>
      <!--markup for the thickbox is generated by lightbox.js-->
    </header>
    <main id="main">
      <!--<canvas id="starsBG" width="100%" height="100%">
      </canvas>-->
      <div class="tab-panels">
        <ul class="tabs">
          <li class="active" rel="tab-intro">Intro</li>
          <li rel="tab-skills">Skills</li>
          <li rel="tab-projects">Projects</li>
        </ul>
        <div id="tab-intro" class="panel active">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
        </div>
        <div id="tab-skills" class="panel">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
        </div>
        <div id="tab-projects" class="panel">
          But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee
        </div>
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
  </body>
</html>
