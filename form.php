<?php $name = htmlspecialchars($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);
$location = htmlspecialchars($_POST['location']);
if ( empty($email) || empty($message)  || empty($name) ){
  echo "nothing";
}
else {
  $formcontent="Location: $location \nFrom: $name\n $email\n Message: $message";
  $recipient = "eandvdesign@gmail.com";
  $subject = "Contact Page";
  $mailheader = "From: eandvdesign@gmail.com";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
}

?>
