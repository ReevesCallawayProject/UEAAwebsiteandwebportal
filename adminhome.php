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
<div class="divs" id="navstrip" >
<td class="datetime">
	<font class="dateA" >
	<?php
	echo "Today is " . date("Y-m-d") . "<br>";
?></font>
</td>
<td>
	<font class="time" >
	<?php
echo "The time is " . date("h:i:sa");
?></font>
</td>
<td>
	<input type="button" class="logotab" name="homebtnlogo" id="homelogo" value="UE ARTISTA" onclick="window.location='ueaahome.php'" />
</td>
<td>
<input type="button" class="navtabs" name="homebtnA" id="home" value="Home" onclick="window.location='ueaahome.php'" />
</td>
<td>
<input type="button" class="navtabs" name="gallerybtn" id="adminupload" value="Gallery" onclick="window.location='admingallery.php'" style="background-color:black;color:snow" />
</td>
<td>
<input type="button" name="officersbtn" class="navtabs" id="officers" value="Officers" onclick="window.location='ueaaofficers.php'"/>
</td>
<td>
<input type="button" name="aboutbtn" class="navtabs" id="about" value="About UEAA" onclick="window.location='ueaaabout.php'"/>
</td>
<td>
<input type="button" name="writebtn" class="navtabs" id="write" value="Portal" onclick="window.location='writeform.php'"/>
</td>
</div>
</td>

<div class="sidefield">

</div>
<div class="walls" id="homewall" ><br>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Wowslider" />
	
	
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
