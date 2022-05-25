<?php
	//assign variables
	$to = "bfaoziyah2@gmail.com";
	$subject = "Enquiry";
	$email_field = $_POST['email'];
	$message = $_POST['message'];
	
	$body = "From: E-Mail: $email_field\n Message:\n $message\n";
	
	echo("Thank you your message has been sent $to");//php echo function
	mail($to, $subject, $body);//php mail function
	
	
?>