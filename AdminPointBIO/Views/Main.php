<?php

require_once '../Controller/platC.php';
    require_once '../Model/plat.php';
	require_once '../Controller/ingredientC.php';
    require_once '../Model/ingredient.php';
	
     require_once '../Controller/ProduitC.php';
	 require_once '../Model/Produit.php';
	 require_once '../Controller/OffresC.php';
	 require_once '../Model/offres.php';

	require_once '../Controller/Client.php';

    $error = "";


//$Global['id'];



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




		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				
				<div class="fh5co-text">

				<?php if(isset($_COOKIE["id"])) {  ?>
				
				<input class="right" type="image" src="../assets/img/profile.png" type="button"  
				width="70" heigth="70" onclick="location.href='ClientProfile.php'" >

				<?php } else { ?>
					
					<input class="right" type="image" src="../assets/img/login.png" type="button"  
					width="70" heigth="70" onclick="location.href='Login.php'" 
				 >

				<?php } ?>

					<div class="container">
						<div class="row">
					
							<h1 class="to-animate">PointBIO</h1>
							<h2 class="to-animate" id="slogan">On ne change RIEN <span>et</span> ça change TOUT</a></h2>
						
						</div>
					
					</div>
				</div>
				
			  	<ul class="slides">
				  <li style="background-image: url(../assets/img/slide_3.jpg);" data-stellar-background-ratio="0.5"></li> 
			   	<li style="background-image: url(../assets/img/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
			   	<li style="background-image: url(../assets/img/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
				 <li style="background-image: url(../assets/img/food7.jpg);" data-stellar-background-ratio="0.5"></li>
			   
			  	</ul>

			</div>
			
		</div>
	
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
					
 
						<a href="#" data-nav-section="about">Nos Valeurs</a>
						<a href="#" data-nav-section="Produits">Nos Produits frais</a>
					
					
					</div>
					<div class="fh5co-logo">
						<a href="Main.php">Point BIO</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="menu">Menu</a>
					
						<a href="#" data-nav-section="reservation">Réserver une table</a>
						



					</div>
				</div>
				
			</div>
		</div>

			
	
		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(../assets/img/about2.jpg)"></div>
			
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate" style="font-size: 40px">Nos Valeurs</h2>
			<p class="to-animate"><span class="firstcharacter">D</span>eux mots resument ce que nous sommes, ce que nous faisons chaque jour et ce en quoi nous croyons:</p>
			
		
		 	<p class="to-animate" style="display: block;" ><span class="firstcharacter" style="font-size: 20px">Nourrire</span><br>des ingrédients sélectionnés pour leurs qualités nutritionnelles, des recettes complètes et équilibrées élaborées dans nos cuisines.</p>
		
			<p class="to-animate" style="display: block;" ><span class="firstcharacter" style="font-size: 20px">Aimer   </span><br>des équipes autonomes et polyvalentes qui aiment ce qu’elles font, du respect et de l’écoute .</p>
			

		
		
				<!--<p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Get in touch</a></p>-->
			</div>
		</div>

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">
						<li>
								<blockquote>
									<p>&ldquo;La vraie cuisine est une forme d'art. Un cadeau à partager.&rdquo;</p>
									<p class="quote-author">&mdash; Oprah Winfrey</p>
								</blockquote>
							</li>
							
						
						
							<li>
								<blockquote>
									<p>&ldquo;La bonne cuisine est honnête, sincère et simple.&rdquo;</p>
									<p class="quote-author">&mdash; Elisabeth David</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;La cuisine est l'art de comprendre le subtil mariage des aliments afin d'engendrer une odeur inoubliable.&rdquo;</p>
									<p class="quote-author">&mdash; Gilbert Choulet</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;La gastronomie est l'art d'utiliser la nourriture pour créer le bonheur &rdquo;</p>
									<p class="quote-author">&mdash;Théodore Zeldin</p>
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
						<p class="sub-heading to-animate"></p>
					</div>
				</div>
				<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
						<h2 class="fh5co-drinks">plats</h2>
							<ul>
				<?PHP
				$i=0;
				foreach($listeplat as $plat)
        { $i++;
			if($i<4)
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
									<?PHP echo $plat['Prix_plat']; ?> 
									</div>
								</li>
							<?php } 
							}?>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-dishes">Ingrédients</h2>
							<ul>
							<?PHP
							$j=0;
				foreach($listeingredient as $ingredient)
        { $j++;
			if($j<4)
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
							<?php }} ?>
								
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


		<div id="fh5co-events" data-section="events" style="background-image: url(../assets/img/food12.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
		


				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h1>Sans Lactose</h1>
					
						</div>
					</div>

					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h1>Sans Gluten</h1>
						
						</div>
					</div>

					<div class="col-md-4">
						<div class="fh5co-event to-animate-2">
							<h1> Biologique</h1>
							
						</div>
					</div>
	         	</div>





			</div>
		</div>
		

		<script type="text/javascript">
			
			function controleSaisie() {
				var error=true;
			  if (document.formulaire.ID.value == "") {
				document.getElementById('labelID').innerHTML="Veuillez saisir votre Numéro de télèphone!";
				 error=false ;
			  }
			  if (document.formulaire.Nom.value == "") {
			   document.getElementById('labelNom').innerHTML="Veuillez saisir votre Nom SVP!";
				 error=false ;
			  }
			   if (document.formulaire.Prénom.value == "") {
				 document.getElementById('labelPrénom').innerHTML="Veuillez saisir votre Prénom SVP!";
				 error=false ;
			  }
			  if (document.formulaire.email.value.indexOf('@') == -1) {
				 document.getElementById('labelemail').innerHTML="Tapez votre email SVP! (votre email doit contenir '@')";
				 error=false ;
			  }
			  if (document.formulaire.message.value == "") {
				document.getElementById('labelMessage').innerHTML="Veuillez saisir votre message!"; 
				error=false ;
			  }
			  if (document.formulaire.datetemps.value == "") {
				document.getElementById('labeldatetemps').innerHTML="Veuillez saisir la date et le temps de réservation!";
				 error=false ;   
			  }
			  return error;
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
								Mourouj 2 hay lakrad kabaria <br>
							</li>
							<li><i class="icon-phone"></i> (123) 465-6789</li>
							<li><i class="icon-envelope"></i>PointBioEsprit@gmail.com</li>
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

