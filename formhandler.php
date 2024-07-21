<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'https://rumeth2007.github.io/wesley.web';
$email_subject = 'New Form Submission';
$email_body = "User Name :$name.\n".
               "User Email :$visitor_email.\n"
               "User Message :$message.\n";


$to = 'rumethromal65@gmail.com';
$headers = "From: $email_from\r\n";

$headers = "Reply-To: $visitor_email\r\n";

email($to,$email_subject,$email_body,$headers);

header("Location: login.html");
?>