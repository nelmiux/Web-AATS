<?php
  session_start();
  // define variables and set to empty values
  $semail = "";
  $_SESSION['errors']=array();
    
    if (empty($_POST["semail"])) {
      $_SESSION['errors']['semail']= 'Email is required';
    } else {
      $semail = test_input($_POST["semail"]);
      // check if e-mail address is well-formed
      if (!filter_var($semail, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['semail']= 'Invalid email format';
      }
    }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

   if(count($_SESSION['errors']) > 0) {
      //This is for ajax requests:
      if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $_SESSION['errors']['result']="The Form Cannot be Submitted. Please Correct Errors and Send Again";
        $_SESSION['errors']['success']='false';
        echo json_encode($_SESSION['errors']);
        exit;
      }
      //This is when Javascript is turned off:
      echo "<ul>";
      foreach($_SESSION['errors'] as $key => $value) {
        echo "<li>" . $value . "</li>";
      }
      echo "</ul>";
  } else {
      //form validation successful - process data here!!!!
      $email_to = 'jaimeparra@aatsparra.com, odalysparra@aatsparra.com, info@aatsparra.com, npererar@gmail.com';
      $subject = "Add to Newsletter";
      $body = 'Email: ' . $semail . "\n\n" . 'Subject: ' . $subject;
      $success = @mail($email_to, $subject, $body, 'From: <'.$semail.'>');
      $_SESSION['errors']['result']="Thank you, your addition was successful";
      $_SESSION['errors']['success']='true';
      echo json_encode($_SESSION['errors']);
  }
  header("Location: http://aatsparra.com/index.php#sub_form");
  die();
?> 