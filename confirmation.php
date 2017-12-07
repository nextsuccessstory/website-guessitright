<?php

	$support_email = "customerservice@guessitright.com";
	$support_carname = "Volvo XC90 Special Edition";
	$db_server = "p50mysql151.secureserver.net";
	$db_username = "volvoxc90";
	$db_password = "Volvo1234";
	$db_database = "volvoxc90";

	// CHECK FOR POSTED E-MAIL
	$user_email = $_POST["email"];
	$user_guess = $_POST["numberGuess"];
	$user_optin = $_POST["chkOptIn"];

	if($user_optin == "") {
		$user_optin = "N";
	}

	if ($user_email != "") {
		// CONNECT TO DATABASE
		$db_connection = mysql_connect($db_server, $db_username, $db_password);
		mysql_select_db($db_database, $db_connection);
	
		// STORE E-MAIL ADDRESS
		print("
			INSERT INTO users(email, guess, zipcode, optin, created) 
				VALUES('".$user_email."', ".$user_guess.", '', '".$user_optin."', NOW())
		");
		mysql_query("
			INSERT INTO users(email, guess, zipcode, optin, created) 
				VALUES('".$user_email."', ".$user_guess.", '', '".$user_optin."', NOW())
		");
		
		// SEND E-MAIL
		$email_to = $support_email;
		$email_from = $user_email;
		$email_subject = "A guess has been submitted on GuessItRight.com from " . $user_email;
		$email_body = "A new contestant has registered to win a " . $support_carname . ".<br><br>
			<strong>Information recorded:</strong><br><br>" . 
			"E-mail: " . $user_email . "<br>
			Guess: " . $user_guess . "<br>
			Opt-in: " . $user_optin . " (Y for yes, N for no)";
		$email_headers  = "From: " . $user_email . "\r\n"; 
		$email_headers .= "Content-type: text/html\r\n";
		
		mail($email_to, $email_subject, $email_body, $email_headers);		
		
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
<script>

	function OnSubmit_TestDriveForm() {
		retVal = true;
		
		var fieldZipcode = document.getElementById("zipcode");
		
		if (fieldZipcode.value == "") {
			alert("Your zip code is missing. Please enter your zip code first before pressing the send button.");
			retVal = false;
		} 
		
		return retVal;
	}

</script>
<script src="scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<p><!-- begin AdBrite, Sign-ups tracking -->
<img border="0" hspace="0" vspace="0" width="1" height="1" src="http://stats.adbrite.com/stats/stats.gif?_uid=460377&_pid=1" />
<!-- end AdBrite, Sign-ups tracking -->
</p>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="900" border="0" cellpadding="0" cellspacing="0" id="tblSectionConfirmation">
        <tr>
          <td height="140" align="center" valign="top" background="images/confirm_section_top.jpg">&nbsp;</td>
        </tr>
        <tr>
          <td height="176" align="center" valign="bottom" background="images/confirm_section_center.jpg"><form name="frmTestDrive" method="post" action="testdrive.php"  onSubmit="return OnSubmit_TestDriveForm()">
            <p>
              <input name="zipcode" type="text" class="text_large_red" id="zipcode" maxlength="5">
              <input name="email" type="hidden" class="text_large_red" id="email" value="<?php print($user_email); ?>">
  &nbsp;&nbsp;
              <input name="btnSubmit" type="submit" class="text_large_black" id="btnSubmit" value="Send">
            </p>
            </form>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </td>
        </tr>
        <tr>
          <td height="284" align="center" valign="middle" background="images/confirm_section_bottom.jpg"><a href="cga_volvo_coupon.pdf" target="_blank"><img src="images/creative_cga_coupon_0.jpg" alt="California's Great America $10 Coupon" width="562" height="243" border="0"></a></td>
        </tr>
      </table>      </td>
  </tr>
  <tr>
    <td align="center" valign="top"><p>&nbsp;</p>    </td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
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
