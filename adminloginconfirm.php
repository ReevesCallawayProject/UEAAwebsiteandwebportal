<?php
/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(!isset($_SESSION['name'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['phpro_username'], $_POST['phpro_password']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['phpro_username']) > 20 || strlen($_POST['phpro_username']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['phpro_password']) > 20 || strlen($_POST['phpro_password']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['phpro_username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['phpro_password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $phpro_username = filter_var($_POST['phpro_username'], FILTER_SANITIZE_STRING);
    $phpro_password = filter_var($_POST['phpro_password'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    $phpro_password = sha1( $phpro_password );
    
    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'mysql_username';

    /*** mysql password ***/
    $mysql_password = 'mysql_password';

    /*** database name ***/
    $mysql_dbname = 'ueartistaadmin';

    try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname",  "root", "");
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = $dbh->prepare("SELECT phpro_user_id, phpro_username, phpro_password FROM admin_users 
                    WHERE phpro_username = :phpro_username AND phpro_password = :phpro_password");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_username', $phpro_username, PDO::PARAM_STR);
        $stmt->bindParam(':phpro_password', $phpro_password, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $user_id = $stmt->fetchColumn();

        /*** if we have no result then fail boat ***/
        if($user_id == false)
        {
                $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
        else
        {
                /*** set the session user_id variable ***/
                $_SESSION['user_id'] = $user_id;

                /*** tell the user we are logged in ***/
                header("location: adminhome.php");
        }


    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>UE Artista</title>
    <link rel="shortcut icon" href="webicon.png">
  <link href="welcomecss.css" rel="stylesheet">
</head>
<body style="background-image:url('automnleaf.jpg');background-size:cover;">
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
<img src="logo.jpg" alt="images" class="logo" id="logosignup" >
</div>
<div class="messagefield">
<font class="loginmessage"><p><?php echo $message; ?></font>
</div>
<div>
<input type="submit" id="loginback" class="submitbutton" value="Go Back" onclick="window.location='adminlogin.php'" >
<input type="submit" id="welcomeproceed" class="submitbutton" value="Proceed" <?php if ($user_id == false){ ?> style="color:black;" disabled <?php } ?>  onclick="window.location='adminhome.php'" >
</div>
<div id="footerA">
<hr class="hrline" />
<font class="footertextA"> University of the East</font><br>
<font class="footertextB"> Artists Alliance</font>
        <div class="container">
		</div>
</div>
		
		
		
		
		
		
		
		
		
		
		
</body>
</html>





















