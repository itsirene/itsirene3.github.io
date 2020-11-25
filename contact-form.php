<?php
  $name= $POST ['name'];
  $visitor_email = $_POST [email];
  $message = $_POST ['message'];

  $email_from = 'irenetrann@gmail.com';

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name.\n"
                  "User Name: $visitor_.\n"
                    "User Name: $message_.\n"

  $to = "irenetrann@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-to: visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header ("Location: index.html")


?>
