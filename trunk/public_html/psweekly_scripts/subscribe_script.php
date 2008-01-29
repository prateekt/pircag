<? 
require_once 'XPertMailer.php';
$email = $_REQUEST["email"];
$statement = $email .  " would like to subscribe.";
if(strcmp($email,"")==0 || strpos($email, "@") === false) {
	echo "Please enter a valid email address.<br><br>Return to subscription <a href=\"http://www.pircusc.com/psweekly/subscribe.php\">page</a>.";
	return;
}
if(strpos($theData, $email . " ") === false) {
	//set_time_limit(5000);
	error_reporting(true); 
	define('PRINT_ERROR', false); 
	$mail = new XPertMailer(SMTP_RELAY_CLIENT, 'pircusc.com');
	$mail->auth('pirc', 'nopassword', AUTH_DETECT, SSL_TRUE, 465);
	$mail->port(25);
	$mail->timeout(10);
	$mail->priority(P_HIGH);
	$mail->from('pircusc@usc.edu', 'PIRC');
	$send = $mail->send('tandonp@usc.edu', 'Parkside Weekly Update', 'text version'.CRLF.'new line', $statement, 'UTF-8');
	echo $send ? "Thank you for signing up for Parkside Weekly. Your first issue will come next week.<br><br>Return to main <a href=\"http://www.pircusc.com\">page</a>.." : "Unknown Error - please try again.";
	return;
}
else {
	echo "Our records indicate that this email address is already subscribed to Parkside Weekly. If you believe you are receiving this message in error, please send an email to <a href=\"mailto:tandonp@usc.edu\">tandonp@usc.edu</a><br><br>Return to subscription <a href=\"http://www.pircusc.com/psweekly/subscribe.php\">page</a>.";
	return;
}
	
?>