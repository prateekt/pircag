<? 
require_once 'XPertMailer.php';
$email = $_REQUEST["email"];
$statement = $email . " would like to unsubscribe.";
set_time_limit(0);
error_reporting(false); 
define('PRINT_ERROR', false); 
$mail = new XPertMailer(SMTP_RELAY_CLIENT, 'pircusc.com');
$mail->auth('pirc', 'nopassword', AUTH_DETECT, SSL_TRUE, 465);
$mail->port(25);
$mail->timeout(10);
$mail->priority(P_HIGH);
$mail->from('pircag@gmail.com', 'PIRC');
$send = $mail->send('tandonp@usc.edu', 'Parkside Weekly Update', 'text version'.CRLF.'new line', $statement, 'UTF-8');
echo $send ? "You have been unsubscribed. <br><br> Click to close <a href=\"javascript:window.close();\">window</a>." : "Unknown Error - please try again.";
?>