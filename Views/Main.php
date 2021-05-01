<?php

require_once '../Controller/platC.php';
    require_once '../Model/plat.php';
	require_once '../Controller/ingredientC.php';
    require_once '../Model/ingredient.php';
	
     require_once '../Controller/ProduitC.php';
	 require_once '../Model/Produit.php';
	 require_once '../Controller/OffresC.php';
	 require_once '../Model/offres.php';


    $error = "";




        $ProduitC = new ProduitC();
      $listeProduit =$ProduitC->afficherProduit();
	  $OffresC = new OffresC();
      $listeOffres =$OffresC->afficherOffres();

      
    

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

	<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1' type='text/css' media='all' />

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




		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				
				<div class="fh5co-text">
				<input class="right" type="image" src="../assets/img/login.png" type="button"  width="70" heigth="70" onclick="location.href='Login.php'" >
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

			
	<!--Produit-->
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



	
	
	
	
	<?PHP
				foreach($listeOffres as $Offres)
        {
			
			?> 


<?PHP 
if($Offres['id_produit']===$Produit['Id_produit'])
{
	?> 
	<strong class="item-price"><del>	<?PHP echo $Produit['Prix_de_vente']; echo "$" ?>  </del> 

	<?PHP
	echo $Offres['Valeur']; echo "$" ;
}
else echo"";
 ?>



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


				






	

							
			
						</div>
				</div>
			</div>
		</div>
	</form>



		
		
	</div>

	<!--Produi-->
<!--Menu-->
	

<div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Notre Menu</h2>
						<p class="sub-heading to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-drinks">plats</h2>
				<?PHP
				foreach($listeplat as $plat)
        {
			?>
				
							<ul>
								
							<li>
									<div class="fh5co-food-desc">
										
										<div>
											<h3><?PHP echo $plat['Nom_Plat']; ?></h3>
											<p>le type de plat <?PHP echo $plat['Nom_Plat']; ?> est <?PHP echo $plat['Type_plat']; ?> a comme nombre de calorie <?PHP echo $plat['Nbr_Clri_plat']; ?> pour une portion de poids <?PHP echo $plat['Pds_Portion_plat']; ?> </p>
										</div>
									</div>
									<div class="fh5co-food-pricing">
									<?PHP echo $plat['Prix_plat']; ?> 
									</div>
								</li>
							<?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Food</h2>
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
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
						<p><a href="./afficherPlatFront.php" class="btn btn-primary btn-outline" >voir tous le menu</a></p>
					</div>
				</div>
			</div>
		</div>






<!--Menu-->


		<div id="fh5co-events" data-section="events" style="background-image: url(../assets/img/slide_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2 to-animate">
						<h2 class="heading"> </h2>
						<p class="sub-heading">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Kitchen Workshops</h3>
							<span class="fh5co-event-meta">March 19th, 2016</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="btn btn-primary btn-outline">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Music Concerts</h3>
							<span class="fh5co-event-meta">March 19th, 2016</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="btn btn-primary btn-outline">Read More</a></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h3>Free to Eat Party</h3>
							<span class="fh5co-event-meta">March 19th, 2016</span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p><a href="#" class="btn btn-primary btn-outline">Read More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<script type="text/javascript">
    function controleSaisie() {
      if (document.formulaire.ID.value == "") {
        document.getElementById('labelID').innerHTML="Veuillez saisir votre Numéro de télèphone!";
        return false;
      }
      if (document.formulaire.Nom.value == "") {
       document.getElementById('labelNom').innerHTML="Veuillez saisir votre Nom SVP!";
        return false;
      }
       if (document.formulaire.Prénom.value == "") {
         document.getElementById('labelPrénom').innerHTML="Veuillez saisir votre Prénom SVP!";
        return false;
      }
      if (document.formulaire.email.value.indexOf('@') == -1) {
         document.getElementById('labelemail').innerHTML="Tapez votre email SVP! (votre email doit contenir '@')";
        return false;
      }
      if (document.formulaire.message.value == "") {
        document.getElementById('labelMessage').innerHTML="Veuillez saisir votre message!"; 
        return false;
      }
      if (document.formulaire.datetemps.value == "") {
        document.getElementById('labeldatetemps').innerHTML="Veuillez saisir la date et le temps de réservation!";
        return false;
      }
      return true;
    } 
  </script>



		<form action="AjouterReservation.php" name="formulaire" method="POST"  OnSubmit="return controleSaisie()">
	
		<div id="fh5co-contact" data-section="reservation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Réservation</h2>
						<p class="sub-heading to-animate"></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 to-animate-2">
						<h3>Contact Info</h3>
						<ul class="fh5co-contact-info">
							<li class="fh5co-contact-address ">
								<i class="icon-home"></i>
								5555 Love Paradise 56 New Clity 5655, <br>Excel Tower United Kingdom
							</li>
							<li><i class="icon-phone"></i> (123) 465-6789</li>
							<li><i class="icon-envelope"></i>info@freehtml5.co</li>
							<li><i class="icon-globe"></i> <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></li>
						</ul>
					</div>
					<div class="col-md-6 to-animate-2" OnSubmit="return controleSaisie()">
						<h3>Reservation Form</h3>
						<div class="form-group ">
							<label for="name" class="sr-only">ID(télèphone)</label>
							<input id="name" name="ID" class="form-control" placeholder="ID(télèphone) :" type="tel">
							<label id="labelID" name="labelID" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
							<label for="name" class="sr-only">Nom</label>
							<input id="name" name="Nom" class="form-control" placeholder="Nom :" type="text">
							<label id="labelNom" name="labelNom" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
							<label for="name" class="sr-only">Prénom</label>
							<input id="name" name="Prénom" class="form-control" placeholder="Prénom :" type="text">
							<label id="labelPrénom" name="labelPrénom" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
							<label for="email" class="sr-only">email</label>
							<input id="email" name="email" class="form-control" placeholder="E-mail :" type="email">
							<label id="labelemail" name="labelemail" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
							<label for="name" class="sr-only">Message</label>
							<textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message :"></textarea>
							<label id="labelMessage" name="labelMessage" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
							<label for="name" class="sr-only">Date</label>
							<input id="date" name="datetemps" class="form-control" placeholder="Date &amp; Time" type="text">
							<label id="labeldatetemps" name="labeldatetemps" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
							<input class="btn btn-primary" name="Réserver" value="Réserver" type="submit">
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

