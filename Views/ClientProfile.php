


<?PHP

include "../Controller/Client.php";
session_start();
$numero = $_SESSION['numero'];

if($numero=="")
header('Location:../Views/Login.php');


if(isset($_GET['p']))
$p="Email déja existe";
else $p="";


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
	<script src="../assets/js/profile.js"></script>



  
	<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1' type='text/css' media='all' />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">

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
  
	<script src="../assets/js/profile.js"></script>


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
	
				</div>
				
			</div>
		</div>
		


	</div>

	<div id="fh5co-events" data-section="reclamation" style="background-image: url(../assets/img/pancakes.jpg);" data-stellar-background-ratio="0.5">

	<div class="container">
	<h2 class="heading to-animate"></h2>
	<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">

		</div>
		</div>
		</div>

		<div class="container">
		<h2 class="heading to-animate"></h2>
		<h4 class="heading to-animate"></h4>
       </div>
	   
<div class="container">
<h2 class="heading to-animate"></h2>
<h4 class="heading to-animate"></h4>

</div>






			
	<div class="main-panel1" id="main-panel">
      
	
      <div class="panel-header1 panel-header-sm">
      </div>




	  




      <div class="content">
	  <div class="card-body">
	  
        	<div class="row">
          		<div class="col-md-8">
            		<div class="card">
             			 <div class="card-header">
                			<h5 class="title">Profil</h5>
							<br>
							<br>
              			  </div>
       
              

			  <form action="../Controller/Client.php" 
			  onsubmit = " return VerifClientProfile();"
			  method="POST">

			   <?PHP
				foreach($listeClient as $Vals)
        {
			?> 
                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom"  
                        placeholder="Nom" value=<?PHP echo $Vals['nom']; ?> >
						<label id="labelnom" name="labelnom" style="color:#eb1212">  </label>

                      </div>
                    </div>

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom" 
                        value=<?PHP echo $Vals['prenom']; ?>>
						<label id="labelprenom" name="labelprenom" style="color:#eb1212">  </label>

                      </div>
                    </div>

                  </div>

				  <input type="hidden" name="email" class="form-control" placeholder="Email" id="email" 
                         value=<?PHP echo $Vals['email']; ?> >
						 
                  <!-- <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        

                      </div>
                    </div> -->

                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input type="number" class="form-control"  
                        id="numero" name="numero"   
                        value=<?PHP echo $Vals['numero']; ?>
						>	
						<label id="labelnumero" name="labelnumero" style="color:#eb1212">  </label>

                      </div>
                    </div>
					<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" class="form-control" placeholder="Adresse" name="adresse"
                        id="adresse" on
						value=<?PHP echo $Vals['adresse']; ?>>
						<label id="labeladresse" name="labeladresse" style="color:#eb1212">   </label>

                      </div>
                    </div>
                  
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

				<div class="button-container">
                	<button type="submit" name="logout" href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
					<i class="fas fa-sign-out-alt"></i>                
                	</button>
    			</div>	

			

				
				  
				
				
			

                  

				  
            </form>
              
			 <?PHP
				}
			?> 
			
			<div class="row">
<div class="point">  

<label for="main"></label>
<a  href="./Main.php" >Page principale</a>

</div>

</div>
	


<div class="row">

<div class="reclamation">  

<label for="reclamation"></label>
<a  href="./ReclamationClient.php" >Mes réclamations</a>



</div>

</div>




			  
			  </div>
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
	<script src="../assets/js/profile.js"></script>



	</body>
</html>





		
		





	
	
	
	
