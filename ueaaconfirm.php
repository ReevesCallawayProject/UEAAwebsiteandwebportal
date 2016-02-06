<?php
// Start the session
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
<div class="datetime">
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
<div class="divs" id="popupstrip" >
<form action="" method="post">
<fieldset id="confirminfo" class="signupfield">
<legend class="legend" >MEMBERSHIP CONFIMATION</legend>
<table width=500px;>
<div><br>
<font class="texttitle" size="4" >Name: </font>
<font class="textinfo" ><?php echo $_POST["sname_mem"];?>, <?php echo $_POST["gname_mem"];?> <?php echo $_POST["mi"];?></font>
<br><br>
<font class="texttitle"size="4">Student No.: </font>
<font class="textinfo" ><?php echo $_POST["sn_mem"];?></font>
<br><br>
<font class="texttitle" size="4">College: </font>
<font class="textinfo" ><?php echo $_POST["college_mem"];?></font>
<br><br>
<font class="texttitle"size="4">Year Level: </font>
<font class="textinfo" ><?php echo $_POST["yrlevel_mem"];?></font>
<br><br>
<font class="texttitle" size="4" >Address: </font>
<font class="textinfo" ><?php echo $_POST["address_mem"];?></font>
<br><br>
<font class="texttitle" size="4" >Contact No.: </font>
<font class="textinfo" ><?php echo $_POST["cnum_mem"];?></font>
<br><br>
<font class="texttitle" size="4" >Email Address: </font>
<font class="textinfo" ><?php echo $_POST["email"];?></font>
<br><br>
<font class="texttitle" size="4" >Username: </font>
<font class="textinfo" ><?php echo $_POST["uname_mem"];?></font>
<br><br><br>
<td>
<input type="submit" id="goback" class="submitbutton" value="Go Back" action="ueaasignup.php" ></td>
<td><input type="submit" id="accept" class="submitbutton" value="Accept" action="ueaawelcome.php" ></td>





</div>
</table>
</fieldset>
</form>
<div id="footerA">
<hr class="hrline" />
<font class="footertextA"> University of the East</font><br>
<font class="footertextB"> Artists Alliance</font>
        <div class="container">
		</div>
</div>

</body>
</html>