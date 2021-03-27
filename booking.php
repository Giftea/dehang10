<?php
$subject = 'New Booking by Client'; // Subject of your email
$to = 'info@designesia.com';  //Recipient's E-mail
$emailTo = $_POST['email'];
$opt = Trim(stripslashes(implode(",", $_POST['services'])));

$headers = "MIME-Version: 1.1";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$headers .= "From: " . $emailTo . "\r\n"; // Sender's E-mail
$headers .= "Return-Path:". $emailTo;

$message = 'Name : ' . $_POST['name'] . "\n";
$message .= 'Email : ' . $_POST['email'] . "\n";
$message .= 'Phone : ' . $_POST['phone'] . "\n";
$message .= 'Services : ' .$opt . "\n";
$message .= 'Stylist : ' . $_POST['stylist'] . "\n";
$message .= 'Date : ' . $_POST['date'] . "\n";
$message .= 'Time : ' . $_POST['time'] . "\n";
$message .= 'Message : ' . $_POST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>