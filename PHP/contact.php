<?php
  require '../head.php';
  session_start();
  $doc = $_SERVER['DOCUMENT_ROOT'].'/BillJellesmaHelpDesk/private/server.php';
  if(file_exists($doc)){
    require_once '../private/server.php';
    $wj_email_settings = new EmailSettings();
  }
  require_once '../Lib/PHPMailer/PHPMailerAutoload.php';

  $errors = [];

  if(isset($_POST['name'], $_POST['email'], $_POST['request'])){
    $fields = [
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'request' => $_POST['request']
    ];

    foreach($fields as $key => $value) {
      if (empty($value)) {
        $errors[] = 'Please fill in ' . $key;
      }
    }

    if(empty($errors)) {

      $phpMailer = new PHPMailer;
      $phpMailer->isSMTP();
      $phpMailer->SMTPAuth = true;
      $phpMailer->Host = $wj_email_settings->getHost();
      $phpMailer->Username = $wj_email_settings->getUsername();
      $phpMailer->Password = $wj_email_settings->getPassword();
      $phpMailer->SMTPSecure = $wj_email_settings->getSecurity();
      $phpMailer->Port = $wj_email_settings->getPort();

      $phpMailer->Subject = 'Contact Form';
      $phpMailer->Body = 'From: ' . $fields['name'] . ' (' . $fields['email'] . ')<p>' . $fields['request'] . '</p>';

      $phpMailer->setFrom('billJellesma.test@gmail.com', 'BillJellesmaHelpDesk');
      $phpMailer->AddAddress('billJellesma.test@gmail.com', 'Bill Jellesma');

      if($phpMailer->send()){

      }else{
        $errors = 'Error 3: The message was not sent due to a hiccup with the server. Please give this error code to the web admin.';
      }
    }

  } else{
    $errors[] = 'Some or all required fields are missing.';
  }
  //create session variables to temporarily store data for user
  $_SESSION['errors'] = $errors;
  $_SESSION['fields'] = $fields;
  if(empty($errors)){
    header('Location:/BillJellesmaHelpDesk/contact/index.php?send=true');
  }else{
    header('Location:/BillJellesmaHelpDesk/contact/index.php?send=false');
  }

  require '../footer.php';
 ?>
