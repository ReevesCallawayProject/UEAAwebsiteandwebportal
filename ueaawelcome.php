<?php
if(isset($_POST['phpro_username']))
{
        session_start();
        $_SESSION['phpro_username']=$_POST['phpro_username'];
        //Storing the name of user in SESSION variable. 
		 header("location: login_submit.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>UE Artista</title>
  <link rel="shortcut icon" href="webicon.png">
  <link href="welcomecss.css" rel="stylesheet">
</head>
<body style="background-color:black;">
	<form action="login_submit.php" method="post">
	
		<div class="divs" id="photostrip" >
			<td>
			<input type="button" class="logotab" name="homebtnlogo" id="homelogo" value="UE Artista" onclick="window.location='ueaahome.php'" />
<font class="uetext">University of the East</font>
			</td>
			<td>
			<div class="slideshow" >
				<style>
				.fadein { 
				position:relative; height:332px; width:500px; margin:0 auto;
				background: url("slideshow-bg.png") repeat-x scroll left top transparent;
				padding: 10px;
				}
				.fadein img { position:absolute; left:10px; top:10px; }
				</style>
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
				<script>
				$(function(){
				$('.fadein img:gt(0)').hide();
				setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 5000);
				});
				</script>
				<body>
					<td>
					<div class="fadein">
					<img class="imageslideshowA" src="artworkA.jpg">
					<img class="imageslideshowA" src="artworkB.jpg">
					<img class="imageslideshowA" src="artworkC.jpg">
					</div>
					</td>
				</body>
				</div>
				</td>
			<td>
			<div class="slideshow" >
				<style>
				.fadeinB { 
				position:relative; height:332px; width:500px; margin:0 auto;
				background: url("slideshow-bg.png") repeat-x scroll left top transparent;
				padding: 10px;
				}
				.fadeinB img { position:absolute; left:10px; top:10px; }
				</style>
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
				<script>
				$(function(){
				$('.fadeinB img:gt(0)').hide();
				setInterval(function(){$('.fadeinB :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadeinB');}, 6000);
				});
				</script>
				<body>
					<td>
					<div class="fadeinB" >
					<img class="imageslideshowB" src="artworkD.jpg">
					<img class="imageslideshowB" src="artworkE.jpg">
					<img class="imageslideshowB" src="artworkF.jpg">
					</div>
					</td>
				</body>
			</div>
			</td>
<td><div class="slideshow" >
<style>
.fadeinC { 
position:relative; height:332px; width:500px; margin:0 auto;
background: url("slideshow-bg.png") repeat-x scroll left top transparent;
padding: 10px;
 }
.fadeinC img { position:absolute; left:10px; top:10px; }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadeinC img:gt(0)').hide();
	setInterval(function(){$('.fadeinC :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadeinC');}, 7000);
});
</script>
<body>
<td>
<div class="fadeinC" >
<img class="imageslideshowC" src="artworkG.jpg">
<img class="imageslideshowC" src="artworkH.jpg">
<img class="imageslideshowC" src="artworkI.jpg">
</div></td>
</body>
</div></td>
<td><div class="slideshow" >
<style>
.fadeinD { 
position:relative; height:332px; width:500px; margin:0 auto;
background: url("slideshow-bg.png") repeat-x scroll left top transparent;
padding: 10px;
 }
.fadeinD img { position:absolute; left:10px; top:10px; }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadeinD img:gt(0)').hide();
	setInterval(function(){$('.fadeinD :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadeinD');}, 5000);
});
</script>
<body>
<td>
<div class="fadeinD" >
<img class="imageslideshowD" src="artworkJ.jpg">
<img class="imageslideshowD" src="artworkK.jpg">
<img class="imageslideshowD" src="artworkL.jpg">
</div></td>
</body>
</div></td>
<td>
<div>
	<font class="date" >
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
</td>
<hr class="snowline" />
<div>
<img src="theartist.jpg" class="wallpaper" id="welcomewallpaper" >
<div class="divs" id="unamepcode" >
<td>

<div id="inputfields">
<td>
<i><a href="ueaasignup.php" style="color:red;" class="register" >Not yet a Member?</a></i>&nbsp;&nbsp;
<i><a href="ueaahome.php" style="color:snow;" class="visit" >Visit Site as Guest?</a></i>&nbsp;&nbsp;
<i><a href="adminlogin.php" style="color:red;" class="adminlogin" >Admin</a></i>
</td>
<td>
<font id="username" class="textfonts" >Username: </font>
</td>
<td>
<input type="text" id="phpro_username" name="phpro_username" value="" maxlength="20" />&nbsp;&nbsp;
</td>
<td>
<font id="password" class="textfonts" >Password: </font>
</td>
<td>
<input type="password" id="phpro_password" name="phpro_password" value="" maxlength="20" />&nbsp;&nbsp;
</td>
<td>
<input type="submit" id="login" class="loginbutton" value="Log-in" >
</td>


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
