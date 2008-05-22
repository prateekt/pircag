<html>
<head><title>(Title Here)</title></head>
<body>
<?php
$username="mvldorg_admin";
$password="admin";
$db="mvldorg_langtable";
mysql_connect("localhost",$username,$password);
mysql_select_db($db) or die( "Unable to select database");
$result = mysql_query( "SELECT name, email, phone FROM mentor" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
print "There are $num_rows records.<P>";
print "<table width=200 border=1>\n";
while ($get_info = mysql_fetch_row($result)){
print "<tr>\n";
foreach ($get_info as $field)
print "\t<td><font face=arial size=1/>$field</font></td>\n";
print "</tr>\n";
}
print "</table>\n";
mysql_close();

//print emails
mysql_connect("localhost",$username,$password);
mysql_select_db($db) or die( "Unable to select database");
$result = mysql_query( "SELECT email FROM mentor" );
$str = "";
while ($get_info = mysql_fetch_row($result)){
	foreach($get_info as $field) {
		if($field!="")
			$str = $str . $field . ",";
	}
}
echo "<br><br>Mentor Mailing List: <br>";
echo $str;
mysql_close();

?>
</body>
</html>