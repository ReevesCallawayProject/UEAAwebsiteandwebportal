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
<body style="background-color:snow;">
<div class="divs" id="navstrip" >
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
<input type="button" class="logotab" name="homebtnlogo" id="homelogo" value="UE Artista" onclick="window.location='ueaahome.php'" />
<font class="uetext">University of the East</font>
</td></div>

<td>
<input type="button" class="navtabs" name="homebtn" id="home" value="Home" onclick="window.location='adminhome.php'" />
</td>
<td>
<input type="button" class="navtabs" name="gallerybtn" id="adminupload" value="Gallery" onclick="window.location='admingallery.php'" />
</td>
<td>
<input type="button" name="officersbtn" class="navtabs" id="officers" value="Officers" onclick="window.location='adminofficers.php'"/>
</td>
<td>
<input type="button" name="aboutbtn" class="navtabs" id="about" value="About UEAA" onclick="window.location='adminaboutueaa.php'"/>
</td>
</div>
</td>
</div>
<div class="sidefield">
<td>
<!--<font class="usernamesession"><a class="usersession" href="writeform.php"> </a></font><br><br> -->
<input type="button" class="sideBtn" onclick="window.location='logout.php'" value="Log Out" />
<input type="button" class="btnicon" onclick="window.location='logout.php'" style="background-image: url('logout.png');background-size: cover;" /><br><br><br><br>
<input type="button" class="sideBtn" onclick="window.location='admincreateevents.php'" value="Events" />
</td>
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
<hr id="hrlineaboutA" />
<tr><td>
<font class="orginfotextA" id="foundation" >Foundation</font>
</td><td>
<font class="orginfotextB" id="founded" >16 November 2011</font>
</td></tr>
<hr id="hrlineaboutB" />
<tr>
<td>
<font class="orginfotextA" id="address" >Address</font></td>
<td>
<font class="orginfotextB" id="ue" >University of the East - Manila</font>
</td></tr>
<hr id="hrlineaboutC" />
<tr><td>
<font class="orginfotextA" id="descriptionA" >Description</font></td>
<td >
<font class="orginfotextB" id="descriptionB" >UE-Artists Alliance (ArtistA) is the </font>
<br><font class="orginfotextB" id="descriptionC">official organization of visual</font>
<br><font class="orginfotextB" id="descriptionD"> artists and literary writers in the </font>
<br><font class="orginfotextB" id="descriptionE">University of the East.</font>
</td></tr>
<hr id="hrlineaboutD" />
<tr><td>
<font class="orginfotextA" id="mission" >Mission Statement</font></td>
<td >
<i><font class="orginfotextB" id="statementA" >The University of the East Artist's</font>
<br><font class="orginfotextB" id="statementB">Alliance aims to develop the student's</font>
<br><font class="orginfotextB" id="statementC">skills in producing creative works</font><br>
<font class="orginfotextB" id="statementD">which adheres for the University's</font><br>
<font class="orginfotextB" id="statementE">mission of molding individuals who excel</font><br>
<font class="orginfotextB" id="statementF">not only as global leaders but also</font><br>
<font class="orginfotextB" id="statementG">exceptional artists of the next generation.</font></i>
</td></tr>
<hr id="hrlineaboutE" />
<tr><td>
<font class="orginfotextA" id="email" >E-mail</font></td>
<td >
<font class="orginfotextB" id="gmail" >ueartistsalliance16@gmail.com</font>
</td></tr>
<hr id="hrlineaboutF" />
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
