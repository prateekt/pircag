<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Parkside Weekly</title>
    
<?
$calendar[0] = 
"http://www.google.com/calendar/feeds/p1jkqpkrqeltabq915v3nq7k9k@group.calendar.google.com/public/basic";
$cache_location="";
$dateformat="D j F, Y: g.ia"; // Thursday, 10 March - see http://www.php.net/date for details	
$gcalmanager_location = "gcal_api/GCalManager.inc";
include ($gcalmanager_location);
$g = new GCalManager();
$beginTimeStr = $g->getBeginTimeStr(mktime());
$endTimeStr = $g->getEndTimeStr(mktime() + 7*24*60*60);
$events = $g->getEventsListing($beginTimeStr, $endTimeStr, $calendar, "", 5000000);

?>

</head>
	
	<body>
	<table width="792" border="0" cellpadding="0" cellspacing="0">
	  <tr>
		<td width="792"><img src="full_banner.jpg" width="792" height="190" /></td>
	  </tr>
	  <tr>
		<td valign="top"><table width="100%" border="1" cellspacing="0" cellpadding="0">
          <tr>
            <td width="17%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>
                	<div align="center" style="
                        background-color: #CCCCCC;
                        text-align: center;
                        font-family: Verdana; 
                        font-weight: bold; 
                        font-size: 11px; 
                        color: #990000; 
                        padding-top:         5px;
                        padding-bottom:      5px;
                        padding-left:       5px;
                        padding-right:      5px;
					">Search Events</div>              	</td>
              </tr>
              <tr>
                <td><form id="form1" name="form1" method="post" action="">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76%"><input name="textfield" type="text" size="17" /></td>
                        <td width="24%"><input type="submit" name="Submit" value="Go" /></td>
                      </tr>
                    </table>
                </form></td>
              </tr>
              <tr>
                <td>&nbsp; </td>
              </tr>
              <tr>
                <td style="
                    background-color: #CCCCCC; 
                    text-align: center; 
                    font-family: Verdana; 
                    font-weight: bold; 
                    font-size: 11px; 
                    color: #990000; 
                    padding-top:         5px;
                    padding-bottom:      5px;
                    padding-left:       5px;
                    padding-right:      5px;
                ">Headlines</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
			<?php			  
			  	$size=0;
    			foreach($events as $event) {
    				echo "<tr><td>
        				 <div align=\"center\"><a style=\"					
							text-align: center; 
							font-family: Verdana; 
							font-size: 11px; 
							color: #990000; 
							text-decoration:    none;
							padding-top:         0px;
							padding-bottom:      0px;
							padding-left:       0px;
							padding-right:      0px;
							\" 
						href=\"#".$x."\">".$event['title'] ."</a><br><br>
        				</td></tr>";
					$x = $x + 1;
	    		}
				$size = $x;
			?>
            </table></td>
            <td width="83%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td bgcolor="#FEF1BD" style="
                    text-align: center; 
                    font-family: Verdana; 
                    font-size: 20px; 
                    color: #990000; 
                    padding-top:         5px;
                    padding-bottom:      5px;
                    padding-left:       5px;
                    padding-right:      5px;                
                "><?php echo date("D F j, Y"); ?></td>
              </tr>
              <tr>
                <td height="3" style="background-color: #990000;"></td>
              </tr>
			
		<?php
			$x=0;
			foreach($events as $event) {
				echo "<tr><td>";

				echo "<font style=\" 
					text-align: left;
					font-family: Verdana; 
					font-size: 19px; 
					color: #990000; 
				\">
				<a name=\"" . $x ."\">" . $event['title'] . "</A><br><br></font>";

	    		echo "<font style=\" 
						text-align: left;
						font-family: Verdana; 
						font-size: 15px; 
						font-weight: bold;
						color: #000000; 
					\">
				Date: " . date("D F j, Y",$event['beginTime']) . "<br>";
        		if($event['where'])
					echo "Place: " . $event['where'] . "<br>";
		       	echo "Time: " . date("g:ia",$event['beginTime']). " - " .date("g:ia",$event['endTime']) . "</font><br>";
   			     if($event['desc'])
        			echo "<br><br><font style=\"					
						text-align: left;
						font-family: Verdana; 
						font-size: 12px; 
						color: #000000; 
					\">". $event['desc']. "</font><br>";
					echo "<br></td></tr>";
		         if(($x+1)!= $size)
         			echo "<tr><td height=\"3\" style=\"background-color: #990000;\"></td></tr>";
				$x = $x + 1;
			}
		?>
            </table></td>
          </tr>
        </table></td>
	  </tr>
	  <tr>
		<td><br />
		  <table width="792" border="1" cellpadding="0" cellspacing="0" bordercolor="#990000">
			<tr>
			  <td bgcolor="#FEF1BD"><p>
              <font style="
                text-align: left;
                font-family: Verdana; 
                font-size: 10px; 
                color: #000000;
              ">If you would like to unsubscribe from Parkside Weekly, email tandonp@usc.edu.<br />
				  <br />
			  Questions? Comments? Suggestions? Email <a href="mailto:tandonp@usc.edu">tandonp@usc.edu</a>. </font></p>          </td>
			</tr>
		  </table></td>
	  </tr>
	</table>
	</body>
	</html>