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
<div>
<td>
<img src="student.jpg"alt="images"  style="width:160px;height:160px;position:relative;z-index:1;" id="homelogo" class="logo" >
</td></div>
<div class="divs" id="navstrip" >

<input type="button" name="shareartworkbtn" class="navtabs" id="shareartwork" value="Share Artwork" onclick="window.location='ueaaabout.php'">

<div class="sidefield">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Wowslider" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1B/styleB.css" />
	<script type="text/javascript" src="engine1B/jqueryB.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-color:#d7d7d7;margin:0">
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1" class="sideslideshow">
	<div class="ws_images"><ul>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslider</a> by WOWSlider.com v8.6</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1B/wowsliderB.js"></script>
	<script type="text/javascript" src="engine1B/scriptB.js"></script>
	<!-- End WOWSlider.com BODY section -->

</div>
<div class="walls" id="homewall" >
<table>
<tr>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
	$("#flipA").click(function(){
        $("#panelA").slideToggle("slow");
    });
	 $("#flipB").click(function(){
        $("#panelB").slideToggle("slow");
    });
	 $("#flipC").click(function(){
        $("#panelC").slideToggle("slow");
    });
	 $("#flipD").click(function(){
        $("#panelD").slideToggle("slow");
    });
	 $("#flipE").click(function(){
        $("#panelE").slideToggle("slow");
    });
	 $("#flipF").click(function(){
        $("#panelF").slideToggle("slow");
    });
	 $("#flipG").click(function(){
        $("#panelG").slideToggle("slow");
    });
});

</script>
<div id="flip">Member's Information</div>
<div id="panel">
	<div id="flipA">FirstName</div>
	<div id="panelA">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname"></font>
	</div>
	<div id="flipB">MiddleName</div>
	<div id="panelB">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname"></font>
	</div>
	<div id="flipC">SurName</div>
	<div id="panelC">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname"></font>
	</div>
	<div id="flipD">StudentNumber</div>
	<div id="panelD">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname"></font>
	</div>
	<div id="flipH">Course</div>
	<div id="panelH">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname"></font>
	</div>
	<div id="flipE">College</div>
	<div id="panelE">
	<div class="panelEE">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsA"></font>		
	</div>
		<div id="flipF">Address</div>
	<div id="panelF">
		<div class="panelFF">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsB"></font>		
	</div>
	</div>
	<div id="flipG">Email</div>
	<div id="panelG">
		<div class="panelFF">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsB"></font>		
	
		
		</div>
<div>
<video class="videoA" autoplay muted loop>
  <source src="UEaavidA.mp4" type="video/mp4">
</video>
</div>

</tr>
</table>
</div>
<div id="footerA">
<hr class="hrline" />
<td>
<input class="sociallink" id="facebook" type="button" onclick="window.open('https://www.facebook.com/UE-ArtistA-218898668140378/timeline/')" style="background-image:url('facebook.png');background-size:cover;" >
</input></td>
<td>
<input id="twitter" class="sociallink" type="button" onclick="window.open('https://twitter.com/UeArtists')" style="background-image:url('icon-twitter.png');background-size:cover;" >
</input></td>
<td>
<input id="instagram" class="sociallink" type="button" onclick="window.open('https://instagram.com/ueartista/')" style="background-image:url('insagram.png');background-size:cover;" >
</input></td>
<font class="footertextA"> University of the East</font><br>
<font class="footertextB"> Artists Alliance</font>
        <div class="container">
		</div>
</div>
		
		
		
		
		
		
		
		
		
		
		
</body>
</html>
