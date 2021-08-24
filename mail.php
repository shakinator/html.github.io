<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$jobslist = $POST['jobslist'];
$formcontent="From: $name \n Message: $message";
$recipient = "saksham12g@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>