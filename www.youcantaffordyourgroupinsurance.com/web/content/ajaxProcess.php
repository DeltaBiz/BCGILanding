<?php
if(!empty($_POST['Name']) && !empty($_POST['EmailPhone'])) {
	require_once "Mail.php";
 
	$from = "Capture <capture@youcantaffordyourgroupinsurance.com>";
	$to = "Brian <brian@bcgibenefits.com>";
	//$to = "Shane Todhunter <shane@delta-biz.com>";
	$subject = "Lead Captured from: ".$_POST['LandingPage']."\r\n\r\n";
	$body = "Lead Captured from: ".$_POST['LandingPage']."\r\n\r\n"."Name: ".$_POST['Name']."\r\n\r\nEmail/Phone: ".$_POST['EmailPhone']."\r\n\r\n Thanks!";
	 
	$host = "mail.emailsrvr.com";
	$username = "capture@youcantaffordyourgroupinsurance.com";
	$password = "Van2011!";
	 
	$headers = array ('From' => $from,
	  'To' => $to,
	  'Subject' => $subject);
	$smtp = Mail::factory('smtp',
	  array ('host' => $host,
	    'auth' => true,
	    'username' => $username,
	    'password' => $password));
	 
	$mail = $smtp->send($to, $headers, $body);
	 
	if (PEAR::isError($mail)) {
	  echo("<p>" . $mail->getMessage() . "</p>");
	} else {
	  echo("<p>Thank You for your submission. Message successfully sent!</p><p>Close this Window to go back to the Video.</p>");
	}
}	
else echo 'There was an error with your submission. Please try again or if the problem persists contact us directly by telephone at 604-617-7222.';	
?>