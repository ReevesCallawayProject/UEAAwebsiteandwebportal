<?php
 $mysqli = new mysqli( 'localhost', 'root', '', 'ueartistamem' );
 header( 'Location: writeform.php' );
function GetImageExtension($imagetype)
  {
     if(empty($imagetype)) return false;
     switch($imagetype)
     {
        case 'image/bmp': return '.bmp';
        case 'image/gif': return '.gif';
        case 'image/jpeg': return '.jpg';
        case 'image/png': return '.png';
        default: return false;
       }
	     }
	      
	      
	      
	if (!empty($_POST['arttitle']) && ($_POST['artist_name']) && $_FILES["uploadedimage"]["name"]) {
	 
	    $file_name=$_FILES["uploadedimage"]["name"];
	    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
	    $imgtype=$_FILES["uploadedimage"]["type"];
	    $ext= GetImageExtension($imgtype);
	    $imagename=date("d-m-Y")."-".time().$ext;
	    $target_path = "images/".$imagename;
	     
	 
	if(move_uploaded_file($temp_name, $target_path)) {
	 
	    mysqli_query($mysqli,"INSERT INTO images_tbl (images_path,submission_date,image_category,artists,title,submission_time,image_status) VALUES ('".$target_path."','".date("Y-m-d")."','Crafting','".$_POST['artist_name']."','".$_POST['arttitle']."','". date("h:i:s")."','Approved')");
        
	}else{
	 
	   exit("Error While uploading image on the server");
	}
	 
	}
	 
	?>
