<?php
ob_start();
session_start();
error_reporting(0);
include('config/functions.php');
if(isset($_SESSION["admin_name"])){
    header("location: indexAdmin.php");
}


?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin </title>
	     	
    <link href="design.css" rel="stylesheet">

</head>
    <body>
	
        <div id="div-1">
            <form id="admin" method=post action="loginAdmin.php">
                <h1> Admins </h1><br>
                <input type="text" placeholder="Enter Name" name="username" id="userName"><br>
                <input type="password" placeholder="Enter Password" name="mdp"id="password"><br>
                <input type="submit" value="Submit" id="submit">
             <?php
        $conn = connect();
        $req= "SELECT * FROM projetphp.admin where username = '".$_POST["username"]."' and password = '".$_POST["mdp"]."';";
        $result = $conn->query($req);
        if ($result->num_rows == 1){
             $row = $result->fetch_assoc();
            $_SESSION["admin_name"] = $row["username"];
            header("location: indexAdmin.php");
        }
        else $er =  "username or password not found";
        if(isset($_POST["username"])){
            echo "<h2>".$er."</h2>";
        }
?>      
            </form>
            
        </div>
       
</body>

</html>