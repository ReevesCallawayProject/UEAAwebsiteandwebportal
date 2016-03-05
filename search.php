<?php 
	  if(isset($_POST['searchsubmit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['search'])){ 
	  $searchinputname=$_POST['search']; 
	  //connect  to the database 
	  $mysqli = new mysqli( 'localhost', 'root', '', 'ueartistamem' );
	  //-select  the database to use 
	  
	  //-query  the database table 
	  $search="SELECT * FROM images_tbl WHERE artists=" . $searchinputname; 
	  //-run  the query against the mysql query function 
	  $searchresult = $mysqli->query($search);
	  //-create  while loop and loop through result set 
	   header( 'Location: ueaasearchresult.php' );
	  } 
	  } 
	  } 
	?> 