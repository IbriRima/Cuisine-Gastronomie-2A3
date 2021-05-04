<?PHP
	include "../controller/Admin.php";

  


  

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 2;
   
    $adminpage = new Admin();
    $listeAdminPage = $adminpage->AfficherAdminsPaginer($page, $perpage);
     $totalP = $adminpage->calcTotalRows($perpage);
 

  $keyword="";

?>


<!DOCTYPE html>
<html lang="en">

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

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow">

      <div class="logo">
        
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        
      <ul class="nav">


      
         
<li >
  <a href="./AjouterTypeReclamation.php">
    <i class="now-ui-icons files_single-copy-04"></i>
    <p>Type de Reclamation</p>
  </a>
</li>
<li >
<a href="./AfficherReclamation.php">
    <i class="now-ui-icons ui-1_email-85"></i>
    <p>réclamation</p>
  </a>
</li>

<li >
  <a href="./AdminProfile.php">
    <i class="now-ui-icons users_single-02"></i>
    <p>Profil</p>
  </a>
</li>

<li class="active">
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
        <a href="./AfficherCartes.php">
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
</ul>

        
      </div>
    </div>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>


            </div>
            <a class="navbar-brand" href="#pablo"></a>
          </div>


          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form method="POST" action="../Controller/Client.php">
              <!-- <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search..." name="search">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold" name="searchbutton" type="submit"></i>
                  </div>
                </div>
              </div> -->
            </form>

            <!-- <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul> -->

          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">


                <h4 class="card-title">Admins</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">


                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                    <th class="text-center">Numéro de téléphone </th>
                    <th class="text-center">Nom</th>
				<th class="text-center">Prénom</th>
				<th class="text-center">Email</th>
				<th class="text-center">Adresse</th>
        <th class="text-center">Mot de passe</th>

				<!-- <th class="text-center">Sexe</th> -->
			
	
			</tr>
          
                    </thead>
     
                    <tbody>
                    
                    <?PHP
				
                
                foreach($listeAdminPage as $Client)
        {
            
			?>
            

				<tr>
                <form method="POST" action="../Controller/Admin.php">

                <td class="text-center">
          <input type="text" class="form-control" name="numero" id="numero"  
						value=<?PHP echo $Client['numero']; ?>>
          </td>
					<td class="text-center">
          <input type="text" class="form-control" name="nom" id="nom"  
						value=<?PHP echo $Client['nom']; ?>>
          </td>
          <td class="text-center">
          <input type="text" class="form-control" name="prenom" id="prenom"  
						value=<?PHP echo $Client['prenom']; ?>>
          </td>
          <td class="text-center">
          <input type="text" class="form-control" name="email" id="email"  
						value=<?PHP echo $Client['email']; ?>>
          </td>
          <td class="text-center">
          <input type="text" class="form-control" name="adresse" id="adresse"  
						value=<?PHP echo $Client['adresse']; ?>>
          </td>
          <td class="text-center">
          <input type="text" class="form-control" name="mdp" id="mdp"  
						value=<?PHP echo $Client['mdp']; ?>>
          </td>
              
            
            </form>


				</tr>


			<?PHP
				}
			?>

                    <tbody>              
                  </table>
                  
                  <?php

// }
for ($x = 1; $x <= $totalP; $x++) :

?>

    <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?></a>

<?php endfor; ?>


                </div>
              </div>
            </div>
          </div>






    


    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>

</body>

<div id="google_translate_element"></div>
	<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en'},
            'google_translate_element'
        );
    }
</script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</html>