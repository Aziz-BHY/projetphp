<?php
ob_start();
session_start();
error_reporting(0);
include('config/functions.php');
if(!isset($_SESSION["admin_name"])){
    header("location: loginAdmin.php");
}


?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin </title>
	     	
    <link href="design.css" rel="stylesheet">
    <link href="admin.css" rel="stylesheet">



</head>
    <body>
	
        <div id="div-1">
            <form >
                <center>
                    <h2 style="font-size:30px" > Bienvenue  </h2>
                    <h2 style="font-size:30px; color:#057680"> <?= $_SESSION["admin_name"]?></h2>
                    <br>
                    <a class="greenButton" href="docteurs.php"> Gestion des médecins </a> <br><br>
                    <a class="greenButton" href="forum_admin.php"> Gestion des forums </a> <br><br>
                    <a class="greenButton" href="statistiques.php"> Gestion des statistiques </a> <br><br>
                    
                </center>
                 
            </form>
            
    </div>
       
</body>

</html>