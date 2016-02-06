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
  $sql = "INSERT INTO users ( name, email ) VALUES ( '{$mysqli->real_escape_string($_POST['name'])}', '{$mysqli->real_escape_string($_POST['email'])}' )";
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
<form method="post" action="">
  <input name="name" type="text">
  <input name="email" type="email">
  <input type="submit" value="Submit Form">
</form>
