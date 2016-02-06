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
  if ( $insert ) { ?> <div class="signupmessage">
   <?php echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }
  ?></div><?php
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
<script>
function CharValidation(e) {
  var code;
  if (!e) var e = window.event;
  if (e.keyCode) code = e.keyCode;
  else if (e.which) code = e.which;
  if ((code >= 48) && (code <= 57)) { 
		return false; 
  }
  return true;
}
function NumValidation(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
</script>
<div>
<video class="video" autoplay muted loop>
  <source src="UEaavidA.mp4" type="video/mp4">
</video>
</div>

<form action="" method="post">
<fieldset style="" class="signupfield">
<legend class="legend" >PERSONAL INFORMATION</legend>
<td>
<table>
<div align="center"><br>
<tr>
<font class="text" >Surname: </font>
<input type="text" class="inputtextfield" name="sname_mem" onkeypress="return CharValidation(event)" required>&nbsp;&nbsp;
<br><br>
<font class="text">Given name: </font>
<input type="text" class="inputtextfield" name="gname_mem" onkeypress="return CharValidation(event)" required>&nbsp;&nbsp;
<br><br>
<font class="text">M.I.: </font>
<input type="text" class="inputtextfield" name="mi" maxlength="2" onkeypress="return CharValidation(event)" required>
</tr><br><br>
<tr>
<font class="text">Student No.: </font>
<input type="text" class="inputtextfield" name="sn_mem" maxlength="11" onkeypress="return NumValidation(event)" required>&nbsp;&nbsp;
<br><br>
<font class="text">College: </font>
<select class="dropdownselect" name="college_mem" >
	<option class="optiondropdown" value="None"></option>
    <option class="optiondropdown" value="artsci">Arts and Sciences</option>
    <option class="optiondropdown" value="businessad">Business Administration</option>
	<option class="optiondropdown" value="ccss">Computer Studies and Systems</option>
	<option class="optiondropdown" value="dentistry">Dentistry</option>
	<option class="optiondropdown" value="education">Education</option>
	<option class="optiondropdown" value="engineering">Engineering</option>
	<option class="optiondropdown" value="law">Law</option>
	</select>&nbsp;
<br><br>
<font class="text">Year Level: </font>
<select class="dropdownselect" name="yrlevel_mem" >
	<option class="optiondropdown" value="None"></option>
    <option class="optiondropdown" value="First Year">First Year</option>
    <option class="optiondropdown" value="Second Year">Second Year</option>
	<option class="optiondropdown" value="Third Year">Third Year</option>
    <option class="optiondropdown" value="Fourth Year">Fourth Year</option>
	<option class="optiondropdown" value="Fifth Year">Fifth Year</option>
	</select><img class="dropdownicon"/>
  </tr><br><br>
  <tr><font class="text">Address: </font>
  <input type="text" class="inputtextfield" name="address_mem" required></tr>
  <tr><br><br>
  <tr>
  <font class="text">Contact No.: </font>
  <input type="text" class="inputtextfield" name="cnum_mem" maxlength="11" onkeypress="return NumValidation(event)" required>&nbsp;&nbsp;
  <br><br>
  <font class="text">Email Address: </font>
  <input type="email" class="inputtextfield" name="email" required></tr>
  <tr><br><br>
  <input type="submit" id="signup" class="submitbutton" value="Register" >
  <input type="submit" id="welcomeagain" class="submitbutton" value="Proceed" onclick="window.location='ueaalogin.php'" >
</div>
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
