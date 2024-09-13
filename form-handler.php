<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'exemplodesite@tal.com';

$email_subject = '';

$email_body = "User name: $name.\n".
                "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User message: $message.\n";

$to = "neabi.mo@ifrn.edu.br";

$headers = "De: $email_from \r\n";

$headers .= "Responder a: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Localização: contact.html");

?>
