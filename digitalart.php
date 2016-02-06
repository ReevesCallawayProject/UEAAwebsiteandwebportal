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
<img src="logo.jpg"alt="images"  style="width:160px;height:160px;position:relative;z-index:1;" id="homelogo" class="logo" >
</td></div>
<div class="divs" id="navstrip" >
<td>
<input type="button" class="navtabs" id="home" name="homebtn" value="Home" onclick="window.location='ueaahome.php'" />
</td>
<td>
<div class="dropdown">
    <!-- trigger button -->
    <button class="navtabs" id="gallery" name="gallerybtn" value="Gallery">Gallery </button>
    <!-- dropdown menu -->
    <ul class="dropdown-menu">
	    <li><a href="crafting.php">Crafting</a></li>
	    <li><a href="film.php">Film</a></li>
        <li><a href="digitalart.php">Digital Art</a></li>
	    <li><a href="literary.php">Literary</a></li>
        <li><a href="music.php">Music</a></li>
		<li><a href="painting.php">Painting</a></li>
        <li><a href="photography.php">Photography</a></li>
		<li><a href="sketching.php">Sketching</a></li>
    </ul>
</div></td>
<td>
<input type="button" class="navtabs" name="officersbtn" id="officers" value="Officers" onclick="window.location='ueaaofficers.php'"/>
</td>
<td>
<input type="button" class="navtabs" name="aboutbtn" id="about" value="About UEAA" onclick="window.location='ueaaabout.php'"/>

</td>
</div>
</td>
</div>
<div class="sidefield">

</div>
<div class="walls" id="homewall" ><br>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Http://wowslider.com/" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1C/style.css" />
	<script type="text/javascript" src="engine1C/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-color:#d7d7d7;margin:auto">
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1C/images/digitalartbyaldousgarcia.jpg" alt="digitalartbyaldousgarcia" title="by Aldous Garcia / EMC" id="wows1_0"/></li>
		<li><img src="data1C/images/digitalartbyaldousgarciaa.jpg" alt="digitalartbyaldousgarciaA" title="by Aldous Garcia / EMC" id="wows1_1"/></li>
		<li><img src="data1C/images/digitalartbyallysa.jpg" alt="digitalartbyallysa" title="by Allysa Calilung / Dentistry" id="wows1_2"/></li>
		<li><img src="data1C/images/digitalartbyallysaa.jpg" alt="digitalartbyallysaA" title="by Allysa Calilung / Dentistry" id="wows1_3"/></li>
		<li><img src="data1C/images/digitalartbyallysab.jpg" alt="digitalartbyallysaB" title="by Allysa Calilung / Dentistry" id="wows1_4"/></li>
		<li><img src="data1C/images/digitalartbyjohnkennethcanonoy.jpg" alt="digitalartbyjohnkennethcanonoy" title="by John Kenneth Canonoy / Game Development" id="wows1_5"/></li>
		<li><a href="http://wowslider.net"><img src="data1C/images/digitalartbyjohnkennethcanonoya.jpg" alt="jquery slider" title="by John Kenneth Canonoy / Game Development" id="wows1_6"/></a></li>
		<li><img src="data1C/images/digitalartbymerylljoycedirain.jpg" alt="digitalartbymerylljoycedirain" title="by Meryll Joyce Dirain" id="wows1_7"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.6</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1C/wowslider.js"></script>
	<script type="text/javascript" src="engine1C/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flipAdigiart").click(function(){
        $("#panelAdigiart").slideToggle("slow");
    });
	 $("#flipAdigiartA").click(function(){
        $("#panelAdigiartA").slideToggle("slow");
    });
});
</script>
<br><br>
	<div id="flipAdigiart">Digital Arts by John Kenneth Canonoy / Game Development</div>
	<div id="panelAdigiart">
<div id="imageviewer" >
<img class="images" id="digitalartA" src="canonoydigiart.jpg" />
</div><br><br>
<div id="imageviewer" >
<img class="images" id="digitalartA" src="canonoydigiartA.jpg" />
</div><br><br>
<div id="imageviewer" >
<img class="images" id="digitalartA" src="canonoydigiartB.jpg" />
</div><br><br>
<div id="imageviewer" >
<img class="images" id="digitalartA" src="canonoydigiartC.jpg" />
</div><br><br>
<div id="imageviewer" >
<img class="images" id="digitalartA" src="canonoydigiartD.jpg" />
</div><br><br>
<div id="imageviewer" >
<img class="images" id="digitalartA" src="canonoydigiartE.jpg" />
</div><br><br>
<div id="imageviewer" >
<img class="images" id="digitalartA" src="canonoydigiartF.jpg" />
</div><br><br>
	</div>
<div id="flipAdigiartA">Digital Arts by Israel Dred Cagampan / Game Development</div>
	<div id="panelAdigiartA">
<div id="imageviewer" >
<img class="images" id="digitalartA" src="israeldigiart.jpg" />
</div><br><br>
</div></div>
<div id="footerA">
<hr class="hrline" /><td>
<input id="facebook" class="sociallink" type="button" onclick="window.open('https://www.facebook.com/UE-ArtistA-218898668140378/timeline/')" style="background-image:url('facebook.png');background-size:cover;" >
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
