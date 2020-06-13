<?php
session_start();
error_reporting(0);

?><!DOCTYPE html>
<html lang="en">

	<head>
		<title>COVIDO </title>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

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

			                        <button type="button" class="navbar-toggle collapsed pull-right" >
			                          <span class="sr-only">Toggle navigation</span>
			                          <i class="fa fa-bars"></i>
			                        </button>

								</div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-collapse">

									<span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>

									<ul class="nav navbar-nav navbar-right">
									
                                        <li class="active"><a href="index.php">Acceuil <span class="fa "></span></a>
                                            
                                        </li>
                                        <?php if(!isset($_SESSION["name"])):
                                        ?>
                                        <li class="dropdown"><a> S'identifier <span class="fa fa-angle-down"></span></a>
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="espacemedecins.php"> Espace médecin </a></li>
                                                        <li><a href="espace_visiteur.php"> Espace visiteur</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                       <?php endif;
                                        $var = "";
                                        if($_SESSION["type"] == "doctor") $var = "Dr ";
                                        if(isset($_SESSION["name"])): 
                                        ?>
                                        <li class="dropdown"><a href=""><?php echo $var.$_SESSION["name"]; ?><span class="fa fa-angle-down"></span></a>
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="profile.php">visiter profil </a></li>
                                                        <li><a href="deconnecter.php">se déconnecter</a></li>
                
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endif;?>
                                        <!-- /Pages -->
										<!-- Blog -->
                                        <li class="dropdown"><a href="forum.php">Forum & Questions <span class="fa"></span></a>
                                            <!-- submenu-wrapper -->

                                        </li>
                                        <li class="dropdown"><a href="guide.php">Guide Covid-19 <span class="fa"></span></a>
                                            
									</ul>
								</div><!-- /.navbar-collapse -->								
							</div><!-- /.container -->

							
						</nav>
					</header>

                    <div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#main-carousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slider/slide-1.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                        <h1 class="animated lightSpeedIn">Restez chez vous ! </h1>

										<p class="lead animated lightSpeedIn">L'heure est grave et on a les cartes en mains.<br>
											Notre avenir, et celui de nos proches ne tient <br>
											qu'a nous et ça n'a jamais été aussi simple !</p>

                                        <a class="btn btn-default animated lightSpeedIn" href="https://www.who.int/health-topics/coronavirus">En Savoir Plus sur le COVID-19</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <img src="img/slider/slide-2.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                        <h1 class="animated bounceIn">Protégez-vous et vos proches</h1>

                                        <p class="lead animated bounceIn">Créez un environnement sécuritaire, suivez les modes d'emploi et 
											protégez-vous des dangers en sachant les reconnaître. .</p>
                                        <a class="btn btn-default animated bounceIn" href="https://www.who.int/health-topics/coronavirus">En Savoir Plus sur le COVID-19</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->

                        <!-- Controls -->
                        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- #main-carousel-->

			        <!-- services start -->
					<section class="service-home service-home2 section-padding">
			            <div class="container">
			              <div class="row">
			                <div class="col-xs-12 text-center">
			                  <h2 class="section-title">Méthodes de prévention</h2>
							  <span class="section-sub">Protégez-vous et protégez les autres en étant ‎informé des éléments<br>
								 essentiels et en prenant les ‎précautions adaptées. <br>
								 Suivez les conseils de ‎l’organisme de santé publique du lieu où vous vivez.<br> 
			                </div>
			              </div> <!-- /.row -->

			              <div class="row content-row">
			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home thumb-grid">
				              			<a href="#"><img src="img/service/laver.jpg" alt=""></a>
				              		</div>
				              		
				              		<h3>Lavez les mains</h3>
									  <p>Se laver souvent les mains. <br> 
										Utiliser du savon et ‎de l’eau, <br> ou une solution hydroalcoolique.<br> ou un gel antycéptique ‎ </p>
			              		</div>
			              	</div><!-- /.col-sm-4 -->

			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home thumb-grid">
				              			<a href="#"><img src="img/service/masque.jpg" alt=""></a>
				              		</div>
				              		<h3> </h3>Portez une bavette </h3>
				              		<p>Rester à distance de toute personne <br> qui tousse ‎ou éternue. <br> Et portez les masques de protection ‎ ‎ </p>
			              		</div>

			              	</div><!-- /.col-sm-4 -->

			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home thumb-grid">
				              			<a href="#"><img src="img/service/stayhome.jpg" alt=""></a>
				              		</div>
				              		<h3>Restez chez-Vous</h3>
				              		<p>Respectez les procédures prises <br> par le gouvernorat et <br> restez en confinement. <br> Ne sortez qu'en cas d'urgences. </p>
			              	   </div>
			              	</div><!-- /.col-sm-4 -->
			              </div> <!-- /.row -->
			            </div><!-- /.container -->
			        </section>
			        <!-- services end -->

			        <section class="feature-section section-padding">
				        <div class="container">
				        	<div class="row">
				        		<div class="col-sm-7 col-xs-12">
				        			<h2>Mesures de protection essentielles contre le nouveau coronavirus</h2>

									<p>Tenez-vous au courant des dernières informations sur la flambée de COVID-19, disponibles sur le site Web de l’OMS et auprès des autorités de santé publique nationales et locales. La COVID-19 continue de toucher surtout la population de la Chine, même si des flambées sévissent dans d’autres pays. La plupart des personnes infectées présentent des symptômes bénins et guérissent, mais d’autres peuvent avoir une forme plus grave. Prenez soin de votre santé et protégez les autres en suivant les conseils</p> 

								

									<a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="btn btn-primary">Mesures de protection détaillés</a>
				        		</div>
				        
				        	</div>
				        </div>
			        </section>

			        <!-- counter start -->
			        <section class="counter-section" data-stellar-background-ratio="0.5">
			        	<div class="container">
							<div class="row">
						        <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description "><strong class="timer">2</strong> MILLIONS <br>Cas totales</span>
						          </div>
						        </div> 
						       <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description"><strong class="timer">153</strong>MILLES <br>Cas sont morts</span>
						          </div>
						        </div> 
						       <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description "><strong class="timer">569</strong>MILLES <br>Cas sont rétablis</span>
						          </div>
						        </div> 
					      	</div> <!-- /.row -->
			        	</div><!-- /.container -->
			        </section><!-- /.counter-section -->
			        <!-- counter end -->

			        <!-- cta start -->
			        <section class="cta-section">
			        	<div class="container text-center">
			        		<a data-toggle="modal" data-target="#quoteModal" href="https://www.worldometers.info/coronavirus/" class="btn btn-primary quote-btn">Dérniers statistiques</a>

			        	</div><!-- /.container -->
			        </section><!-- /.cta-section -->
			        <!-- cta end -->
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
