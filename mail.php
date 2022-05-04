<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";
$recipient = "lubosgulan@seznam.cz";

mail($reciption, $message, $lastname, $mailheader)
or die("ERROR!");

echo"message send";
?>