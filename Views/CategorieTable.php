<?PHP
require_once '../config.php';
	include "../Controller/CategoriesTableC.php";
$id="123";

	$CategoriesTableC=new CategoriesTableC();
	
?>

<!DOCTYPE html>
 <html class="no-js"> 
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
	<link rel="shortcut icon" href="favicon.ico">

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
		
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
					<a href="#" data-nav-section="about"></a>
						<a href="#" data-nav-section="Produits"></a>
					</div>
					<div class="fh5co-logo">
						<a href="index.html">Point BIO</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="menu">Menu</a>
					
						<a href="#" data-nav-section="reservation">Réserver une table</a>
					<!--	<a href="#">Se connecter</a> -->
				
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
 <script type="text/javascript">

    function controleSaisie() {
    	var error=true;
      if (document.formulaire.ID.value == "") {
         document.getElementById('labelID').innerHTML="Veuillez saisir votre numéro de télèphone!";
        error=false ;
      }
      if (document.formulaire.NB_Places.value == "") {
        document.getElementById('labelNB_Places').innerHTML="Veuillez saisir le nombre de places!";
        error=false ;
      }
       if (document.formulaire.Forme.value == "") {
        document.getElementById('labelForme').innerHTML="Veuillez choisir la forme de table";
        error=false ;
      }
      
      if (document.formulaire.Espace.value == "") {
        document.getElementById('labelEspace').innerHTML="Veuillez choisir l'espace de réservation";
        error=false ;
      }
     return error;
    } 
  </script> 



	<form action="AjouterCategoriesTable.php" name="formulaire" method="POST" OnSubmit="return controleSaisie()">
		<div id="fh5co-contact" data-section="reservation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Catégories Table</h2>
						<p class="sub-heading to-animate">Vous Pouvez choisir la catégorie de table de réservation</p>
					</div>
				</div>
		
					<div class="col-md-6 to-animate-2" >
						<h3>Catégories table</h3>

				         <div class="form-group ">
							<label for="name" class="sr-only">ID</label>
							<input  name="ID" id="ID" class="form-control" placeholder="ID :" type="tel">
							<label id="labelID" name="labelID" style="color:#eb1212">  </label>
						</div>
							<!--<label id="labelnumero" name="labelnumero" style="color:#eb1212">  </label> -->
						<div class="form-group ">
							<label for="name" class="sr-only">NB_Places</label>
							<input  name="NB_Places" id="NB_Places" class="form-control" placeholder="NB_Places :" type="number">
							<label id="labelNB_Places" name="labelNB_places" style="color:#eb1212">  </label>
						</div>

							
						<div class="form-group ">
							<label for="name" class="sr-only">Forme</label>
							<input type="text" name="Forme" id="Forme" class="form-control" list="Flist" placeholder="Choisissez la forme de table">
							<datalist id="Flist">
							  <option>Ronde</option>
							  <option>Carré</option>
							  <option>Rectangulaire</option>
                           	</datalist>
                              <label id="labelForme" name="labelFrome" style="color:#eb1212">  </label>
						</div>
				
						<div class="form-group ">
							<label for="name" class="sr-only">Espace</label>
							<input type="text" name="Espace" class="form-control" id="Espace" list="ESlist" placeholder="Choisissez l'espace de réservation">
							<datalist id="ESlist">
							  <option>Espace fumeur</option>
							  <option>Espace non fumeur</option> 
							</datalist>
                              <label id="labelEspace" name="labelEspace" style="color:#eb1212">  </label>
						</div>
							
					

						<div class="form-group ">
						
							<input class="btn btn-primary" type="submit" name="Ajouter" value="Ajouter" >
							<input class="btn btn-primary" type="reset" value="Annuler" name = "annuler">
						
						</div>
						</div>
				</div>
			</div>
		</div>


	</form>


	<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(../assets/img/u.jpg)"></div>
			<!--<div class="fh5co-2col fh5co-text"> -->
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
	<script type = "text/javascript"  src="../assets/js/reservation.js"></script>

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





		
		





	
	
	
	
