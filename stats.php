<?php

	session_start();

	$db_server = "p50mysql151.secureserver.net";
	$db_username = "volvoxc90";
	$db_password = "Volvo1234";
	$db_database = "volvoxc90";

	$counter_1 = 0;
	$counter_2 = 0;
	$counter_3 = 0;
	
	$counter_4 = 0;
	$counter_5 = 0;
	$counter_6 = 0;
	
	$counter_7 = "";

	// CONNECT TO DATABASE
	$db_connection = mysql_connect($db_server, $db_username, $db_password);
	mysql_select_db($db_database, $db_connection);

	$sql_result = mysql_query("
		SELECT zipcode, optin, created FROM users ORDER BY created DESC
	");

	while($sql_row = mysql_fetch_row($sql_result))
	{	
		$value_zipcode = $sql_row[0];
		$value_optin = $sql_row[1];
		$value_created = $sql_row[2];
		
		if ($counter_7 == "") {
			$counter_7 = $value_created;
		}
		
		$counter_1++;
		
		if ($value_zipcode != "") {
			$counter_2++;
		}
		
		if (trim(strtoupper($value_optin)) == "Y") {
			$counter_3++;
		}
		
	}
	
	// CALCULATE ACTUAL E-MAIL
	$sql_result = mysql_query("
		SELECT zipcode, optin, email FROM users GROUP BY email
	");
	
	while($sql_row = mysql_fetch_row($sql_result))
	{	
		$value_zipcode = $sql_row[0];
		$value_optin = $sql_row[1];
		
		$counter_4++;
		
		if ($value_zipcode != "") {
			$counter_5++;
		}
		
		if (trim(strtoupper($value_optin)) == "Y") {
			$counter_6++;
		}
		
	}
	
	mysql_close($db_connection);

	$pwd_default = "volvo2";
	$showstats = false;
	if($_SESSION["pwd"] == $pwd_default) {
		$showstats = true;
	}
	if($_POST["pwd"] == $pwd_default) {
		$showstats = true;
		$_SESSION["pwd"] = $pwd_default;
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
<p>&nbsp;</p>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><table width="900" border="0" cellpadding="0" cellspacing="0" class="text_large_white" id="tblSectionTerms">
        <tr>
          <td height="400" align="center" valign="top"><p class="text_xlarge_white"><strong>Contest statistics:</strong></p>
            <p>&nbsp;</p>
            <div style="display:<?php if (!$showstats) { print('block'); } else { print('none');  } ?> ">
            <form name="form1" method="post" action="stats.php">
              You have to enter a password to see the statistics data:
              <br>
              <br>
              <input type="text" name="pwd" id="pwd">
              <br>
              <br>
              &nbsp;
              <input type="submit" name="btnAccess" id="btnAccess" value="Show statistics">
            </form>
            </div>
            <?php
			
				if ($showstats == true) {
					print(" 
						<p>&nbsp;</p>
						<p class='text_xlarge_white'>&nbsp;</p>
						<p class='text_xlarge_white'>&nbsp;</p>
						<p>&nbsp;</p>
						<p><span class='text_xlarge_blue'><strong>" . $counter_1 . "</strong></span> has given a guess. Last guess was made on the <span class='text_xlarge_blue'><strong>" . $counter_7 . "</strong></span></p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>Of the <span class='text_xlarge_blue'><strong>" . $counter_1 . "</strong></span> guesses <span class='text_xlarge_blue'><strong>" . $counter_4 . "</strong></span> was non-duplicated e-mail addresses (actual unique e-mail addresses).</p>
						<p>&nbsp;</p>
						<p>From those unique e-mail addresses <span class='text_xlarge_blue'><strong>" . $counter_6 . "</strong></span> has accepted to receive more information (opt-in).</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
					  <p><span class='text_xlarge_blue'><strong>" . $counter_5 . "</strong></span> has inquired for a test drive.</p>
            		");
				}
			?>
          </td>
        </tr>
    </table>      </td>
  </tr>
  <tr>
    <td align="center" valign="top"><p><br>
    </p>
    <p class="text_medium_white"><img src="images/main_logo.jpg" width="100" height="17" align="absmiddle"><br>
      <br>
    <a href="index.php" class="link_white">Back to main page</a><a href="rules.php" class="link_white"></a> </p></td>
  </tr>
</table>
<p>&nbsp;</p>

<map name="mapVolvoLinks">
<area shape="rect" coords="14,79,150,125" href="http://www.volvocars.com/us/models/xc90/Pages/default.aspx" target="_blank" alt="See the Volvo XC90">
</map>
</body>
</html>
