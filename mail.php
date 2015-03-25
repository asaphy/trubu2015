<?php
$name = $_POST['name'];
$email = $_POST['email'];

$to = "asaph.yuan@gmail.com";
$subject = "True BU Email from: " $name;
$message = $_POST['message'];
$from = $email;
$headers = "From:" . $name;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
