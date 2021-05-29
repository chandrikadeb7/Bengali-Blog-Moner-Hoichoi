<?php
if(isset( $_POST['inputName']))
$name = $_POST['inputName'];
if(isset( $_POST['inputEmail']))
$email = $_POST['inputEmail'];
if(isset( $_POST['inputMessage']))
$message = $_POST['inputMessage'];
if(isset( $_POST['inputPhone']))
$phone = $_POST['inputPhone'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "chandrikadeb7@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $phone, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>