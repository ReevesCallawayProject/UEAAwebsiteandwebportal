<?php
if(isset($_POST['phpro_username']))
{
        session_start();
        $_SESSION['name']=$_POST['phpro_username'];
        //Storing the name of user in SESSION variable. 
		 header("location: adminloginconfirm.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>UE Artista</title>
  <link rel="shortcut icon" href="webicon.png">
  <link href="welcomecss.css" rel="stylesheet">
</head>
<body style="background-color:snow;">
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

</div>

	
<div class="divs" id="unamepcode" >
<td>
<tr>
<div id="inputfields">
<td>

<i><a href="ueaahome.php" style="color:snow;margin-left:20px;" class="visit" >Visit Site as Guest?</a></i>&nbsp;&nbsp;

</td>
<td>
<font id="admin_username" class="textfonts" >Username: </font>
</td>
<td>
<input type="text" id="admin_username" name="phpro_username" value="" maxlength="20" />&nbsp;&nbsp;
</td>
<td>
<font id="admin_password" class="textfonts" >Password: </font>
</td>
<td>
<input type="password" id="admin_password" name="phpro_password" value="" maxlength="20" />&nbsp;&nbsp;
</td>
<td>
<input type="submit" id="login" class="loginbutton" value="Log-in" >
</td>


</td>
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
