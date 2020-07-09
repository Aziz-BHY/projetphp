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
<script>
    function up_stats(){
        var p = document.getElementById("aziz");
        var regions = ["Beja" , "Ben_Arous", "Bizerte", "Gabes", "Gafsa", "Jendouba", "Kairouan", "Kasserine", "Kebili", "Kef", "Mahdia", "Manubah", "Medenine", "Monastir", "Nabeul", "Sfax", "Sidi_Bou_Zid", "Siliana", "Sousse", "Tataouine", "tozeur", "Tunis", "Zaghouan"];
        var i = 0;
        p.innerHTML = regions.length;
        for(i = 0 ; i<23 ; i++){
        
            var tr = document.getElementById(i);
            var td = tr.getElementsByTagName("td");
            var region = regions[i];
            var input1 = td[1].getElementsByTagName("input")[0].value;
            var input2 = td[2].getElementsByTagName("input")[0].value;
            var input3 = td[3].getElementsByTagName("input")[0].value;
            xhttp = new XMLHttpRequest();
            xhttp.open("GET", "update_region.php?reg="+region+"&nbmal="+input1+"&nbmo="+input2+"&nbgue="+input3, true);
            xhttp.send();
        }
        window.location.href = "statistiques.php";

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
  <h1>Gestion des statistiques</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Nom Région</th>
          <th>Nombre des malades</th>
          <th>Nombre des morts</th>
          <th>Nombre des guerris</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr id="0">
          <td>Beja</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="1">
          <td>Ben Arous</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="2">
          <td>Bizerte</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="3">
          <td>Gabes</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
          <tr id="4">
          <td>Gabes</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="5">
          <td>Jendouba</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="6">
          <td>Kairouan</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="7">
          <td>Kasserine</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="8">
          <td>Kebili</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="9">
          <td>Kef</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="10">
          <td>Mahdia</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="11">
          <td>Manubah</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="12">
          <td>Medenine</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="13">
          <td>Monastir</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="14">
          <td>Nabeul</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr> 
		<tr id="15">
          <td>Sfax</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="16">
          <td>Sidi Bou Zid</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="17">
          <td>Siliana</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="18">
          <td>Sousse</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="19">
          <td>Tataouine</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="20">
          <td>Tozeur</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="21">
          <td>Tunis</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		<tr id="22">
          <td>Zaghouan</td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
          <td><input type="text" name="" value="0"></td>
        </tr>
		
        
      </tbody>
    </table>
  </div>
</section>
			<center><a class="greenButton" onclick="up_stats()">Modifier</a></center>
<p id="aziz"></p>

</body>

</html>