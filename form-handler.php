<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'exemplodesite@tal.com';

$email_subject = '';

$email_body = "User name: $name.\n".
                "User email: $visitor_email.\n".
                "User subject: $subject.\n".
                "User message: $message.\n";

$to = "email.do.neabi@gmail.com"

?>
