<!DOCTYPE html>
<html lang="en">
<?php

$username = "username";
$password = "password";
if ( ! empty( $_POST ) ) {
  
  // Connect to MySQL
  $mysqli = new mysqli( 'localhost', 'root', '', 'ueartistaadmin' );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }

// Insert our data
  $sql = "INSERT INTO ueaaeventspost ( events_content, date_posted, time_posted) VALUES ( '{$mysqli->real_escape_string($_POST['announcement'])}', '".date("Y-m-d")."','". date("h:i:s")."')";
  $insert = $mysqli->query($sql);
  // Print response from MySQL
  if ( $insert ) { 
	echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
    // Close our connection
$mysqli->close();
}
?>
<head>
      
  <title>UE Artista</title>
    <link rel="shortcut icon" href="webicon.png">
	<link href="welcomecss.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
</head>
<body style="background-image:url('automnleaf.jpg');background-size:cover;">
<div class="divs" id="navstrip" >
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
<input type="button" class="logotab" name="homebtnlogo" id="homelogo" value="UE Artista" onclick="window.location='ueaahome.php'" />
<font class="uetext">University of the East</font>
</td></div>

<td>
<input type="button" class="navtabs" name="homebtn" id="home" value="Home" onclick="window.location='adminhome.php'" />
</td>
<td>
<input type="button" class="navtabs" name="gallerybtn" id="adminupload" value="Gallery" onclick="window.location='adminupload.php'" style="background-color:black;color:snow;"/>
</td>
<td>
<input type="button" name="officersbtnA" class="navtabs" id="officers" value="Officers" onclick="window.location='adminofficers.php'" style="background-color:black;color:snow;"/>
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
<td>
<div id="events"><font id="eventstitle">UE Artista Events</font></div>
<div id="postevents"><font id="posteventstitle">Post an Announcement</font></div>
<form method="post" action="" >
<input type="text" class="inputtextfield" name="announcement" id="announcement">
<input type="submit" id="postannouncement" value="Post" ><br><br>
</form>
</td>
<td>
<div id="postevents"><font id="addphotosevents">Add Photos to Events</font></div>
<form action="eventalbum.php" method="POST" enctype="multipart/form-data">
<div id="uploadalbum">
<label for="file" class="descriptiontitle" id="eventtitle">Title</label><br>
<input type="text" class="inputtextfield" id="eventdescription" name="event_description"><br><br>

<input type="file" class="choosefileBtn" id="chooseimages" name="files[]" multiple="">
<input name="Upload Now" type="submit" value="Upload Image" class="uploadBtn" id="uploadmulfiles">
</div>
</form>

</td>
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