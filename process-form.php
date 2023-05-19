<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = 'wolfchamp321@gmail.com';
	$subject = 'New message from your website contact form';
	$body = "Name: $name\nEmail: $email\nMessage:\n$message";

	if (mail($to, $subject, $body)) {
		echo 'Thank you for contacting us. We will get back to you soon.';
	} else {
		echo 'There was an error sending your message. Please try again later.';
	}
} else {
	header('Location: contact.php');
}
?>