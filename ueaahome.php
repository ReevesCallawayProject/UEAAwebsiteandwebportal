<?php
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
	<input type="button" class="logotab" name="homebtnlogo" id="homelogo" value="UE Artista" onclick="window.location='ueaahome.php'" />
<font class="uetext">University of the East</font>
</td>
<td>
<input type="button" class="navtabs" name="homebtnA" id="home" value="Home" onclick="window.location='ueaahome.php'" />
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
</div>
</td>
<td>
<input type="button" name="officersbtn" class="navtabs" id="officers" value="Officers" onclick="window.location='ueaaofficers.php'"/>
</td>
<td>
<input type="button" name="aboutbtn" class="navtabs" id="about" value="About UEAA" onclick="window.location='ueaaabout.php'"/>
</td>
<td>
<input type="button" name="writebtn" class="navtabs" id="write" value="Share" onclick="window.location='writeform.php'"/>
</td>

</div>
<hr class="snowlinemain" />

<div class="sidefield">
	<td>
		<!--<font class="usernamesession"><a class="usersession" href="writeform.php"> </a></font><br><br> -->
		<input type="button" class="sideBtn" onclick="window.location='logout.php'" value="Log Out" />
		<input type="button" class="btnicon" onclick="window.location='logout.php'" style="background-image: url('logout.png');background-size: cover;" /><br><br><br><br>
		<input type="button" class="sideBtn" onclick="window.location='ueaaevents.php'" value="Events" id="eventsBtn"/><br><br><br>
		<!--<input type="button" class="sideBtn" onclick="window.location='ueaaevents.php'" value="Search"id="searchBtn"/><br><br>-->
	</td>
	<td>
		<table>
			<tr>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script> 
				$(document).ready(function(){
					$("#searchflip").click(function(){
					$("#searchpanel").slideToggle("slow");
					});
				});
				</script>
					<div id="searchflip">Search</div>
						<div id="searchpanel">
						<form  method="get" action="ueaasearchresult.php"  id="searchform">
							<input type="text" id="searchinput" name="search"/>
							<input type="submit" class="sideBtn" name="searchsubmit" onclick="window.location='ueaasearchresult.php'" value="Search" id="searchBtn"/>
						</form>
						</div>
					</td>
			</tr>
		</table>
	</td>
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
</td></div>
<div class="walls" id="homewall" ><br>
	
				<div class="photogalleryhome" >
					<?php
						$mysqli = new mysqli( 'localhost', 'root', '', 'ueartistamem' );
						$sql = "SELECT * FROM images_tbl WHERE image_status='Approved' ORDER BY images_id DESC";
						$result = $mysqli->query($sql);
						echo "<table>";
						while($row=mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>";?><font class="imagecaption" id="notiftext" >Admin has uploaded a new artwork to <?php echo $row["image_category"];?> Gallery submitted by <font color="red"><?php echo $row["artists"];?></font>.<?php echo "</td>";?></font><?php
								echo "<tr>";
								echo "<td>";?><img src="<?php echo $row["images_path"]; ?>" class="imagedimensionhome" height="100" width="100"> <?php echo "</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>";?> <font class="imagecaption" id="imagecaptiontitle"><?php echo $row["title"]; echo "</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>";?><font class="imagecaption" ><?php echo " by " . $row["artists"]; echo "</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>";?> <font class="announcementB" id="datetime" style="color:snow;"><?php echo $row["submission_date"] . " at " . $row["submission_time"]; echo "</td>";
								echo "</tr>"; 
								echo "<tr>";
								echo "<td>";?><hr class="postlines" /><?php echo "</td>";
								echo "</tr>";	
								echo "<tr>";
								echo "<td>";?><br><?php
								echo "</tr>";
							}
						echo "</table>";
					?>
				</div>
			
				<div class="eventsfeed">
					<?php
						$mysqli = new mysqli( 'localhost', 'root', '', 'ueartistaadmin' );
						$sql = "SELECT * FROM ueaaeventspost ORDER BY id DESC";
						$result = $mysqli->query($sql);
						echo "<table>";
						while($row=mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>";?><font class="announcementA" >ArtistAlert!<?php echo "</td>";?></font><?php
								echo "</tr>";
								echo "<tr>";
								echo "<td>";?><br><?php echo "</td>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>";?><font class="announcementB" ><?php echo $row["events_content"]; ?></font>  <?php echo "</td>";
								echo "</tr>";	
								echo "<tr>";
								echo "<td>";?> <font class="announcementB" id="datetime"><?php echo $row["date_posted"] . " at " . $row["time_posted"]; echo "</td>";
								echo "</tr>"; 
								echo "<tr>";
								echo "<td>";?><hr class="postlines" /><?php echo "</td>";
								echo "</tr>";	
								
							}
						echo "</table>";
					?>
				</div>
			
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
