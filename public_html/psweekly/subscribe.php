<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN">

<html>
<head>
<title>Parkside International Residential College</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #990000;
}
.style2 {font-size: medium}
.style4 {font-size: medium; font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; color: #990000; }
-->
</style>
</head>
<body>
<? include("../inc/header.txt"); ?>
<td align="center" valign="top" bgcolor="#FFCC00"><blockquote>
  <img src="psweekly_banner.jpg" width="792" height="190" align="baseline">
  <p class="style1">
  <span class="style2">Stay on top of PIRC news with our new email newsletter.<br>
  Sign up now!</span></p>

</blockquote>
<form method=GET action="http://www.usc.edu/cgi-bin/form_handler">
	<span class="style4">Email:</span> 
    <input name="FH_Email" type="text" id="FH_Email">
    <input name="GO" type="submit" id="GO" value="GO">
    <input type="hidden" name="FH_Recipients" value="tandonp@usc.edu">
    <input type="hidden" name="FH_Topic" value="Subscription notice">
    <input type="hidden" name="FH_OK_URL" value="http://www-scf.usc.edu/~pirc/psweekly/ok.php">
    <input type="hidden" name="FH_ERROR_URL" value="http://www-scf.usc.edu/~pirc/psweekly/error.php">
</form>
<BR>
</td>
</tr>
</table>
<br>
<? include("../inc/footer.txt"); ?>
</body>
</html>
