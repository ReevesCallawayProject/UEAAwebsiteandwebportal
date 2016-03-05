<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UE Artista</title>
    <link rel="shortcut icon" href="webicon.png">
  <link href="welcomecss.css" rel="stylesheet">
  
    <!-- Bootstrap core CSS -->
    
</head>
<body style="background-color:snow;">


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
<input type="button" class="navtabs" name="homebtnA" id="adminhome" value="Home" onclick="window.location='adminhome.php'" />
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

<div class="sidefield">
	<td>
		<!--<font class="usernamesession"><a class="usersession" href="writeform.php"> </a></font><br><br> -->
		<input type="button" class="sideBtn" onclick="window.location='logout.php'" value="Log Out" />
		<input type="button" class="btnicon" onclick="window.location='logout.php'" style="background-image: url('logout.png');background-size: cover;" /><br><br><br><br>
		<input type="button" class="sideBtn" onclick="window.location='admincreateevents.php'" value="Events" />
<td>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Wowslider" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-color:#d7d7d7;margin-top:20px;">
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/crafting.jpg" alt="crafting" title="Crafting" id="wows1_0"/></li>
		<li><img src="data1/images/digitalart.jpg" alt="digitalart" title="Digital Art" id="wows1_1"/></li>
		<li><img src="data1/images/film.jpg" alt="film" title="Film" id="wows1_2"/></li>
		<li><img src="data1/images/literary.jpg" alt="literary" title="Literary" id="wows1_3"/></li>
		<li><img src="data1/images/music.jpg" alt="music" title="Music" id="wows1_4"/></li>
		<li><img src="data1/images/painting.jpg" alt="painting" title="Painting" id="wows1_5"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/photography.jpg" alt="bootstrap carousel" title="Photography" id="wows1_6"/></a></li>
		<li><img src="data1/images/sketching.jpg" alt="sketching" title="Sketching" id="wows1_7"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wowslider</a> by WOWSlider.com v8.6</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
</td>
</td>
</div>

<div class="walls" id="homewall" ><br>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Wowslider" />

<!-- upload for crafting -->
<form action="saveimagecrafting.php" enctype="multipart/form-data" method="post" class="uploaderform">
<table style="border-collapse: collapse; font: 12px Tahoma;" class="uploadform" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
 <label for="file" class="uploadtitle">Crafting</label><br>
 <label for="file" class="descriptiontitle" id="titlecaption">Title</label><br>
<input type="text" class="inputtextfield" id="titledescription" name="arttitle"><br><br>
<label for="file" class="descriptiontitle" id="artistcaption">Artist</label><br>
<input type="text" class="inputtextfield" id="artistdescription" name="artist_name"><br>
<input name="uploadedimage" type="file" class="choosefileBtn">
<input name="Upload Now" type="submit" value="Upload Image" class="uploadBtn">
</td>
</tr>
</tbody></table>
</form>

<!-- upload for digital art -->
<form action="saveimage.php" enctype="multipart/form-data" method="post" class="uploaderform">
<table style="border-collapse: collapse; font: 12px Tahoma;" class="uploadform" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
 <label for="file" class="uploadtitle">Digital Art</label><br>
 <label for="file" class="descriptiontitle" id="titlecaption">Title</label><br>
<input type="text" class="inputtextfield" id="titledescription" name="arttitle"><br><br>
<label for="file" class="descriptiontitle" id="artistcaption">Artist</label><br>
<input type="text" class="inputtextfield" id="artistdescription" name="artist_name"><br>

<input name="uploadedimage" type="file" class="choosefileBtn">
<input name="Upload Now" type="submit" value="Upload Image" class="uploadBtn">
</td>
</tr>
</tbody></table>
</form>

<!-- upload for painting -->
<form action="saveimagepainting.php" enctype="multipart/form-data" method="post" class="uploaderform">
<table style="border-collapse: collapse; font: 12px Tahoma;" class="uploadform" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
 <label for="file" class="uploadtitle">Painting</label><br>
 <label for="file" class="descriptiontitle" id="titlecaption">Title</label><br>
<input type="text" class="inputtextfield" id="titledescription" name="arttitle"><br><br>
<label for="file" class="descriptiontitle" id="artistcaption">Artist</label><br>
<input type="text" class="inputtextfield" id="artistdescription" name="artist_name"><br>

<input name="uploadedimage" type="file" class="choosefileBtn">
<input name="Upload Now" type="submit" value="Upload Image" class="uploadBtn">
</td>
</tr>
</tbody></table>
</form>

<!-- upload for photography -->
<form action="saveimagephotography.php" enctype="multipart/form-data" method="post" class="uploaderform">
<table style="border-collapse: collapse; font: 12px Tahoma;" class="uploadform" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
 <label for="file" class="uploadtitle">Photography</label><br><br>
<label for="file" class="descriptiontitle" id="titlecaption">Title</label><br>
<input type="text" class="inputtextfield" id="titledescription" name="arttitle"><br><br>
<label for="file" class="descriptiontitle" id="artistcaption">Artist</label><br>
<input type="text" class="inputtextfield" id="artistdescription" name="artist_name"><br>
<input name="uploadedimage" type="file" class="choosefileBtn">
<input name="Upload Now" type="submit" value="Upload Image" class="uploadBtn">
</td>
</tr>
</tbody></table>
</form>

<!-- upload for sketching -->
<form action="saveimagesketching.php" enctype="multipart/form-data" method="post" class="uploaderform">
<table style="border-collapse: collapse; font: 12px Tahoma;" class="uploadform" border="1" cellspacing="5" cellpadding="5">
<tbody><tr>
<td>
 <label for="file" class="uploadtitle">Sketching</label><br>
 <label for="file" class="descriptiontitle" id="titlecaption">Title</label><br>
<input type="text" class="inputtextfield" id="titledescription" name="arttitle"><br><br>
<label for="file" class="descriptiontitle" id="artistcaption">Artist</label><br>
<input type="text" class="inputtextfield" id="artistdescription" name="artist_name"><br>

<input name="uploadedimage" type="file" class="choosefileBtn">
<input name="Upload Now" type="submit" value="Upload Image" class="uploadBtn">
</td>
</tr>
</tbody></table>
</form>


	<div class="space">
	</div>
	</body>
	</div>
<div id="footerA">
<td>
<hr class="hrline" />
</td>
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
