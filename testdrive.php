<?php

	$support_email = "customerservice@guessitright.com";
	$support_carname = "Volvo XC90 Special Edition";
	$db_server = "p50mysql151.secureserver.net";
	$db_username = "volvoxc90";
	$db_password = "Volvo1234";
	$db_database = "volvoxc90";

	// CHECK FOR POSTED E-MAIL
	$user_email = $_POST["email"];
	$user_zipcode = $_POST["zipcode"];
	
	if ($user_email != "" && $user_zipcode != "" ) {
		// CONNECT TO DATABASE
		$db_connection = mysql_connect($db_server, $db_username, $db_password);
		mysql_select_db($db_database, $db_connection);
		
		// STORE E-MAIL ADDRESS
		mysql_query("
			UPDATE users SET zipcode = '".$user_zipcode."' 
				WHERE email = '".$user_email."'
		");

		// SEND E-MAIL
		if(strtoupper($user_zipcode) != "") {
			$email_to = $support_email;
			$email_from = $user_email;
			$email_subject = "You received an inquery from GuessItRight.com from " . $user_email;
			$email_body = "This person would like to test drive the " . $support_carname . ".<br><br>
				<strong>Contact details:</strong><br><br>" . 
				"E-mail: " . $user_email . "<br>" .
				"Zip Code: " . $user_zipcode;
			$email_headers  = "From: " . $user_email . "\r\n"; 
			$email_headers .= "Content-type: text/html\r\n";
			
			mail($email_to, $email_subject, $email_body, $email_headers);		
		}
		
		mysql_close($db_connection);
	} else {
		header("Location: index.php");
	}
	

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Guess It Right! Contest: Win a 2008 Volvo XC90 Special Edition!</title>
<link href="stylesheets/general.css" rel="stylesheet" type="text/css">

<!-- THICKBOX & JQUERY -->
<link rel="stylesheet" href="stylesheets/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="scripts/functions_jquery.js"></script>
<script type="text/javascript" src="scripts/functions_thickbox.js"></script>

</head>

<body>
<p><!-- begin AdBrite, Leads tracking -->
<img border="0" hspace="0" vspace="0" width="1" height="1" src="http://stats.adbrite.com/stats/stats.gif?_uid=460377&_pid=2" />
<!-- end AdBrite, Leads tracking -->
</p>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="900" border="0" cellpadding="0" cellspacing="0" id="tblSectionTestDrive">
        <tr>
          <td height="400" align="center" valign="top" background="images/confirm_section_testdrive.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" valign="top">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
      </table>      </td>
  </tr>
  <tr>
    <td align="center" valign="top"><p><br>
    </p>
    <p class="text_medium_white"><img src="images/main_logo.jpg" width="100" height="17" align="absmiddle"><br>
      <br>
      <a href="privacy.php" class="link_white">Privacy Policy</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="terms.php" class="link_white">Terms Of Use</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="rules.php" class="link_white">Official Rules</a></p></td>
  </tr>
</table>
<p>&nbsp;</p>

<map name="mapVolvoLinks">
<area shape="rect" coords="14,79,150,125" href="http://www.volvocars.com/us/models/xc90/Pages/default.aspx" target="_blank" alt="See the Volvo XC90">
</map>
</body>
</html>
