<?php
ob_start();
session_start();
error_reporting(0);
include('config/functions.php');
if(!isset($_SESSION["admin_name"])){
    header("location: loginAdmin.php");
}


?>
<html>
<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Admin </title>
		
		<link href="admin.css" rel="stylesheet" type="text/css">
<script language="">
    function accept(id){
        var elm = document.getElementById(id);
        var elms = elm.getElementsByTagName("td");
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.open("GET", "ajax/accept.php?id="+elms[4].innerHTML+"&accept=yes", true);
        xhttp.send();
        elm.parentNode.removeChild(elm);
      
    }
    function refus(id){
        var elm = document.getElementById(id);
        var elms = elm.getElementsByTagName("td");
        elms.innerHTML = "";        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.open("GET", "ajax/accept.php?id="+elms[4].innerHTML+"&accept=no", true);
        xhttp.send();
        elm.parentNode.removeChild(elm);
    }
    
    </script>
</head>

<body>

<ul class="sidenav">
  <li><a href="indexAdmin.php">Acceuil</a></li>
  <li><a href="docteurs.php">Docteurs en attente</a></li>
  <li><a href="forum_admin.php">Forum</a></li>
  <li><a href="statistiques.php">stats</a></li>
</ul>

<section>
  <h1>Docteurs en attente</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Hôpital</th>
          <th>Service</th>
          <th>ID Médecin </th>
		  <th>Accepter</th>
		  <th>Refuser</th>
        </tr>
      </thead>
    </table>
  </div>
   
  <div class="tbl-content">
       <?php 
    $servername = "localhost";
    $username = "root";
    $password = "MyNewPass";
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $req= "SELECT * FROM projetphp.doctor where accepted = 'en attente';";
    $result = $conn->query($req);
      $id=0;
    while($row = $result->fetch_assoc()):
      $id++;
    ?>
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr id=<?= $id ?>>
          <td><?= $row["nom"]?></td>
          <td><?= $row["prenom"]?></td>
          <td><?= $row["Hopital"]?></td>
          <td><?= $row["service"]?></td>
          <td><?= $row["ID_med"]?></td>
		  <td><a class="greenButton" onclick="accept(<?= $id?>)">✔</a></td>
		  <td><a class="redButton" onclick="refus(<?= $id?>)">✘</a></td>
        </tr>
        
      </tbody>
    </table>
         <?php endwhile;?>
  </div>
 
</section>

</body>

</html>