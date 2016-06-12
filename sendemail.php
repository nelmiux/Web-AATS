<?php
  session_start();
  // define variables and set to empty values
  $first_name = $last_name = $email = $phone = $comment = $result = "";
  $_SESSION['errors']=array();

    if (empty($_POST["first_name"])) {
      $_SESSION['errors']['first_name']= 'First Name is required';
    } else {
      $first_name = test_input($_POST["first_name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/[A-Za-z -']$/",$first_name)) {
        $_SESSION['errors']['first_name']= 'Only letters, a space, a hyphen or an apostrophe allowed on First Name';
      }
    }

    if (empty($_POST["last_name"])) {
      $_SESSION['errors']['last_name']= 'Last Name is required';
    } else {
      $last_name = test_input($_POST["last_name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
        $_SESSION['errors']['last_name']= 'Only letters, a space, a hyphen or an apostrophe allowed on Last Name';
      }
    }
     
    if (empty($_POST["email"])) {
      $_SESSION['errors']['email']= 'Email is required';
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email']= 'Invalid email format';
      }
    }

    if (empty($_POST["phone"])) {
      $phone = "";
    } else {
      $phone = test_input($_POST["phone"]);
      if (!preg_match("/^((([0-9]{3}))|([0-9]{3}))[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4}$/", $phone)) {
        $_SESSION['errors']['phone']= 'Invalid phone format';
      }
    }

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
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
        $_SESSION['errors']['result']="The Form Cannot be Submitted, Validation Errors Ocurred. Please Correct Errors and Send Again";
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
      $subject = "New Message from Website";
      $body = 'First Name: ' . $first_name . "\n\n" . 'Last Name: ' . $last_name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Comment: ' . $comment;
      $success = @mail($email_to, $subject, $body, 'From: <'.$email.'>');
      $_SESSION['errors']['result']="Thank you for contacting us. We will be in touch with you very soon.";
      $_SESSION['errors']['success']='true';
      echo json_encode($_SESSION['errors']);
  }
?> 