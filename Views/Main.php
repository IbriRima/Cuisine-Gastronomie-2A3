<?php
     require_once '../Controller/ProduitC.php';
	 require_once '../Model/Produit.php';
	 require_once '../Controller/OffresC.php';
	 require_once '../Model/offres.php';


    $error = "";




        $ProduitC = new ProduitC();
      $listeProduit =$ProduitC->afficherProduit();
	  $OffresC = new OffresC();
      $listeOffres =$OffresC->afficherOffres();

      
    

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


	
	<div id="fh5co-container">
	<div >
			<a  href="ReclamationClient.php" >Se connecter</a>
	</div >

		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				
				<div class="fh5co-text">
		
					<div class="container">
						<div class="row">
							<h1 class="to-animate">PointBIO</h1>
							<h2 class="to-animate" id="slogan">On ne change RIEN <span>et</span> ça change TOUT</a></h2>
						</div>
					
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url(../assets/img/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(../assets/img/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(../assets/img/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
			
		</div>
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
					
						<a href="#" data-nav-section="about">A propos de nous</a>
						<a href="#" data-nav-section="Produits">Nos Produits frais</a>
						<a href="#" data-nav-section="Produits">Nos Promotions</a>
					
					</div>
					<div class="fh5co-logo">
						<a href="index.html">Point BIO</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="menu">Menu</a>
					
						<a href="#" data-nav-section="reservation">Réserver une table</a>
						
					</div>
				</div>
				
			</div>
		</div>
	<a href="AjouterTypeReclamation.php">Administrateur</a>
		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(../assets/img/res_img_1.jpg)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">About Us</h2>
				<p class="to-animate"><span class="firstcharacter">F</span>ar far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
				<p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Get in touch</a></p>
			</div>
		</div>

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">
							
							<li>
								<blockquote>
									<p>&ldquo;Cooking is an art, but all art requires knowing something about the techniques and materials&rdquo;</p>
									<p class="quote-author">&mdash; Nathan Myhrvold</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Give a man food, and he can eat for a day. Give a man a job, and he can only eat for 30 minutes on break.&rdquo;</p>
									<p class="quote-author">&mdash; Lev L. Spiro</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Find something you’re passionate about and keep tremendously interested in it.&rdquo;</p>
									<p class="quote-author">&mdash; Julia Child</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Never work before breakfast; if you have to work before breakfast, eat your breakfast first.&rdquo;</p>
									<p class="quote-author">&mdash; Josh Billings</p>
								</blockquote>
							</li>
							
							
						</ul>
					</div>

				</div>
			</div>









			



	

				<div id="fh5co-featured"  data-section="Produits">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Nos Produits frais</h2>
						<p class="sub-heading to-animate">Découvrez notre large gamme de produits frais de qualité livrés directement chez vous. Pour vos courses du quotidien, partez à la découverte de notre assortiment de fruits et légumes frais de saison. Vous trouverez aussi une sélection de viandes, fromages et produits laitiers, sans oublier le pain, des oeufs et tout ce qu'il faut pour cuisiner des produits frais.

</p>

<iframe width="750" height="450" src="https://www.youtube.com/embed/56dGtmLs8Q8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


					</div>
				</div>
				
	

						<?PHP
				foreach($listeProduit as $Produit)
        {
			
			?> 


					<div class="fh5co-grid">

									<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(../assets/img/<?PHP echo $Produit['nom_image']; ?>)"></div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
							<p>nom du produit : </p>
							<h2><?PHP echo $Produit['Nom_produit']; ?></h2>

							<span class="pricing"><?PHP echo $Produit['Prix_de_vente']; echo "$"  ?></span>


							<!-- jQuery -->
	<strong class="item-price"><del><?PHP echo $Produit['Prix_de_vente']; echo "$"  ?></del> 
	
	
	
	
	<?PHP
				foreach($listeOffres as $Offres)
        {
			
			?> 


<?PHP echo $Offres['Valeur']; echo "$"  ?>


<?PHP
				}
			?>

                        </strong> 

				        	<p>Quantité restante dans le stock: </p>
		                	<p><?PHP echo $Produit['Quantité_dans_le_stock']; echo "kg" ?></p>




							</div>

							</div>


							</div>



			<?PHP
				}
			?>

			

					

					
					
					</div>
				</div>


				






	

							
			
						<div class="form-group ">
							<input class="btn btn-primary" value="Send Message" type="submit">
						</div>
						</div>
				</div>
			</div>
		</div>
	</form>



		
		
	</div>

	<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">PointBIO <br> Designed by <a href="" target="_blank">InnovationTeam</a> 
					</p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
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

