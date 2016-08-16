<?php


//TODO make dynamic
require '../head.php';
//set session variables
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
if(isset($_GET['send'])){
  $send = $_GET['send'];
  if($send === 'true'){
    echo '<div class="wj_form_success">The form was sent successfully</div>';
  }elseif ($send === 'false') {
    # code...
  }else{
    echo '<div class="wj_error"><p>Error 4. The site has encountered an unrecognized error. Please contact the web admin with the error code.</p></div>';
  }
}
?>
<h2>All Fields are required</h2>
<?php if (!empty($errors)): ?>
<div id="wj_form_errors">
  <ul>
    <!--echo each item as list item -->
    <li><?php echo implode('</li><li>', $errors); ?></li>
  </ul>
</div>
<?php endif; ?>
<p>Would you like to get in contact with me and let me know how things are going? Fill out the form below to let me know!</p>
<form method="POST" action="/<?php $globals->getPHPDir(); ?>/contact.php" id="wj_form">
  <!-- the following htmlentities will help prevent XSS, that is, inserting jscript -->
  <p>Name: <input type="text" size="32" name="name" id="wj_name"<?php echo isset($fields['name']) ? 'value="' . escape($fields['name']) . '"' : '' ?>>
  <p>Email: <input type="text" size="32" id="wj_email" name="email"<?php echo isset($fields['email']) ? 'value="' . escape($fields['email']) . '"' : '' ?>>
  <p>Message: <textarea rows="4" cols="50" id="wj_request" name="request"><?php echo isset($fields['request']) ? escape($fields['request']) : '' ?></textarea>
  <p><input type="submit" style="color:#000" id="wj_submit"></p>
</form>
<?php
  //unset the session variables so that they do not persist throughout the session
  unset($_SESSION['errors']);
  unset($_SESSION['fields']);
  require '../footer.php';
?>
