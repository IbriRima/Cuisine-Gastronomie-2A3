

<?PHP

	include "../Controller/CategoriesTableC.php";
$id="123";

	$CategoriesTableC=new CategoriesTableC();
	//$listeCategoriesTable =$CategoriesTableC->getCategoriesTableCByID($ID) 
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
						<a href="#">Vos réclamations</a>
					
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
      if (document.formulaire.ID.value == "") {
        alert("Veuillez saisir votre Numéro de télèphone SVP !");
      }
      if (document.formulaire.NB_Places.value == "") {
        alert("Veuillez saisir le nombre de places SVP !");
      }
       if (document.formulaire.Forme.value == "") {
        alert("Veuillez saisir la forme de table SVP !");
      }
      
      if (document.formulaire.Espace.value == "") {
        alert("Veuillez saisir l'espace de réservation !");
      }
     
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
		
					<div class="col-md-6 to-animate-2" OnSubmit="return controleSaisie()">
						<h3>Catégories table</h3>

				         <div class="form-group ">
							<label for="name" class="sr-only">ID</label>
							<input  name="ID" id="name" class="form-control" placeholder="ID :" type="tel">
						</div>

						<div class="form-group ">
							<label for="name" class="sr-only">NB_Places</label>
							<input  name="NB_Places" id="name" class="form-control" placeholder="NB_Places :" type="number">
						</div>

			
						<div class="form-group ">
							<label for="name" class="sr-only">Forme</label>
							<select  name="Forme" id="name"  class="form-control" >
							<option>Choisissez la forme de table</option>
							  <option>Ronde</option>
							  <option>Carré</option>
							  <option>Rectangulaire</option>
                              </select>
						</div>
				
						<div class="form-group ">
							<label for="name" class="sr-only">Espace</label>
							<select  name="Espace" id="name"  class="form-control" >
							<option>Choisissez l'espace de réservation</option>
							  <option>Espace fumeur</option>
							  <option>Espace non fumeur</option>
                              </select>
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
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">Vos Réclamations</h2>
				
			
	

				<table class="table">
                    <thead class=" text-primary">
                    <tr>
                    <th class="text-center">ID</th>
				<th class="text-center">NB_places</th>
				<th class="text-center">Forme</th>
				<th class="text-center">Espace</th>
				<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>
			
	
			</tr>
          
                    </thead>
     
                    <tbody>
                    <?PHP
				foreach($listeCategoriesTable  as $CategoriesTable)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $CategoriesTable['ID']; ?></td>
					<td class="text-center"><?PHP echo $CategoriesTable['NB_places']; ?></td>
					<td class="text-center"><?PHP echo $CategoriesTable['Forme']; ?></td>
                    <td class="text-center"><?PHP echo $CategoriesTable["Espace"] ?></td>
					
   
					<!--<td class="text-center"><?PHP echo $Reclamation['Etat_traitement']; ?></td> -->

					<td>
					<form method="POST" action="SupprimerCategoriesTable.php">
                    <input  type="image" src="../assets/img/delete1.png"  type="submit" width="25" heigth="8"/>
                    <input   type="hidden" value=<?PHP echo $Reclamation['ID']; ?> name="ID" id="ID">
                    </form>
					</td>

					<td>
                    <form method="POST" action="ModifierReclamation.php">
					<input  type="image" src="../assets/img/update1.png"  type="submit" width="25" heigth="8"/>
                 
                    </form>
					</td>

				</tr>
			<?PHP
				}
			?>

                    <tbody>              
                  </table>
				  </div>
		</div>

		<div id="fh5co-contact" data-section="reservation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						
					</div>
				</div>
				</div>
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





		
		





	
	
	
	
