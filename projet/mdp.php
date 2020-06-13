<?php
ob_start();
session_start();
include('config/functions.php');
if(!isset($_GET['nouveau'])){
        header('Location: index.php');
    }
    else{
        extract($_GET);
        $nouveau = strip_tags($nouveau);
    }
$conn = connect();
$req = "update projetphp.".$_SESSION["type"]." set password = '".$nouveau."'
where  E_mail = '".$_SESSION["mail"]."';";
$conn->query($req);

header('location: profile.php');

?>