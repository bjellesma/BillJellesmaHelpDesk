<?PHP
  // check that all POST variables have been set
  if(!isset($_POST['method']) || !$method = $_POST['method']) exit;
  if(!isset($_POST['value']) || !$value = $_POST['value']) exit;
  if(!isset($_POST['target']) || !$target = $_POST['target']) exit;

  $passed = false;
  $retval = '';
  switch($method)
  {
    case 'checkEmail':
      if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $passed = true;
        retval = '';
      } else {
        $passed = false;
        $retval = "Give it another shot kid!";
      }
      break;

    default: exit;
  }
  //a class to automatically generate an xml response
  include "class.xmlresponse.php";
  $xml = new xmlResponse();
  $xml->start();

  // set the response text
  $xml->command('setcontent',
    array('target' => "rsp_$target", 'content' => htmlentities($retval))
  );

  if($passed) {
    // set the message colour to green and the checkbox to checked

    $xml->command('setstyle',
      array('target' => "rsp_$target", 'property' => 'color', 'value' => 'green')
    );
    $xml->command('setproperty',
      array('target' => "valid_$target", 'property' => 'checked', 'value' => 'true')
    );

  } else {
    // set the message colour to red, the checkbox to unchecked and focus back on the field

    $xml->command('setstyle',
      array('target' => "rsp_$target", 'property' => 'color', 'value' => 'red')
    );
    $xml->command('setproperty',
      array('target' => "valid_$target", 'property' => 'checked', 'value' => 'false')
    );
    $xml->command('focus', array('target' => $target));

  }

  $xml->end();
?>
