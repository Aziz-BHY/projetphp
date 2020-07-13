<?php 
session_start();
if(isset($_SESSION["admin_name"])) $bool = true;
unset($_SESSION);
session_destroy();
if($bool == true)
    header('location: loginadmin.php');
else 
    header('Location: index.php');
?>