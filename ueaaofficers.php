<!DOCTYPE html>
<html lang="en">
<head>
      
  <title>UE Artista</title>
    <link rel="shortcut icon" href="webicon.png">
	<link href="welcomecss.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
</head>
<body style="background-image:url('automnleaf.jpg');background-size:cover;">
<div class="datetime">
	<font class="dateA" >
	<?php
	echo "Today is " . date("Y-m-d") . "<br>";
?>
</font>
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
<input type="button" class="navtabs" name="homebtn" id="home" value="Home" onclick="window.location='ueaahome.php'" />
</td>
<td>
<div class="dropdown">
    <!-- trigger button -->
    <button class="navtabs" id="gallery" value="Gallery">Gallery </button>
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
<input type="button" name="officersbtnA" class="navtabs" id="officers" value="Officers" onclick="window.location='ueaaofficers.php'"/>
</td>
<td>
<input type="button" name="aboutbtn" class="navtabs" id="about" value="About UEAA" onclick="window.location='ueaaabout.php'"/>
</td>
<td>
<input type="button" name="portalbtn" class="navtabs" id="portal" value="UEAA Portal" onclick="window.location='membershome.php'"/>
</td>
</div>
</td>
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
		<li><img src="data1B/images/artifacta.jpg" alt="artifactA" title="artifactA" id="wows1_0"/></li>
		<li><img src="data1B/images/artifactb.jpg" alt="artifactB" title="artifactB" id="wows1_1"/></li>
		<li><img src="data1B/images/artifactc.jpg" alt="artifactC" title="artifactC" id="wows1_2"/></li>
		<li><img src="data1B/images/artifactd.jpg" alt="artifactD" title="artifactD" id="wows1_3"/></li>
		<li><img src="data1B/images/artifacte.jpg" alt="artifactE" title="artifactE" id="wows1_4"/></li>
		<li><img src="data1B/images/artifactf.jpg" alt="artifactF" title="artifactF" id="wows1_5"/></li>
		<li><img src="data1B/images/artifactg.jpg" alt="artifactG" title="artifactG" id="wows1_6"/></li>
		<li><a href="http://wowslider.net"><img src="data1B/images/artifacth.jpg" alt="jquery carousel" title="artifactH" id="wows1_7"/></a></li>
		<li><img src="data1B/images/artifacti.jpg" alt="artifactI" title="artifactI" id="wows1_8"/></li>
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
	 $("#flipH").click(function(){
        $("#panelH").slideToggle("slow");
    });
});
</script>
<div id="flip">Officers of UE Artista</div>
<div id="panel">
	<div id="flipA">President</div>
	<div id="panelA">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname">Joan Loria Galban</font>
	</div>
	<div id="flipB">Vice President</div>
	<div id="panelB">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname">Eftuh Christian Foronda</font>
	</div>
	<div id="flipC">Secretary</div>
	<div id="panelC">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname">Pauline Lumagbas</font>
	</div>
	<div id="flipD">Treasurer</div>
	<div id="panelD">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname">Homer Francisco</font>
	</div>
	<div id="flipH">Auditor</div>
	<div id="panelH">
		<img src="avatardefault.png" class="avatar"/>
		<font class="officersname">Diane Mae Baes</font>
	</div>
	<div id="flipE">Board of Directors for Events</div>
	<div id="panelE">
	<div class="panelEE">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsA">Alyssa Louise Calilung</font>		
	</div>
	<div class="panelEE">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsB">Sarah Joi Pagkaliwagan</font>		
	</div>
	<div class="panelEE">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsC">Raamah Jacob Salcedo</font>
	</div>
	</div>
	<div id="flipF">Board of Directors for Promotion</div>
	<div id="panelF">
		<div class="panelFF">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsB">John Louise Adlong</font>		
	</div>
	<div class="panelFF">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsC">Francis Angelo Tan</font>
	</div>
	</div>
	<div id="flipG">Board of Directors for Publicity</div>
	<div id="panelG">
		<div class="panelFF">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsB">John Louise Adlong</font>		
	</div>
	<div class="panelFF">
				<img src="avatardefault.png" class="avatar"/>
				<font class="officersname" id="bdeventsC">Francis Angelo Tan</font>
	</div>
	</div>
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