<?php
//Internal workings
set_time_limit(0);
error_reporting(false); 
define('PRINT_ERROR', false); 
require_once 'XPertMailer.php';
$mail = new XPertMailer(SMTP_RELAY_CLIENT, 'pircusc.com');
$mail->auth('pirc', 'nopassword', AUTH_DETECT, SSL_TRUE, 465);
$mail->port(25);
$mail->timeout(10);
$mail->priority(P_HIGH);
$mail->from('pircusc@usc.edu', 'PIRC');
$send = $mail->send('tandonp@usc.edu', 'Parkside Weekly Update', 'text version'.CRLF.'new line', $html, 'UTF-8');
echo $send ? "Done." : "Error.";
?>