

<?PHP

include "../Controller/Admin.php";
session_start();
$numero = $_SESSION['numero'];

if($numero=="")
header('Location:../Views/index.php');

$admin=new Admin();
$listeAdmin=$admin->getAdmin($numero); 

?>





<!DOCTYPE html>
 <html class="no-js"> 
 <head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    PointBIO
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
 
</head>


	<body>

	

  <div class="wrapper ">
    <div class="sidebar" data-color="yellow">

      <div class="logo">
        
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        
      <ul class="nav">
        
        <li>
          <a href="./AjouterTypeReclamation.php">
            <i class="now-ui-icons files_single-copy-04"></i>
            <p>Type de Reclamation</p>
          </a>
        </li>
        <li>
        <a href="./AfficherReclamation.php">
            <i class="now-ui-icons ui-1_email-85"></i>
            <p>réclamation</p>
          </a>
        </li>

        <li class="active ">
          <a href="./AdminProfile.php">
            <i class="now-ui-icons users_single-02"></i>
            <p>Profil</p>
          </a>
        </li>

        <li >
          <a href="./AfficherAdmins.php">
            <i class="now-ui-icons users_single-02"></i>
            <p>Admins</p>
          </a>
        </li>

        <li >
          <a href="./AfficherClients.php">
            <i class="now-ui-icons users_single-02"></i>
            <p>Clients</p>
          </a>
        </li>

        <li >
        <a href="./AfficherCartes.php?keyword=''">
        <i class="now-ui-icons business_money-coins"></i>
            <p>Cartes Fidelités</p>
          </a>
        </li>
        <li>
        <a href="./Rechercher_Table.php">
            <i class="now-ui-icons ui-1_calendar-60"></i>
            <p>Réservation de table</p>
          </a>
        </li>

        <li>
          <a href="./AfficherCategoriesTable.php">
            <i class="now-ui-icons design_app"></i>
            <p>Type de table</p>
          </a>
        </li>

        <li>
          <a href="./Ajouterproduit.php">
            <i class="now-ui-icons shopping_box"></i>
            <p>Produits</p>
          </a>
        </li>

        <li>
          <a href="./AjouterOffres.php">
            <i class="now-ui-icons business_money-coins"></i>
            <p>offres</p>
          </a>
        </li>
        <li>
          <a href="./AjouterIngredient.php">
            <i class="now-ui-icons files_paper"></i>
            <p>Ingrédients</p>
          </a>
        </li>

        <li>
          <a href="./AjouterPlat.php">
            <i class="now-ui-icons emoticons_satisfied"></i>
            <p>Plats</p>
          </a>
        </li>

        <li >
          <a href="./tables.php">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Liste des tables</p>
          </a>
        </li>
       

        <li >
          <a href="./Main.php">
            <i class="now-ui-icons gestures_tap-01"></i>
            <p>www.PointBio.com</p>
          </a>
        </li>

        <li >
          <a href="./index.php">
          <i class="now-ui-icons ui-1_settings-gear-63"></i>            
          <p> Se déconnecter </p>
          </a>
        </li>
      
      
      </ul>

        
      </div>
    </div>

    <div class="main-panel" id="main-panel">

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Profil</h5>
              </div>
              <div class="card-body">
                
      <form action="../Controller/Admin.php" 
      onsubmit = "return VerifClientProfile();"
			method="POST">

                  <?PHP
                  foreach($listeAdmin as $Vals)
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
                        <label>Email</label>
                        <label id="labelemail" name="labelemail" style="color:#eb1212">  </label>

                      </div>
                    </div> -->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input type="number" class="form-control"  
                        id="numero" name="numero"  
						value=<?PHP echo $Vals['numero']; ?>	>	
            <label id="labelnumero" name="labelnumero" style="color:#eb1212">  </label>
				
						<!-- </label> -->
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" class="form-control" placeholder="Adresse" name="adresse"
                        id="adresse"  
						value=<?PHP echo $Vals['adresse']; ?>>
            <label id="labeladresse" name="labeladresse" style="color:#eb1212">  </label>

                      </div>
                    </div>
              

                <button type="submit" name="submit1" href="#"  width="30" heigth="10">
                <img src="../assets/img/delete.png"  width="30" heigth="10">
                </button>

                <button type="submit" name="submit2" href="#"  width="30" heigth="10">
                <img src="../assets/img/update.png"  width="30" heigth="10">
                </button>
                  	  
      </form>
              
			<?PHP
				}
			?>

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


     <!--   Core JS Files   -->
        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
        <script src="../assets/demo/demo.js"></script>
        <script src="../assets/js/profile.js"></script>




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





		
		





	
	
	
	
