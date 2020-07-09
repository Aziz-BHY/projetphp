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
     <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="css/animate.css" rel="stylesheet">
	    <!-- language CSS -->
	    <link href="css/language-select.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
		<!-- magnific-popup -->
    	<link href="css/magnific-popup.css" rel="stylesheet">
    	<!-- Main menu -->
    	<link href="css/menu.css" rel="stylesheet">
    	<!-- Template Common Styles -->
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <script>
    function delete_forum(id){
            elm = document.getElementById(id);
             var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.open("GET", "delete_forum.php?id="+id, true);
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
     <?php
                     $servername = "localhost";
                                $username = "root";
                                $password = "MyNewPass";
                                $conn = new mysqli($servername, $username, $password);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                         $req= "SELECT * FROM projetphp.forum_sujets;";
                                $result = $conn->query($req);
                                while($row = $result->fetch_assoc()):
                    		?>
    <div class="container" id = "<?=$row["id"]?>" >
					<div class="accordion" id="accordion">
						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="<?php echo "#collapse".$row["id"] ?>">
									<a href="forum1_admin.php?titre=<?= $row["titre"]?>"><h3><?php echo $row["titre"] ?></h3> </a>
									<span id="user"> <?= $row["auteur"] ?></span>
									<span id="date" class="pull-right"> <?php echo $row["date_derniere_reponse"] ?></span>
								</a>
							</div>
							
							<div id="<?php echo "collapse".$row["id"] ?>" class="accordion-body collapse in">
								<div class="accordion-inner">
                                    <a class="btn btn-danger pull-right" onclick="delete_forum(<?=$row["id"]?>)"> Supprimer </a> 
									<?php echo $row["contenu"] ?>
								</div>
							</div><!-- /.accordion-group-->
						</div><!-- /.accordion-group-->
						                                      
					</div>
				</div>
                <?php
                    endwhile;?>
					

</body>

</html>