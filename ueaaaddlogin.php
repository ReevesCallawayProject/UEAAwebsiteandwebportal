<?php
/*** begin our session ***/
session_start();
/*** check if the users is already logged in ***/
if(isset( $_SESSION['id'] ))
{
    $message = 'User is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['uname_mem'], $_POST['pword_mem']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['uname_mem']) > 30 || strlen($_POST['uname_mem']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['pword_mem']) > 30 || strlen($_POST['pword_mem']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['uname_mem']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['pword_mem']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $uname_mem = filter_var($_POST['uname_mem'], FILTER_SANITIZE_STRING);
    $pword_mem = filter_var($_POST['pword_mem'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
    $pword_mem = sha1( $pword_mem );
    
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
        $stmt = $dbh->prepare("SELECT * FROM logindetails WHERE uname_mem = :uname_mem AND pword_mem = :pword_mem");

        /*** bind the parameters ***/
        $stmt->bindParam(':uname_mem', $uname_mem, PDO::PARAM_STR);
        $stmt->bindParam(':pword_mem', $pword_mem, PDO::PARAM_STR, 40);

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
<input type="submit" id="loginback" class="submitbutton" value="Go Back" onclick="window.location='ueaawelcome.php'" >
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





















