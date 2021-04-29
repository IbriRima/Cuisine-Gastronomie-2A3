


<?PHP

include "../Controller/Client.php";
session_start();
$numero = $_SESSION['numero'];

if($numero=="")
header('Location:../Views/Login.php');


$client=new Client();
$listeClient=$client->getClient($numero);

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

	 <!-- plugins:css -->
	 <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />


	<!-- Modernizr JS -->
	<script src="../assets/js/modernizr-2.6.2.min.js"></script>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  	<!--     Fonts and icons     -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  	<!-- CSS Files -->
  	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  	<link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  	<!-- CSS Just for demo purpose, don't include it in your project -->
  	<link href="../assets/demo/demo.css" rel="stylesheet" />


	</head>


	<body>

	

	<div id="fh5co-container">
		
		
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				
					<div class="fh5co-menu-1">
					<a href="#" data-nav-section="about"></a>
						<a href="#" data-nav-section="Produits"></a>
						
					
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
		
	
	

	<div class="main-panel1" id="main-panel">
      
	
      <div class="panel-header1 panel-header-sm">
      </div>
	  <a href="./ReclamationClient.php" >Vos réclamations</a>
      <div class="content">

	  
        	<div class="row">
          		<div class="col-md-8">
            		<div class="card">
             			 <div class="card-header">
                			<h5 class="title">Profil</h5>
              			  </div>
              <div class="card-body">
              

			  <form action="../Controller/Client.php" 
			  method="POST">

			   <?PHP
				foreach($listeClient as $Vals)
        {
			?> 
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" onchange="VerifNom();" 
                        placeholder="Nom" value=<?PHP echo $Vals['nom']; ?> >
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" 
                        onchange="VerifPrenom();" value=<?PHP echo $Vals['prenom']; ?>>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" id="email" 
                        onchange="VerifEmail();" value=<?PHP echo $Vals['email']; ?> >
                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input type="text" class="form-control"  
                        id="numero" name="numero"   value="<?php echo($numero);?>"
						>	
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" class="form-control" placeholder="Adresse" name="adresse"
                        id="adresse" onchange="VerifAdresse();" 
						value=<?PHP echo $Vals['adresse']; ?>>
                      </div>
                    </div>
                  
					<div class="button-container">
                <button type="submit" name="submit1" href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fas fa-user-lock"  ></i>                
                </button>
    	</div>
		
		<div class="button-container">
                <button type="submit" name="submit2" href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fas fa-user-edit"></i>                
                </button>
    	</div>	
				  
				  </div>

                  

				  
            </form>
              
			 <?PHP
				}
			?> 

			  
			  </div>
            </div>
       </div>
          
	  

		

		
	
	
	
	
	</div>

	
	
	
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <script src="../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <script src="../login.js"></script>






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
	<script src="../profile.js"></script>


	</body>
</html>





		
		





	
	
	
	
