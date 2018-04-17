<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$errormessages = array();
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
//user has sent the form using the submit
$message = "The form has been sent </br> ";

$errormessages = array();

	$firstname  = $_POST['firstName'];
	$insertion 	= $_POST['insertion'];
	$lastname   = $_POST['lastName'];
    $messageTitle	= $_POST['messageTitle'];
    $messages   = $_POST['message'];
    $email 		= $_POST['email'];

 if ($_POST['firstName'] == "")
 {
 	$errormessages[]= "You forgot your first name";
 }
 if ($_POST['lastName'] == "")
 {
 	$errormessages[]= "You forgot your last name";
 }
 if ($_POST['messageTitle'] == "")
 {
 	$errormessages[]= "You forgot your message title";
 }if ($_POST['message'] == "")
 {
 	$errormessages[]= "You forgot your message";
 }
 if ($_POST['email'] == "")
 {
 	$errormessages[]= "You forgot your email";
 }

if(count($errormessages) == 0){
	$sql = "INSERT INTO `form` (`firstName`, `insertion`, `lastName`,`messageTitle`, `message`, `email`) VALUES ('".$_POST["firstName"]."','".$_POST["insertion"]."','".$_POST["lastName"]."','".$_POST["messageTitle"]."','".$_POST["message"]."','".$_POST["email"]."')";
$result = mysqli_query($conn,$sql);
}
}
else
{
$message = "";
}
?>