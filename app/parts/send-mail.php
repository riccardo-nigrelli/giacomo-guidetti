<?php

  $name = trim($_POST['name']);
  $cognome = trim($_POST['cognome']);
  $email = trim($_POST['email']);
  $subject = trim($_POST['subject']);
  $messaggio = trim($_POST['message']);

  $to = "";

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if ($name != "" && $cognome != "" && $email != "" && $subject != "" && $message != "") {
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $cognome = filter_var($cognome, FILTER_SANITIZE_STRING);
      $subject = filter_var($subject, FILTER_SANITIZE_STRING);
      $messaggio = filter_var($messaggio, FILTER_SANITIZE_STRING);

      $headers = "From: " .  strip_tags($email) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      
      $message = '<html><body>';
			$message .= "<h4>" . $nome . " " . $cognome . "</h4>" . '<br>' .$messaggio;
      $message .= '</body></html>';
      
      mail($to, $subject, $message, $headers);
			echo "sent";
    }
  }

?>