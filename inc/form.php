<?php
$errormessages = array();
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
//user has sent the form using the submit
$message = "User has sent the form </br> ";

$errormessages = array();

	$lastname   = $_POST['lastName'];
	$insertion 	= $_POST['insertion'];
    $firstname  = $_POST['firstName'];
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
	$sql = "INSERT INTO `form` (`firstName`, `insertion`, `lastName`,`messageTitle`, `message`, `email`, `website`) VALUES ('".$_POST["firstName"]."','".$_POST["insertion"]."','".$_POST["lastName"]."','".$_POST["messageTitle"]."','".$_POST["message"]."','".$_POST["email"]."')";
$result = mysqli_query($conn,$sql);
}
}
else
{
$message = "User has not yet send the form";
}
?>