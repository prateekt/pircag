<?php

//user creds
$username="mvldorg_admin";
$password="admin";
$database="mvldorg_langtable";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$lang = $_POST['lang'];
$level = $_POST['level'];
$avail = "";


mysql_connect("localhost",$username,$password);
mysql_select_db($database) or die( "Unable to select database");

for($x=0; $x < 28; $x++)  {
	if($_POST['cb'.$x]!="") {
		$avail = $avail . $_POST['cb' . $x] . ", ";
	}
}

$query = "INSERT INTO mentor (name, email, phone, lang, level, available) VALUES ('".$name."','".$email."','".$phone."','".$lang."','".$level."','".$avail."')";
mysql_query($query);
mysql_close();

echo "Your application has been received.<BR>";
echo "<a href=\"http://www.pircusc.com\">Back to PIRC homepage</a>";
?>
