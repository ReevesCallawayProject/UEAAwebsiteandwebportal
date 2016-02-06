<?php
// Only process the form if $_POST isn't empty
$username = 'username';
$password = 'password';
if ( ! empty( $_POST ) ) {
  
  // Connect to MySQL
  $mysqli = new mysqli( 'localhost', 'root', '', 'ueartistamem' );
  
  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }
  
  // Insert our data
  $sql = "INSERT INTO ueaamembers ( sname_mem, gname_mem, sn_mem, college_mem, yrlevel_mem, address_mem, cnum_mem, email) VALUES ( '{$mysqli->real_escape_string($_POST['sname_mem'])}', '{$mysqli->real_escape_string($_POST['gname_mem'])}', '{$mysqli->real_escape_string($_POST['sn_mem'])}', '{$mysqli->real_escape_string($_POST['college_mem'])}', '{$mysqli->real_escape_string($_POST['yrlevel_mem'])}', '{$mysqli->real_escape_string($_POST['address_mem'])}', '{$mysqli->real_escape_string($_POST['cnum_mem'])}', '{$mysqli->real_escape_string($_POST['email'])}' )";
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

<?php
/*** begin our session ***/
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
<div class="datetimeA">
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
<video class="video" autoplay muted loop>
  <source src="UEaavidA.mp4" type="video/mp4">
</video>
</div>

<form action="" method="post">
<fieldset style="" class="signupfield">
<legend class="legend" >WRITE SOMETHING</legend>
<td>
<table>
<div align="center"><br>
<tr>
<textarea class="writetext" name="textmessage">
</textarea>
</tr></div>
<input type="submit" id="signup" class="submitbutton" value="Submit" >
  <input type="submit" id="welcomeagain" class="submitbutton" value="Post" onclick="window.location='ueaahome.php'" >
</table>
</fieldset>
</td>


<div id="footerA">
<hr class="hrline" />
<font class="footertextA"> University of the East</font><br>
<font class="footertextB"> Artists Alliance</font>
        <div class="container">
		</div>
</div>
		
		
		
		
		
		
		
		
		
		
		
</body>
</html>
