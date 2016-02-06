<?php

/*** begin our session ***/
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>UE Artista</title>
  <link rel="shortcut icon" href="webicon.png">
  <link href="welcomecss.css" rel="stylesheet">
</head>
<body style="background-image:url('automnleaf.jpg');background-size:cover;">
	<form action="adminloginconfirm.php" method="post">
	<div class="datetimeA">
	<font class="dateA" >
	<?php
	echo "Today is " . date("Y-m-d") . "<br>";
?></font>
</div>
<div>
	<font class="time" >
	<?php
echo "The time is " . date("h:i:sa");
?></font>
</div>
<div>
<video class="videoABC" autoplay muted loop>
  <source src="UEaavidA.mp4" type="video/mp4">
</video>
</div>

	
<div class="divs" id="unamepcode" >
<td>
<tr>
<div id="inputfields">
<input type="submit" id="login" class="loginbutton" value="Log-in" >
<input type="password" class="textfield" name="admin_pword" onkeypress="return CharValidation(event)"  required>&nbsp;&nbsp;
<font class="textfonts" >Password: </font></tr><tr>
<input type="text" class="textfield" name="admin_uname" onkeypress="return CharValidation(event)"  required>&nbsp;&nbsp;
&nbsp;&nbsp;<font class="textfonts" >Username: </font>
<i><a href="ueaasignup.php" style="color:red;" class="register" >Not yet a Member?</a></i>&nbsp;&nbsp;
<i><a href="ueaahome.php" style="color:snow;" class="visit" >Visit Site as Guest?</a></i>&nbsp;&nbsp;
<div>

</tr>


</td>
</div>
<div id="footer">
<hr class="hrline" />
<font class="footertextA"> University of the East</font><br>
<font class="footertextB"> Artists Alliance</font>
        <div class="container">
		</div>
</div>
		
		
		
		
		
		
		
		
		
		
</form>
</body>
</html>
