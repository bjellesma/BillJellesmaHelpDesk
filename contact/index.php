<?php
//TODO make dynamic
require '../head.php';

?>
<script type="text/javascript" src="/<?php $globals->getJSDir() ?>/ajaxrequest.js"></script>
<!-- The following is a simple js function to check that all the check boxes on the form are filled out -->
<script type="text/javascript">

  function checkForm(form)
  {

    alert("Success!  The form has been completed, validated and is ready to be submitted...");
    return false;
  }



</script>
<!-- the contact form will go here -->
<h2>All Fields are required</h2>
<form method="POST" action="/<?php $globals->getPHPDir(); ?>/sendMail.php">
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
      req.loadXMLDoc('/<?php $globals->getPHPDir(); ?>/form-process.php', params);
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
<?php
  require '../footer.php';
?>
