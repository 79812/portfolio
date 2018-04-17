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
$message = "Het formulier is verstuurd </br> ";

$errormessages = array();

	$firstname  = $_POST['firstName'];
	$insertion 	= $_POST['insertion'];
	$lastname   = $_POST['lastName'];
    $messageTitle	= $_POST['messageTitle'];
    $messages   = $_POST['message'];
    $email 		= $_POST['email'];

 if ($_POST['firstName'] == "")
 {
 	$errormessages[]= "U bent uw naam vergeten";
 }
 if ($_POST['lastName'] == "")
 {
 	$errormessages[]= "U bent uw achternaam vergeten";
 }
 if ($_POST['messageTitle'] == "")
 {
 	$errormessages[]= "U bent het ondewerp vergeten";
 }if ($_POST['message'] == "")
 {
 	$errormessages[]= "U bent het bericht vergeten";
 }
 if ($_POST['email'] == "")
 {
 	$errormessages[]= "U bent uw email vergeten";
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