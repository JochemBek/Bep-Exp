<?php
	
	$to			= $_POST['email'];
	$message	= $_POST['bericht'];

	$subject 	= "Tips van Besparingshulp.nl";

	// To send HTML mail, the Content-type header must be set
	$headers  	= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'From: Besparingshulp.nl - Alain Starke <A.D.Starke@tue.nl>' . "\r\n";
	$headers   .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Mail it
	mail($to, $subject, $message, $headers);

?>