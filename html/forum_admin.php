<?php
ob_start();
session_start();
error_reporting(0);
include('config/functions.php');
if(!isset($_SESSION["admin_name"])){
    header("location: loginAdmin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>COVIDO</title>
	   	<!-- Web Fonts -->
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
    	<link href="css/template.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
        <link href="admin.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	        <script>
    function delete_forum(id){
            elm = document.getElementById(id);
             var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.open("GET", "ajax/delete_forum.php?id="+id, true);
            xhttp.send();
        elm.parentNode.removeChild(elm);
        }
    </script>
	</head>

	

	<body id="page-top" style="color:#fff"  >
		<div id="st-container" class="st-container">
    		<div class="st-pusher">
    			<div class="st-content">
                                    <br>
                    <ul class="sidenav">
                    <li><a href="indexAdmin.php">Acceuil</a></li>
                    <li><a href="docteurs.php">Docteurs en attente</a></li>
                    <li><a href="forum_admin.php">Forum</a></li>
                    <li><a href="statistiques.php">Statistiques</a></li>
                    <li><a href="deconnecter.php">Se déconnecter</a></li>
                    </ul>
                          
                    <?php
                     $servername = "localhost";
                                $username = "root";
                                $password = "MyNewPass";
                                $conn = new mysqli($servername, $username, $password);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                        if(isset($_GET["searchfor"])){
                            extract($_GET);
                            $search = strip_tags($searchfor);
                            $req= "SELECT * FROM projetphp.forum_sujets where titre like '%".$search."%';";
                            echo "<h2> Searching for: ".$search."</h2>";
                        }
                    
                    ?>
					
				<!--corps de la page-->
		<section class="container">
		<!-- début forum les plus visités -->
			<div class="fac-accordion">
                <?php
                              if(!isset($_GET["searchfor"])) 
                                $req= "SELECT * FROM projetphp.forum_sujets;";
                                $result = $conn->query($req);
                                                    $id = 0;
                                while($row = $result->fetch_assoc()):
                    		?>
                
				<div class="container">
					<div class="accordion container" id="accordion">
						<div class="accordion-group">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="<?php echo "#collapse".$id ?>">
									<a href="forum1_admin.php?titre=<?= $row["titre"]?>"><h3><?php echo $row["titre"] ?></h3> </a>
									<span id="user"> <?= $row["auteur"] ?></span>
									<span id="date" class="pull-right"> <?php echo $row["date_derniere_reponse"] ?></span>
								</a>
							
							<div id="<?php echo "collapse".$id ?>" class="accordion-body collapse in">
								<div class="accordion-inner">
                                <a class="btn btn-danger pull-right" onclick="delete_forum(<?=$row["id"]?>)"> Supprimer </a> <br>

									<?php echo $row["contenu"] ?>
								</div>
							</div><!-- /.accordion-group-->
						</div><!-- /.accordion-group-->
						                                      
					</div>
				</div>
                <?php
                    $id++;
                    endwhile;?>
			
			</div> <!-- fin forum les plus visités -->				
				</section>
			    

		<!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- owl.carousel -->
	    <script src="owl.carousel/owl.carousel.min.js"></script>
	    <!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- classie -->
		<script src="js/classie.js"></script>
		<!-- selectFx -->
		<script src="js/selectFx.js"></script>
		<!-- sticky kit -->
		<script src="js/jquery.sticky-kit.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <!--TWITTER FETCHER-->
	    <script src="js/twitterFetcher_min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</html>
