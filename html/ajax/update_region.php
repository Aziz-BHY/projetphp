<?php
$mysqli = new mysqli("localhost", "root", "MyNewPass");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "update projetphp.region set nbMalade = nbMalade + ? , nbMort = nbMort + ? , nbGuerri = nbGuerri + ? where nomRegion = ?;";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $_GET['nbmal'],$_GET['nbmo'],$_GET['nbgue'],$_GET['reg']);
$stmt->execute();
$stmt->close();

?>