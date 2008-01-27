<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN">

<html>
<head>
<title>Parkside International Residential College</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
<? include("../inc/header.txt"); ?>
<h3>Contact</h3>
<p>Comments and suggestions can be sent via this form or by email. Direct comments, suggestions, etc. to <a href="mailto:&#112;ir&#99;&#64;us&#99;&#46;ed&#117;">&#112;ir&#99;&#64;us&#99;&#46;ed&#117;</a> Direct website-related comments, suggestions, etc. to <a href="mailto:tandonp@usc.edu">tandonp@usc.edu</a>
<p>Please note that this email address is used by Parkside Area Government and <b>not</b> the Parkside CSC or Housing Services.
<br><br>

<form method=get action="http://www.usc.edu/cgi-bin/form_handler">
<input type="hidden" name="FH_Recipients" value="tandonp@usc.edu">
<input type="hidden" name="FH_Topic" value="pirc form submission">
<input type="hidden" name="FH_OK_URL" 
   value="http://www-scf.usc.edu/~pirc/ok.php">
<input type="hidden" name="FH_ERROR_URL" 
   value="http://www-scf.usc.edu/~pirc/error.php">
<input type="hidden" name="FH_Display_Order" value="FH_Name,FH_Email,comments">
<input type="hidden" name="FH_Required_Fields" value="FH_Name,FH_Email,comments">
Name:<br><input name="FH_Name" type="text"><p> 
Email:<br><input name="FH_Email" type="text"><p> 
Subject:<br><input name="FH_Subject" type="text"><p>
Comments:<br> 
<textarea name="comments" cols=40 rows=5>
</textarea>
<p>
<input type="submit" value="Submit"><input type="reset" value="Reset"></p>
</form>
<? include("../inc/footer.txt"); ?>
</body>
</html>
