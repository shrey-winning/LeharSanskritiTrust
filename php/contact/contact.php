<?php
 
 $to = "arslan.b4u@gmail.com";

 $email_from = "info@nonprofit.com";
 
 $subject = "Contact Us";

 $name = $_REQUEST['name'];
 
 $email = $_REQUEST['email'];
 
 $message = "<b>Name:</b> ". $name ."<br>";
 $message .= "<b>Email:</b> ". $email."<br>";
 $message .= "<b>Message:</b>". $_REQUEST['message'];

 
 $headers = "From: nonProfit $email \r\n";
 
 $headers = "Cc:info@nonprofit.com \r\n";
 
 $headers .= "MIME-Version: 1.0\r\n";
 
 $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
 
 $sent = mail($to, $subject, $message, $headers);
 
 if($sent)
 
 {echo "email successfully sent"; }
 
 else
 
 {echo "email is not sent, there is some error!"; }
 
 ?>