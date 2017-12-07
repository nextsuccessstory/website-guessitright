<?php
	//header("Location: intro.php");
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

	function OnSubmit_GuessForm() {
		retVal = true;
		
		var fieldEmail = document.getElementById("email");
		var fieldGuess = document.getElementById("numberGuess");
		
		if (fieldEmail.value == "" || fieldGuess.value == "") {
			alert("One or more of the required fileds (e-mail or your guess) is missing. Please fill the missing fields and try again.");
			retVal = false;
		} 
		
		return retVal;
	}

</script>

</head>

<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="117" align="center" valign="top"><table width="900" border="0" cellpadding="0" cellspacing="0" id="tblSectionCommercial">
        <tr>
          <td height="85"><img src="images/main_section_header.jpg" width="900" height="85" border="0" usemap="#mapVolvoBayArea"></td>
        </tr>
        <tr>
          <td height="80" background="images/main_section_top.jpg">&nbsp;</td>
        </tr>
        <tr>
          <td height="243" align="center" valign="middle" background="images/main_section_center.jpg">
            <table width="900" border="0" cellpadding="0" cellspacing="0" id="tblCommercialVideo">
                    <tr>
                      <td width="210"><img src="images/main_section_left.jpg" alt="See the Volvo XC90" width="210" height="243" border="0" usemap="#mapVolvoLinks"></td>
                      <td align="center" valign="middle"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" name="objVolvoVideo" width="320" height="240" align="middle" id="objVolvoVideo">
                        <param name=allowFlashAutoInstall value=true>
                        <param name=Flashvars value="videoFile=volvo_video.flv">
                        <param name="allowScriptAccess" value="sameDomain" />
                        <param name="movie" value="flvplayer.swf" />
                        <param name="quality" value="high" />
                        <param name="bgcolor" value="#ffffff" />
                        <embed src="flvplayer.swf" scale="showall" width="320" height="240" align="middle" swliveconnect="true" flashvars="videoFile=volvo_video.flv" quality="high" bgcolor="#ffffff" name="objVolvoVideo" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" allowflashautoinstall="true" />          
            </object></td>
                      <td width="225"><img src="images/main_section_right.jpg" width="225" height="243"></td>
                    </tr>
            </table>          </td>
        </tr>
        <tr>
          <td height="127" background="images/main_section_bottom.jpg">&nbsp;</td>
        </tr>
      </table>
      <img src="images/main_section_lower_top.jpg" alt="Win a Volvo XC90!" width="900"></td>
  </tr>
  <tr>
    <td height="333" align="center" valign="top" background="images/main_section_lower_bottom.jpg" class="text_large_white"><form action="/confirmation.php" method="post" name="GuessForm" id="GuessForm" onSubmit="return OnSubmit_GuessForm()">
      <table width="700" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="550">
               <table width="450" border="0" cellspacing="5" cellpadding="0">
                <tr>
                  <td width="150" align="left" valign="middle"><label><strong>E-mail address:</strong></label></td>
                  <td align="center" valign="middle"><input name="email" type="text" class="text_medium_red" id="email" size="50"></td>
                </tr>
                <tr>
                  <td align="left" valign="middle"><label><strong>Your guess:</strong></label></td>
                  <td align="center" valign="middle"><input name="numberGuess" type="text" class="text_medium_red" id="numberGuess" size="50"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center" valign="middle" class="text_medium_white"><input name="chkOptIn" type="checkbox" class="text_small_white" id="chkOptIn" value="Y" checked>
                    Keep this box checked to opt-in to receive additional information.</td>
                 </tr>
                <tr>
                  <td colspan="2" align="center" valign="middle" class="text_medium_white"><input name="submitGuess" type="submit" class="text_medium_black" id="submitGuess"  value="Submit your guess!"></td>
                </tr>
              </table>          </td>
          <td width="250"><img src="images/main_section_cga.jpg" width="250" height="125"></td>
        </tr>
      </table>
      <p>&nbsp;</p>

      </form>
      <br>
    <p><a href="images/car_view_1.jpg" class="thickbox"><img src="images/car_view_1_tn.jpg" width="500" height="259" border="0" style="background-repeat:no-repeat; background-position:top;"></a></p>
    <p>&nbsp;</p>
    </td>
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
<area shape="rect" coords="10,72,165,117" href="http://www.bayarea-volvodealers.com/Public/LeaseOffer.aspx?G=27f625ac-706e-492c-a608-9a720111decd" target="_blank" alt="See the Volvo XC90">
</map>

<map name="mapVolvoBayArea"><area shape="rect" coords="355,23,869,64" href="http://www.bayareavolvodealers.com" target="_blank" alt="Bay Area Volvo Dealers">
</map></body>
</html>
