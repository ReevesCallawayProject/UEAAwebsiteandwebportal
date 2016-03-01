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
  
  ?></div><?php
  // Close our connection
  $mysqli->close();
}
?>