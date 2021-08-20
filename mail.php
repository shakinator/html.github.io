<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $recipient = "saksham12g@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $mailheader) or die("Error!");
    echo "Thank You!";
?>