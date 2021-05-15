<?php
    require_once '../Controller/platC.php';
    require_once '../Model/plat.php';
	require_once '../Controller/ingredientC.php';
    require_once '../Model/ingredient.php';
      $platC = new platC();
      $listeplat =$platC->afficherplat();
      
	  $ingredientC = new ingredientC() ;
      $listeingredient =$ingredientC->afficherIgd();
     

?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PointBIO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="../assets/img/favicon.png">
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../assets//css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="../assets//css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="../assets//css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../assets//css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../assets//css/bootstrap.css">
	<link rel="stylesheet" href="../assets//css/style.css">
	<!-- Modernizr JS -->
	<script src="../assets/js/modernizr-2.6.2.min.js"></script>
	
	</head>
	<body>
	<script src="../assets/js/dark.js"></script>
      <script>
      new Darkmode({
        bottom: '32px',
        right: '32px',
        time: '0.5s',
        label: '🌓'
      }).showWidget();
    </script>
	<div id="fh5co-container">

		
	

		<div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Notre Menu</h2>
						<p class="sub-heading to-animate"></p>
					</div>
				</div>
				<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
					
							<h2 class="fh5co-drinks">plats</h2>
							<ul>
				<?PHP
				foreach($listeplat as $plat)
        {
			?>
				
							
							
							<li>
							
									<div class="fh5co-food-desc">
									<figure>
											<img src="../assets/img/<?PHP echo $plat['imageP'];?>" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
										
											<h3><?PHP echo $plat['Nom_Plat']; ?></h3>
											<p>le type de plat <?PHP echo $plat['Nom_Plat']; ?> est <?PHP echo $plat['Type_plat']; ?> a comme nombre de calorie <?PHP echo $plat['Nbr_Clri_plat']; ?> pour une portion de poids <?PHP echo $plat['Pds_Portion_plat']; ?> </p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
									<form method="POST" action="">
            <input class="left"  type="image" src="../assets/img/detail.jpg"  type="submit" width="30" heigth="10" />
            </form>
									<?PHP echo $plat['Prix_plat']; ?> 
									</div>
								</li>
							<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">ingredient</h2>
							<ul>
							<?PHP
				foreach($listeingredient as $ingredient)
        {
			?>
				
							<ul>
								
							<li>
									<div class="fh5co-food-desc">
										
										<div>
											<h3><?PHP echo $ingredient['Nom_Igd']; ?></h3>
											<p>le type de plat <?PHP echo $ingredient['Nom_Igd']; ?> est <?PHP echo $ingredient['Type_Igd']; ?>  </p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
									<?PHP echo $ingredient['Prix_Igd']; ?>
									</div>
								</li>
							<?php } ?>
								
							</ul>
						</div>
					</div>
					
					
				</div>
				
			</div>
		</div>
	
	
		
	</div>
	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">PointBIO <br> Conçu par <a href="" target="_blank">L'équipe Innovation</a> 
					</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Retour au début</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
						<li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<!-- jQuery -->
	<script src="../assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="../assets/js/moment.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="../assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../assets/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="../assets/js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="../assets/js/main.js"></script>
	</body>
</html>