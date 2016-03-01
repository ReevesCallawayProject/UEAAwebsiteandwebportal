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
<input type="button" class="logotab" name="homebtnlogo" id="homelogo" value="UE ARTISTA" onclick="window.location='ueaahome.php'" />
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
	<link rel="stylesheet" type="text/css" href="engine1F/style.css" />
	<script type="text/javascript" src="engine1F/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-color:#d7d7d7;margin:auto">
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <!-- Bootstrap core CSS -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet">
   
  </head>

	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1F/images/photographybymarc.jpg" alt="photographybymarc" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_0"/></li>
		<li><img src="data1F/images/photographybymarca.jpg" alt="photographybymarcA" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_1"/></li>
		<li><img src="data1F/images/photographybymarcb.jpg" alt="photographybymarcB" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_2"/></li>
		<li><img src="data1F/images/photographybymarcc.jpg" alt="photographybymarcC" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_3"/></li>
		<li><img src="data1F/images/photographybymarcd.jpg" alt="photographybymarcD" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_4"/></li>
		<li><img src="data1F/images/photographybymarce.jpg" alt="photographybymarcE" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_5"/></li>
		<li><img src="data1F/images/photographybymarcf.jpg" alt="photographybymarcF" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_6"/></li>
		<li><img src="data1F/images/photographybymarcg.jpg" alt="photographybymarcG" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_7"/></li>
		<li><a href="http://wowslider.com"><img src="data1F/images/photographybymarch.jpg" alt="bootstrap slider" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_8"/></a></li>
		<li><img src="data1F/images/photographybymarci.jpg" alt="photographybymarcI" title="Cosplay Photography by Mark Tomas / Electrical Eng'g" id="wows1_9"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.6</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1F/wowslider.js"></script>
	<script type="text/javascript" src="engine1F/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	
    <div class="photogallery">
    	<div class="row">
	       <?php 
	       	//scan "uploads" folder and display them accordingly
	       $folder = "photography";
	       $results = scandir('photography');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
	       		<div class="col-md-3">
		       		<div class="thumbnail" id="images">
			       		<img src="'.$folder . '/' . $result.'" alt="...">
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
