<?php 
ob_start();
session_start();
error_reporting(0);
include('config/functions.php');
if(!isset($_SESSION["admin_name"])){
    header("location: loginAdmin.php");
}


if(!isset($_GET['titre'])){
        header('Location: indexadmin.php');
    }
    else{
        extract($_GET);
        $titre = strip_tags($titre);
    }
?>

<html>
<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Admin </title>
		
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
        <link href="css/template.css" rel="stylesheet">

	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">
        <link href="admin.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
        <script>
        function delete_forum(id){
             var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.open("GET", "ajax/delete_forum.php?id="+id, true);
            xhttp.send();
            setTimeout(() => {   window.location.href = "forum_admin.php"; }, 500);
        }
            function delete_reponse(id){
                elm = document.getElementById(id);
                 var xhttp;
                xhttp = new XMLHttpRequest();
                xhttp.open("GET", "ajax/delete_reponse.php?id="+id, true);
                xhttp.send();
                elm.parentNode.removeChild(elm);

            }
    </script>
</head>

<body style="color:#fff" >

<ul class="sidenav">
  <li><a href="indexAdmin.php">Acceuil</a></li>
  <li><a href="docteurs.php">Docteurs en attente</a></li>
  <li><a href="forum_admin.php">Forum</a></li>
  <li><a href="statistiques.php">Statistiques</a></li>
  <li><a href="deconnecter.php">Se déconnecter</a></li>
</ul>
      <?php
                $conn = connect();
                $req= "SELECT * FROM projetphp.forum_sujets where titre = '".$titre."';";
                $req .= "SELECT * FROM projetphp.forum_reponses 
                    where correspondance_sujet = (select id from projetphp.forum_sujets where titre = '".$titre."' );";
                
            if ($conn->multi_query($req)) 
             if ($result = $conn->store_result()) 
                 $row = $result->fetch_row();
            $id = $row[0];
            ?>
<div class="container" >
    <header class="entry-header clearfix">        
        <h2 class="entry-title"><a href="#" rel=""><?php echo $row[2]; ?></a></h2>
        <div class="entry-meta">
            <ul class="list-inline">
                <li>
                    <span class="author">
                        <small>Posté par </small><a class="url" href="#"><?php echo $row[1]; ?></a> 
                    </span>
                </li>
                <li>
                    <span class="posted-in">
                    <small>Le </small> <a href="#"><?php echo $row[3];?></a>
                    </span>
                </li>
            </ul>
        </div>
    </header>

    <div class="entry-content">
        <a class="redButton pull-right" onclick="delete_forum(<?=$id?>)"> Supprimer </a> 

        <p><?php echo $row[4]; ?></p>
    </div>
</div>

        <br><br>

        <div class="fac-accordion">
            <?php 
                $conn->next_result();
                 if ($result = $conn->store_result()) 
                while ( $row = $result->fetch_row()):
            ?>
				<div class="container" id = "<?=$row[0] ?>">
					<div class="accordion" id="accordion">
						<div class="accordion-group">
							<div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle=""  href="#collapse<?=$row[0] ?>">
									<span id="user"> <?= $row[1] ?> </span>

                                   
								</a>
							</div>
							
							<div id="collapse<?=$row[0] ?>" class="accordion-body collapse in">
								<div class="accordion-inner">
                                    <?= $row[2] ?> 
                                    <span id="date" class="pull-right"> <?= $row[3] ?>    </span><br> <br>

                                    <a class="redButton pull-right" onclick="delete_reponse(<?=$row[0]?>)"> X </a><br>
								</div><br>

							</div><!-- /.accordion-group-->
						</div> <br><!-- /.accordion-group-->
						                                      
					</div>
				</div>
            <?php
                endwhile;
            ?>
					

</body>

</html>