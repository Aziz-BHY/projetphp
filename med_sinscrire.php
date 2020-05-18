<?php 
ob_start();
session_start();
 if(isset($_SESSION["name"])){
    header('Location: index.php');
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
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>

	

	<body id="page-top">
        <?php 
        include('config/functions.php');
         $ready = false;
        if(isset($_POST)){
            if(!existDB($_POST["med_CIN"],"doctor","CIN")){
                if(!existDB($_POST["med_ID"],"doctor","DoctorID")){
                    if(!existDB($_POST["med_tel"],"doctor","tel")){
                            $ready= true;
                        }
                }
            }
            if($ready)
            insert("'".$_POST["med_nom"]."',".$_POST["med_CIN"].",'".$_POST["med_naissance"]."',".$_POST["med_ID"].",'".$_POST["med_mail"]."','".$_POST["med_hopital"]."','".$_POST["med_service"]."','".$_POST["med_passe"]."',".$_POST["med_tel"], "doctor");
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
						  <button type="button" class="close">×</button>
						  <form>
							  <input type="search" value="" placeholder="type keyword(s) here" />
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
								  
									  <li class="dropdown"><a href="espacemedecins.php">Espace Médecins <span class="fa fa-angle-down"></span></a>
										  <div class="submenu-wrapper">
											  <div class="submenu-inner">
												  <ul class="dropdown-menu">
													  <li><a href="med_seconnecter.php">Se Connecter </a></li>
													  <li><a href="med_sinscrire.php">Créer un compte</a></li>
													  
												  </ul>
											  </div>
										  </div>
									  </li>
									  <li class="dropdown"><a href="forum.php">Forum & Questions <span class="fa fa-angle-down"></span></a>
										  <!-- submenu-wrapper -->
										  <div class="submenu-wrapper">
											  <div class="submenu-inner">
												  <ul class="dropdown-menu">
													  <li><a href="f_seconnecter.php">Se Connecter </a></li>
													  <li><a href="f_sinscrire.php">Créer un compte</a></li>
													  
												  </ul>
											  </div>
										  </div>
									  </li>
									 
									  <!-- /Pages -->
									  <!-- Blog -->
									  <li class="dropdown"><a href="guide.php">Guide Covid-19 <span class="fa"></span></a>
										  
								  </ul>
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
									   		<h1>Espace Médecins</h1>
                                        </div>
                                        <ol class="breadcrumb">
                                            <li><a href="index.php">Acceuil</a></h2></li>
                                              <li><a href="espacemedecins.php">Espace Médecins</a></li>
                                              <li class="active"><a href="med_sinscrire.php">S'inscrire</a> </li>
                                        </ol>
                                           
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<!--corps de la page-->
				<section class="single-service-contents">
                    <div class="container">	

						<div class="row">
                            <form  method=post action="med_sinscrire.php">
								<div class="col-md-8">
									<div class="form-group">
										<label for="med_nom"> Nom & Prénom </label>
										<input id="med_nom" name="med_nom" type="text" class="form-control" required="" placeholder="">
									</div>
								</div>
								
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label name="med_CIN">Numéro de CIN</label>
                                            <input id="med_CIN" name="med_CIN" type="number" class="form-control" required="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="med_naissance">Date de naissance</label>
                                            <input id="med_naissance" name="med_naissance" type="date" class="form-control" required="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row"></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="med_ID">ID du médecin</label>
                                            <input id="med_ID" name="med_ID" type="number" class="form-control" required="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="med_tel">Numéro de Téléphone</label>
                                            <input id="med_tel" name="med_tel" type="tel" class="form-control" required="" placeholder="">
                                        </div>
                                    </div>
									<div class="col-md-8">
										<div class="form-group">
										<label for="med_mail">E-mail</label>
										<input id="med_mail" name="med_mail" type="email" class="form-control" required="" placeholder="">
									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="med_hopital">Hôpital</label>
                                                <input id="med_hopital" name="med_hopital" type="text" class="form-control" required="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="med_service">Service</label>
                                            <input id="med_service" name="med_service" type="text" class="form-control" required="" placeholder="">
                                        </div>
                                    </div>
								</div>
									<div class="form-group">
										<label for="med_passe">Mot de passe</label>
										<input id="med_passe" name="med_passe" type="password" class="form-control" required="" placeholder="">
									</div>
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </form>			
						</div>
					</div>
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
