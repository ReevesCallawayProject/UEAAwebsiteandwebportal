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
<input type="button" name="homebtn" class="navtabs" id="home" value="Home" onclick="window.location='ueaahome.php'" />
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
</td>
</div>
<div class="sidefield">
<td>
<!--<font class="usernamesession"><a class="usersession" href="writeform.php"> </a></font><br><br> -->
<input type="button" class="sideBtn" onclick="window.location='logout.php'" value="Log Out" />
<input type="button" class="btnicon" onclick="window.location='logout.php'" style="background-image: url('logout.png');background-size: cover;" /><br><br><br><br>
<input type="button" class="sideBtn" onclick="window.location='ueaaevents.php'" value="Events" />
</td>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Http://wowslider.com/" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1E/style.css" />
	<script type="text/javascript" src="engine1E/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-color:#d7d7d7;margin:auto">
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1E/images/sketchbyalmira.jpg" alt="sketchbyalmira" title="by Almira Peregrina / Psychology" id="wows1_0"/></li>
		<li><img src="data1E/images/sketchbydaisylopez.jpg" alt="sketchbydaisylopez" title="by Daisy Lopez / Accountancy" id="wows1_1"/></li>
		<li><img src="data1E/images/sketchbydianebaes.jpg" alt="sketchbydianebaes" title="by Diane Baes / Accountancy" id="wows1_2"/></li>
		<li><img src="data1E/images/sketchbydianebaesa.jpg" alt="sketchbydianebaesA" title="by Diane Baes / Accountancy" id="wows1_3"/></li>
		<li><img src="data1E/images/sketchbydianebaesb.jpg" alt="sketchbydianebaesB" title="by Diane Baes / Accountancy" id="wows1_4"/></li>
		<li><img src="data1E/images/sketchbydianebaesc.jpg" alt="sketchbydianebaesC" title="by Van Christian Ursua / Computer Engineering" id="wows1_5"/></li>
		<li><a href="http://wowslider.net"><img src="data1E/images/sketchbymerylljoycedirain.jpg" alt="http://wowslider.net/" title="by Meryll Joyce Dirain" id="wows1_6"/></a></li>
		<li><img src="data1E/images/sketchbynestorredulla.jpg" alt="sketchbynestorredulla" title="by Nestor Redulla" id="wows1_7"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.6</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1E/wowslider.js"></script>
	<script type="text/javascript" src="engine1E/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
</div>
<div class="walls" id="homewall" ><br>

	<!-- <div class="photogallery">
    	<div class="row">
	       <?php 
	       	//scan "uploads" folder and display them accordingly
	       $folder = "sketching";
	       $results = scandir('sketching');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
	       		<div class="col-md-3">
		       		<div class="thumbnail" id="images">
			       		<img class="imagedimension" src="'.$folder . '/' . $result.'" alt="...">
				       		<div class="caption">
				       		<p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
			       		</div>
		       		</div>
	       		</div>';
	       	}
	       }
	       ?>
    	</div>
		 </div> <!-- /container -->

		 <div class="photogallery">
		 <?php
$mysqli = new mysqli( 'localhost', 'root', '', 'ueartistamem' );
$sql = "SELECT * FROM images_tbl WHERE image_category='Sketching' AND image_status='Approved'";
$result = $mysqli->query($sql);
echo "<table>";
while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>";?> <img src="<?php echo $row["images_path"]; ?>" class="imagedimension" height="100" width="100"> <?php echo "</td>";
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
		 
<div class="space">
	</div>
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
