<?php
/*** begin our session ***/

        session_start();

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['uname_mem'], $_POST['pword_mem']))/*** , $_SESSION['sn_mem']***/
{
    $message = 'Please enter a valid username and password!';
}

/*** check the username is the correct length ***/
elseif (strlen( $_POST['uname_mem']) > 30 || strlen($_POST['uname_mem']) < 4)
{
    $message = 'Incorrect Length for Username!';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['pword_mem']) > 30 || strlen($_POST['pword_mem']) < 4)
{
    $message = 'Incorrect Length for Password!';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['uname_mem']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric!";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['pword_mem']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric!";
}
else
{

    /*** if we are here the data is valid and we can insert it into database ***/
    $uname_mem = filter_var($_POST['uname_mem'], FILTER_SANITIZE_STRING);
    $pword_mem = filter_var($_POST['pword_mem'], FILTER_SANITIZE_STRING);
   /*** $student_num = filter_var($_SESSION['sn_mem'], FILTER_SANITIZE_STRING);***/
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
		
        /*** prepare the insert ***/
        $stmt = $dbh->prepare("INSERT INTO phpro_users (phpro_username, phpro_password) VALUES (:uname_mem, :pword_mem)");

        /*** bind the parameters ***/
        $stmt->bindParam(':uname_mem', $uname_mem, PDO::PARAM_STR);
        $stmt->bindParam(':pword_mem', $pword_mem, PDO::PARAM_STR, 30);
      /***  $stmt->bindParam(':student_num', $student_num, PDO::PARAM_STR);***/
        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** unset the form token session variable ***/
        unset( $_SESSION['form_token'] );

        /*** if all is done, say thanks ***/
        $message = 'New Member added!';
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

<form action="" method="post">
<fieldset style="" class="signupfield">
<legend class="legend" >MEMBER LOGIN</legend>
<td>
<table>
<div align="center"><br>
<tr>
 <font class="text" >Username: </font>
  <input type="text" class="inputtextfield" name="uname_mem" required></tr><br><br>
  <font class="text" >Password: </font>
  <input type="text" class="inputtextfield" name="pword_mem" required></tr><br><br><br><br>

<font class="loginmessage"><p><?php echo $message; ?></font>
 <input type="submit" id="submitlogindetails" class="submitbutton" value="Submit"  >
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













