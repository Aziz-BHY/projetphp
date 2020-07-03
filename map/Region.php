<?php
$mysqli = new mysqli("localhost", "root", "MyNewPass");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "select * from projetphp.region where nomRegion = ?;";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nom , $nbMalade , $nbMort , $nbGerri);
$stmt->fetch();
$stmt->close();

echo "Region: ".$nom."<br>";
echo "malade: ".$nbMalade."<br>";
echo "morts: ".$nbMort."<br>";
echo "gerri: ".$nbGerri."<br>";
    

?>