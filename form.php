<?php $name = $message = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);
$formcontent="From: $name \n $email \n Message: $message";
$recipient = "eandvdesign@gmail.com";
$subject = "Contact Page";
$mailheader = "From: eandvdesign@gmail.com";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "$formcontent";
?>