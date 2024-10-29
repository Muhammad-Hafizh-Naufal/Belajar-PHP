<?php

$to = "noval1122567@gmail.com";
$subject = "Test Email";
$message = "<h1>Ngetes fitur send email</h1>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: webmaster@localhost" . "\r\n";
$headers .= "Cc: noval1122567@gmail.com" . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent";
} else {
    echo "Email sending failed.";
}

?>
