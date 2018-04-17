<?php 
try { 
$pdo = new PDO("mysql:host=localhost;dbname=portfolio", 'root', '');
}
catch(PDOException $e){
  echo $e->getMessage();
}

$selectSQL = "SELECT projectTitle, projectDescription, projectImage, projectLanguage FROM projects";

$result = $conn->query($selectSQL);
$sqlImage = "SELECT projectImage FROM projects";
$stmt = $pdo->prepare($sqlImage);
$stmt->execute();
?>