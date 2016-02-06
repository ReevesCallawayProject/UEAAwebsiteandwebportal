<?php
/*** begin our session ***/
session_start();

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['admin_uname'], $_POST['admin_pword']))
{
    $message = 'Please enter a valid username and password!';
}

/*** check the username is the correct length ***/
elseif (strlen( $_POST['admin_uname']) > 30 || strlen($_POST['admin_uname']) < 4)
{
    $message = 'Incorrect Length for Username!';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['admin_pword']) > 30 || strlen($_POST['admin_pword']) < 4)
{
    $message = 'Incorrect Length for Password!';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['admin_uname']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric!";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['admin_pword']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric!";
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

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("INSERT INTO admin (admin_uname, admin_pword ) VALUES (:admin_uname, :admin_pword )");

        /*** bind the parameters ***/
        $stmt->bindParam(':admin_uname', $admin_uname, PDO::PARAM_STR);
        $stmt->bindParam(':admin_pword', $admin_pword, PDO::PARAM_STR, 30);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        $message = 'New Admin Registered!';
    }
    catch(Exception $e)
    {
        /*** check if the username already exists ***/
        if( $e->getCode() == 23000)
        {
            $message = 'Username already exists!';
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'We are unable to process your request. Please try again later."';
        }
    }
}
?>

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
<video class="videoAB" autoplay muted loop>
  <source src="UEaavidA.mp4" type="video/mp4">
</video>
</div>

<form action="" method="post">
<fieldset style="" class="signupfield">
<legend class="legend" >LOGIN INFORMATION</legend>
<td>
<table>
<div align="center"><br>
<tr>
 <font class="text" >Username: </font>
  <input type="text" class="inputtextfield" name="admin_uname" required></tr><br><br>
  <font class="text" >Password: </font>
  <input type="password" class="inputtextfield" name="admin_pword" required></tr><br><br><br><br>

<font class="loginmessage"><p><?php echo $message; ?></font>

 <input type="submit" id="welcomeagain" class="submitbutton" value="Proceed" onclick="window.location='ueaawelcome.php'" >
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













