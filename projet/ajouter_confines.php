<?php 
ob_start();
session_start();
 if($_SESSION["type"] != "doctor"){
   header('Location: index.php');
}
error_reporting(0);
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
        <link href="css/tableau.css" rel="stylesheet">

	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->

		<script language="javascript">
		function goto(){
			var elem = document.getElementById("1");
			elem.innerHTML = "";
			<?php
				echo "<h2>aziz</h2>";
			?>
		}
		</script>


	</head>

	

	<body id="page-top">
		<?php 
			include('config/functions.php');
			$ready = false;
			if(isset($_POST)){
				if(!existDB($_POST["c_cin"],"confines","cin_c")){
					if(!existDB($_POST["c_id"],"confines","id_c")){
						$ready= true;
					}
				}
				if($ready)
				insert("'".$_POST["c_id"]."','".$_POST["c_nom"]."','".$_POST["c_prenom"].
				"','".$_POST["c_cin"]."','".$_POST["c_date_naissance"]."','".$_POST["c_date_test"].
				"','".$_POST["c_symptomes"]."','".$_POST["c_etat"]."','".$_POST["localistion"].
				"','".$_POST["c_remarques"]."'","confines");
			}	
		?>
		<div id="st-container" class="st-container">
    		<div class="st-pusher">
    			<div class="st-content">
					<header class="header">
						<nav class="top-bar">
							<div class="overlay-bg">
								<div class="container">
									<div class="row">
										
										<div class="col-sm-6 col-xs-12">
											<div class="call-to-action">
												<ul class="list-inline">
													<li><i class="fa fa-phone"> 90-110-144</i> </li>
													<li><i class="fa fa-envelope"> Hadhami.ouni@etudiant-fst.utm.tn</i> </li>
												</ul>
											</div>
										</div>

										<div class="col-sm-6 hidden-xs">
											<div class="topbar-right">
												
												<ul class="social-links list-inline pull-right">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
												</ul>
											</div>
										</div>
									</div><!-- /.row -->
								</div><!-- /.container -->
							</div><!-- /.overlay-bg -->
						</nav><!-- /.top-bar -->

						<div id="search">
						    <button type="button" class="close">x</button>
						    <form methode=post action="forum.php">
						        <input type="search" value="" name="searchfor"  placeholder="type keyword(s) here" />
						        <button type="submit" class="btn btn-primary">Search</button>
						    </form>
						</div>
						
						<nav class="navbar navbar-default" role="navigation">
							
							<div class="container mainnav">
								<div class="navbar-header">
									<h1 class="logo"><a class="navbar-brand" href="index.php"><img src="img/logo.png" width=190px height=40px alt=""></a></h1>

			                     

								</div>

                               <!-- Collect the nav links, forms, and other content for toggling -->
							  <div class="collapse navbar-collapse navbar-collapse">

									<span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>

									<ul class="nav navbar-nav navbar-right">
									
                                        <li class="active"><a href="index.php">Acceuil <span class="fa "></span></a>
                                            
                                        </li>
                                        
                                         <li class="dropdown"><a href="#">Dr <?=$_SESSION["name"]?> <span class="fa fa-angle-down"></span></a>
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="profile.php">Mon profile </a></li>
                                                        <li><a href="deconnecter.php">Se déconnecter</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    
                                        <li class="dropdown"><a href="gestion_confines.php">Gestion des confinés <span class="fa fa-angle-down"></span></a>
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="ajouter_confines.php">Ajouter un confiné </a></li>
                                                        <li><a href="consulter_confines.php">Consulter un confiné</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        
                                        <li class="dropdown"><a href="forum.php">Forum<span class="fa"></span></a>
                                            
                                        </li>
                                       
                                        <li class="dropdown"><a href="guide.php">Guide Covid-19 <span class="fa"></span></a>
                                        <li class="dropdown"><a href="statMAP.php">Statistiques  <span class="fa"></span></a>

									</ul>
								</div><!-- /.navbar-collapse -->	
							  </div><!-- /.navbar-collapse -->
						  </div><!-- /.container -->

						  
					  </nav>
				  </header>
					
					<section class="page-title-section">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="page-header-wrap">
										<div class="page-header">
									   		<h1>Ajouter un confiné</h1>
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<!--corps de la page-->

<section class="container" >
<br>
                        <div class="row">       
                            <form action="ajouter_confines.php" method="POST">
                                <div class="form-group">
                                    <label for="c_id"> ID </label>
                                    <input id="c_id" name="c_id" type="text" class="form-control" required="" placeholder="">
								</div>
                                <div class="form-group">
                                    <label for="c_nom"> Nom </label>
                                    <input id="c_nom" name="c_nom" type="text" class="form-control" required="" placeholder="">
								</div>
                                <div class="form-group">
                                    <label for="c_prenom"> Prénom </label>
                                    <input id="c_prenom" name="c_prenom" type="text" class="form-control" required="" placeholder="">
								</div><div class="form-group">
                                    <label for="c_cin"> CIN </label>
                                    <input id="c_cin" name="c_cin" type="text" class="form-control" required="" placeholder="">
								</div>
                                <div class="form-group">
                                    <label for="c_date_naissance"> Date de naissance </label>
                                    <input id="c_date_naissance" name="c_date_naissance" type="date" class="form-control" required="" placeholder="">
								</div>
                                <div class="form-group">
                                    <label for="c_date_test"> Date du test  </label>
                                    <input id="c_date_test" name="c_date_test" type="date" class="form-control" required="" placeholder="">
								</div>
                                <div class="form-group">
                                    <label for="c_symptomes"> Symptômes </label>
                                    <textarea id="c_symptomes" name="c_symptomes" class="form-control" required="" placeholder=""></textarea>
								</div>

                                <div class="form-group">
                                    <label for="c_etat"> Etat critique </label>
                                    <ul class="listview">
                                        <li>
                                            <label>
                                                <input name="c_etat" value="oui" checked="" type="radio">
                                                <span>Oui</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input name="c_etat" value="non" type="radio">
                                                <span>Non</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="c_remarques"> Remarques </label>
                                    <textarea id="c_remarques" name="c_remarques" class="form-control" required="" placeholder=""></textarea>
								</div>
                                <div class="form-group">
                                    <label for="c_localisation"> Localisation  </label>
                                    <input id="c_localisation" name="c_localisation" type="text" class="form-control" required="" placeholder="">
								</div>
                                <br>
                                <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
                                
                            </form>
						</div>
                        <br>
</section>

								
			        <!-- copyright-section start -->
			        <footer class="copyright-section">
			        	<div class="container text-center">
			        		<div class="copyright-info">
			        			<span>Copyright © 2020 COVIDO. All Rights Reserved.<br> Designed by Hadhami El Ouni and Aziz Ben Hadj Yahia</span>
			        		</div>
			        	</div><!-- /.container -->
			        </footer>
			        <!-- copyright-section end -->
				</div> <!-- .st-content -->
    		</div> <!-- .st-pusher -->

	    	

		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>


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
