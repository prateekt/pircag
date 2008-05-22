<?php

//user creds
$username="mvldorg_admin";
$password="admin";
$database="mvldorg_langtable";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysql_connect("localhost",$username,$password);
mysql_select_db($database) or die( "Unable to select database");

//populate database
if($_POST['TarinaFrench']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['TarinaFrench']."')";
	mysql_query($query);
	echo "tarina populated";
}

if($_POST['LeFrench']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['LeFrench']."')";
	mysql_query($query);
}

if($_POST['FabioItalian']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['FabioItalian']."')";
	mysql_query($query);
}

if($_POST['AlvaroSpanish']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['AlvaroSpanish']."')";
	mysql_query($query);
}

if($_POST['FeiYuChinese']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['FeiYuChinese']."')";
	mysql_query($query);
}

if($_POST['TakafumiJapanese']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['TakafumiJapanese']."')";
	mysql_query($query);
}

if($_POST['ElleChinese']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['ElleChinese']."')";
	mysql_query($query);
}

if($_POST['LuciaEnglish']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['LuciaEnglish']."')";
	mysql_query($query);
}

if($_POST['LuciaSpanish']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['LuciaSpanish']."')";
	mysql_query($query);
}

if($_POST['MichaelPortuguese']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['MichaelPortuguese']."')";
	mysql_query($query);
}

if($_POST['RudyHebrew']!="") {
	$query = "INSERT INTO ptable (name, email, phone, langtable) VALUES ('".$name."','".$email."','".$phone."','".$_POST['RudyHebrew']."')";
	mysql_query($query);
}

//mysql_close();

//send email
$from = "languagetables@mvld.org";
$host = "mvld.org";
$username = "mvldorg";
$password = "goodpassword";
$subject = "Language Table Confirmation";
$body = "Thank you for signing up for the Parkside 2007-2007 Language Tables. <br> Please visit our online portal http://www.mvld.org/langtableportal to look at the dates and times of language tables you might be interested in. Simply show up for the language table that you would like to join. You can use these forums to get in touch with the instructor in case you have any questions. Instructors should be posting lesson plans and documents on these forums as well. We look forward to working with you to make this an exciting language tables season. <br><br> -Parkside Area Government <br>  Questions? Comments? Concerns? Email tandonp@usc.edu <br>"; 

echo "Your application has been received. <BR> <BR> Thank you for signing up for the Parkside 2007-2007 Language Tables. <br> Please visit our online portal <a href=\"http://www.mvld.org/langtableportal\">http://www.mvld.org/langtableportal </a>to look at the dates and times of language tables you might be interested in. Simply show up for the language table that you would like to join. You can use these forums to get in touch with the instructor in case you have any questions. Instructors should be posting lesson plans and documents on these forums as well. We look forward to working with you to make this an exciting language tables season. <br><br> -Parkside Area Government <br>  Questions? Comments? Concerns? Email tandonp@usc.edu <br>";
echo "<a href=\"http://www.pircusc.com\">Back to PIRC homepage</a>";
?>
