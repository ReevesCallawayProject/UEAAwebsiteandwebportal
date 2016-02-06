<?php
/*** begin our session ***/
session_start();
/*** check if the users is already logged in ***/
if(isset( $_SESSION['id'] ))
{
    $message = 'User is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['admin_uname'], $_POST['admin_pword']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['admin_uname']) > 30 || strlen($_POST['admin_uname']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['admin_pword']) > 30 || strlen($_POST['admin_pword']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['admin_uname']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['admin_pword']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $admin_uname = filter_var($_POST['admin_uname'], FILTER_SANITIZE_STRING);
    $admin_pword = filter_var($_POST['admin_pword'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    $admin_pword = sha1( $admin_pword );
    
    /*** connect to database ***/
    /*** mysql hostname ***/
    $hostname = 'localhost';

    /*** mysql username ***/
    $username = 'username';

    /*** mysql password ***/
    $password = 'password';

    /*** database name ***/
    $dbname = 'ueartistamem';

    try
    {
        $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", "root", "");
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = $dbh->prepare("SELECT * FROM admin WHERE admin_uname = :admin_uname AND admin_pword = :admin_pword");

        /*** bind the parameters ***/
        $stmt->bindParam(':admin_uname', $admin_uname, PDO::PARAM_STR);
        $stmt->bindParam(':admin_pword', $admin_pword, PDO::PARAM_STR, 30);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $id = $stmt->fetchColumn();

        /*** if we have no result then fail boat ***/
        if($id == false)
        {
                $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
        else
        {
                /*** set the session user_id variable ***/
                $_SESSION['id'] = $id;

                /*** tell the user we are logged in ***/
                $message = 'You are now logged in';
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
<input type="submit" id="welcomeproceed" class="submitbutton" value="Proceed" onclick="window.location='ueaahome.php'" >
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





















