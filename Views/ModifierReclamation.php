<?php
	include "../Controller/ReclamationC.php";
	include_once '../Model/Reclamation.php';

	$ReclamationC = new ReclamationC();


            if (
              isset($_POST['Id_Recl']) && 
              isset($_POST['Description'])&& 
              isset($_POST['Proposition']) && 
              isset($_POST['Note'])&& 
              isset($_POST['Type']) 
          ){
          if (
                  
                  !empty($_POST['Id_Recl']) && 
                  !empty($_POST['Description'])&& 
                  !empty($_POST['Proposition']) && 
                  !empty($_POST['Note'])&& 
                  !empty($_POST['Type']) 
              ) {
                $Reclamation = new Reclamation
                (
                  $_POST['Proposition'],
                 $_POST['Description'],
                 $_POST['Type'],
                 "Non traitee",
                  (int)$_POST['Note'],
                "123" 
                

          );
                  
          $ReclamationC->updateReclamation($Reclamation,(int)$_POST["Id_Recl"]);
               
				 header('Location:ReclamationClient.php');

              }
              else
              $error = "Missing information";
              

        }
      
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

	
	<?php
			if (isset($_POST["Id_Recl"])){
       $Proposition= $_POST['Proposition'];
       $Description= $_POST['Description'];
       $Type= $_POST['Type'];
       $Note=  (int)$_POST['Note'];
       $id=  (int)$_POST['Id_Recl'];
     
				$Reclamation= $ReclamationC->recupererReclamation($_POST["Id_Recl"]);
    
		?>
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
		
	<form action="ModifierReclamation.php" method="POST">
		<div id="fh5co-contact" data-section="reclamation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Modifier une réclamation</h2>
						<p class="sub-heading to-animate"></p>
					</div>
				</div>
		
					<div class="col-md-6 to-animate-2">
						<h3>Réclamation</h3>
				
		
            <div class="form-group ">
							<label for="Id_Recl" class="sr-only">Type</label>
							<input name="Id_Recl" id="Id_Recl"  class="form-control" placeholder="Id_Recl" type="text"  value = "<?php echo $id; ?>">
						</div>

            <div class="form-group ">
							<label for="Type" class="sr-only">Type</label>
							<input name="Type" id="Type"  class="form-control" placeholder="Type" type="text"  value = "<?php echo $Type; ?>">
						</div>
       
						<div class="form-group ">
							<label for="Note" class="sr-only">Note</label>
							<input name="Note" id="Note"  class="form-control" placeholder="Note" type="number" min=0 max=10  value = "<?php echo $Note; ?>">
						</div>
							
		

						<div class="form-group ">
							<label for="Description" class="sr-only">Description</label>
							<input name="Description" id="Description"  class="form-control" placeholder="Description" type="text"  value = "<?php echo $Description; ?>">
						</div>
						
            <div class="form-group ">
							<label for="Proposition" class="sr-only">Proposition</label>
							<input name="Proposition" id="Proposition"  class="form-control" placeholder="Proposition" type="text"  value = "<?php echo $Proposition; ?>">
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

  </div>
        <?php
		}
		?>




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

