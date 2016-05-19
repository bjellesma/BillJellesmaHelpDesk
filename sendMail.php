<?php
  if(!isset($_POST['name']) || !$name = htmlentities($_POST['name'])) exit;
  if(!isset($_POST['email']) || !$email = htmlentities($_POST['email'])) exit;
  if(!isset($_POST['request']) || !$request = htmlentities($_POST['request'])) exit;

  if(!(empty($name) && empty($email) && empty($request))){
    sendMail($name, $email, $request);
  }

  function sendMail($name, $email, $request){
    $to = 'billJellesma.test@gmail.com';
    $subject = 'This is a test from' . $name;
    $headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $request, $headers);
  }

?>
