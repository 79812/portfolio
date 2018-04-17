<?php 
try { 
$pdo = new PDO("mysql:host=localhost;dbname=portfolio", 'root', '');
}
catch(PDOException $e){
  echo $e->getMessage();
}

$selectSQL = "SELECT projectTitle, projectDescription, projectImage, projectLanguage FROM projectsnl";

$result = $conn->query($selectSQL);
$sqlImage = "SELECT projectImage FROM projectsnl";
$stmt = $pdo->prepare($sqlImage);
$stmt->execute();
?>