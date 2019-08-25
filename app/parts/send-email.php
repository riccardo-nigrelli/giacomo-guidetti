<?php

  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
  $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING);
  $mex = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

  $to = "guidojacky@yahoo.it";

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if ($name != "" && $surname != "" && $email != "" && $subject != "" && $mex != "") {
    
      $headers = "From: " .  strip_tags($email) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      
      $message = '<html><body>';
      $message .= "<h4> Nome: " . $name . ", Cognome: " . $surname . "</h4>";
      $message .= "<br>" . "<p>" . $mex . "</p>";
      $message .= '</body></html>';
      
      mail($to, $subject, $message, $headers);
			echo "sent";
    }
    else "fields";
  }

?>