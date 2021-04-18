

<?PHP

	include "../Controller/ReclamationC.php";
$id="123";

	$ReclamationC=new ReclamationC();
	$listeReclamationClient =$ReclamationC->getReclamationById_Client($id) 
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
						<a href="#" data-nav-section="reclamation">Vos réclamations</a>
					
					</div>
					<div class="fh5co-logo">
						<a href="Main.php">Point BIO</a>
					</div>
					<div class="fh5co-menu-2">
						
					
						<a href="#" data-nav-section="reservation">Réserver une table</a>
					
				
					</div>
				</div>
				
			</div>
		</div>



	</div>
		
	<form action="AjouterReclamation.php" method="POST">
		<div id="fh5co-contact" data-section="reclamation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Réclamation</h2>
						<p class="sub-heading to-animate">Si vous avez eu n'importe quel problème vous pouvez nous informer si dessous</p>
					</div>
				</div>
		
					<div class="col-md-6 to-animate-2">
						<h3>Réclamation</h3>
				
						<div class="form-group ">
							<label for="Id_client" class="sr-only">Votre identifiant</label>
							<input  name="Id_client" id="Id_client" class="form-control" placeholder="Identifiant" type="text">
						</div>

			
						<div class="form-group ">
							<label for="Type" class="sr-only">Type</label>
							<select  name="Type" id="Type"  class="form-control" >
							<option>Choisissez un type de réclamation</option>
							  <option>T1</option>
							  <option>T2</option>
							  <option>T3</option>
                              </select>
						</div>
				
						<div class="form-group ">
							<label for="Note" class="sr-only">Note</label>
							<input name="Note" id="Note"  class="form-control" placeholder="Note" type="number" min=0 max=10>
						</div>
							
						<div class="form-group ">
							<label for="Description" class="sr-only">Description du problème</label>
							<textarea name="Description" id="Description" cols="30" rows="5" class="form-control" placeholder="Description du problème"></textarea>
						</div>

						

						<div class="form-group ">
							<label for="Proposition" class="sr-only">Votre proposition</label>
							<textarea name="Proposition" id="Proposition" cols="30" rows="5" class="form-control" placeholder="Votre proposition"></textarea>
						</div>

						<div class="form-group ">
						
						
							<input class="btn btn-primary" type="submit" value="Ajouter" name = "submit">
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
                    <th class="text-center">Identifiant</th>
				<th class="text-center">Description</th>
				<th class="text-center">Proposition</th>
				<th class="text-center">Note</th>
				<th class="text-center">Type</th>
        <th class="text-center">Etat de traitement</th>
				<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>
			
	
			</tr>
          
                    </thead>
     
                    <tbody>
                    <?PHP
				foreach($listeReclamationClient  as $Reclamation)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $Reclamation['Id_Recl']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Description']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Proposition']; ?></td>
                    <td class="text-center"><?PHP echo $Reclamation["Note"] ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Type']; ?></td>
   
					<td class="text-center"><?PHP echo $Reclamation['Etat_traitement']; ?></td>

					<td>
					<form method="POST" action="SupprimerReclClient.php">
                    <input  type="image" src="../assets/img/delete1.png"  type="submit" width="25" heigth="8"/>
                    <input   type="hidden" value=<?PHP echo $Reclamation['Id_Recl']; ?> name="Id_Recl" id="Id_Recl">
                    </form>
					</td>

					<td>
                    <form method="POST" action="ModifierReclamation.php">
					<input  type="image" src="../assets/img/update1.png"  type="submit" width="25" heigth="8"/>
					<input   type="hidden" value=<?PHP echo $Reclamation['Id_Recl']; ?> name="Id_Recl" id="Id_Recl">
					<input   type="hidden" value=<?PHP echo $Reclamation['Description']; ?> name="Description" id="Description">
					<input   type="hidden" value=<?PHP echo $Reclamation['Proposition']; ?> name="Proposition" id="Proposition">
					<input   type="hidden" value=<?PHP echo $Reclamation['Note']; ?> name="Note" id="Note">
					<input   type="hidden" value=<?PHP echo $Reclamation['Type']; ?> name="Type" id="Type">
			
                 
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

		<div id="fh5co-contact" data-section="reclamation">
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





		
		





	
	
	
	
