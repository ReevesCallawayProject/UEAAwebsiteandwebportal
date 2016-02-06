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
<body style="background-color:#202020;">
	<form action="ueaaaddlogin.php" method="post">
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
		<div class="divs" id="photostrip" >
			<td>
			<img src= "logo.jpg" alt="images"  style="width:160px;height:160px;position:absolute;z-index:10;" id="welcomelogo" class="logo" />
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
<td><div class="slideshow" >
<style>
.fadeinE { 
position:relative; height:332px; width:500px; margin:0 auto;
background: url("slideshow-bg.png") repeat-x scroll left top transparent;
padding: 10px;
 }
.fadeinE img { position:absolute; left:10px; top:10px; }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadeinE img:gt(0)').hide();
	setInterval(function(){$('.fadeinE :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadeinE');}, 6000);
});
</script>
<body>
<td>
<div class="fadeinE" >
<img class="imageslideshowE" src="artworkC.jpg">
<img class="imageslideshowE" src="artworkB.jpg">
<img class="imageslideshowE" src="artworkA.jpg">
</div></td>
</body>
</div></td>

<div>
<img src="welcomewallpaper.jpg" class="wallpaper" id="welcomewallpaper" >
<div class="divs" id="unamepcode" >
<td>
<tr>
<div id="inputfields">
<input type="submit" id="login" class="loginbutton" value="Log-in" >
<input type="password" class="textfield" name="pword_mem" onkeypress="return CharValidation(event)"  required>&nbsp;&nbsp;
<font class="textfonts" >Password: </font></tr><tr>
<input type="text" class="textfield" name="uname_mem" onkeypress="return CharValidation(event)"  required>&nbsp;&nbsp;
&nbsp;&nbsp;<font class="textfonts" >Username: </font>
<i><a href="ueaasignup.php" style="color:red;" class="register" >Not yet a Member?</a></i>&nbsp;&nbsp;
<i><a href="ueaahome.php" style="color:snow;" class="visit" >Visit Site as Guest?</a></i>&nbsp;&nbsp;
<i><a href="adminlogin.php" style="color:red;" class="adminlogin" >Admin</a></i><div>

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
