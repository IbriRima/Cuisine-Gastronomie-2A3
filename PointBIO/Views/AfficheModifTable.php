<?PHP
	//include "../controller/TypeReclamationC.php";
	//include "../controller/ReservationC.php";
	//require_once '../config.php'
	//include "../views/ModifierReservation.php";

	include "../controller/CategoriesTableC.php";


$CategoriesTableC=new CategoriesTableC();
$listeCategoriesTable =$CategoriesTableC->afficherCategoriesTable();
?>

<?php
require_once '../config.php';
if(isset($_POST['Enregistrer']))
    {
        
        $categoriesTable=new CategoriesTable();
        $categoriesTable->updateCategoriesTable();
       
    }
class CategoriesTable{ 
 function updateCategoriesTable() {
            try {
                echo ("update1");
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE categories SET ID = :ID, NB_places = :NB_places, Forme = :Forme, Espace = :Espace'   
                );
                echo ("update2");
                $query->execute([
                    'ID' => $_POST['ID'],
                    'NB_places' => $_POST['NB_Places'],
                    'Forme' => $_POST['Forme'],
                    'Espace' => $_POST['Espace'],
                    
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
                header('Location:../Views/afficherCategoriesTable.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        } 
        }
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
              <p>r??clamation</p>
            </a>
          </li>
          <li >
            <a href="./AfficherClients.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Clients</p>
            </a>
          </li>


          <li >
            <a href="./AdminProfile.php">
              <i class="now-ui-icons users_single-02"></i>
              <p>Admin</p>
            </a>
          </li>


          <li >
          <a href="./AfficherCartes.php">
          <i class="now-ui-icons business_money-coins"></i>
              <p>Cartes Fidelit??s</p>
            </a>
          </li>
          <li >
          <a href="./Rechercher_Table.php">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>R??servation de table</p>
            </a>
          </li>

          <li class="active">
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
              <p>Ingr??dients</p>
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
            <a href="./index.php">
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
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
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
            </ul>
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
                <h4 class="card-title"> Modifier la cat??gorie de table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">

 <script type="text/javascript">

    function controleSaisie() {
      var error=true;
      if (document.formulaire.ID.value == "") {
         document.getElementById('labelID').innerHTML="Veuillez saisir votre num??ro de t??l??phone!";
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
        document.getElementById('labelEspace').innerHTML="Veuillez choisir l'espace de r??servation";
        error=false ;
      }
     return error;
    } 
  </script> 
	<div class="form-group ">
		            <?PHP
				foreach($listeCategoriesTable as $CategoriesTable)
        {
			?>
							<form method="POST" name="formulaire" OnSubmit="return controleSaisie()">
							<input id="name" name="ID" class="form-control" placeholder="ID :" value="<?PHP echo $CategoriesTable["ID"] ?>"type="tel" >
              <label id="labelID" name="labelID" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
							
							<input id="name" name="NB_Places" class="form-control" value="<?PHP echo $CategoriesTable["NB_places"] ?>"placeholder="NB_Places :" type="text">
              <label id="labelNB_Places" name="labelNB_places" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
							
  
                <select  name="Forme" id="name"  class="form-control" value="<?PHP echo $CategoriesTable["Forme"] ?>">
                <option><?PHP echo $CategoriesTable["Forme"] ?></option>
                <option>Choisissez la forme de table</option>
                <option>Ronde</option>
                <option>Carr??</option>
                <option>Rectangulaire</option> 
                </select>
                <label id="labelForme" name="labelFrome" style="color:#eb1212">  </label>
            </div>

						<div class="form-group ">
							
							<input id="name" name="Espace" class="form-control" value="<?PHP echo $CategoriesTable["Espace"] ?>" placeholder="Espace :" type="text">
              <label id="labelEspace" name="labelEspace" style="color:#eb1212">  </label>
						</div>
						<div class="form-group ">
          <input class="btn btn-primary" type="submit" value="Enregistrer" name = "Enregistrer">
          <input class="btn btn-primary" type="reset" value="Annuler" >
        </div>
						
					</form>
</div>

<?PHP
        }
      ?>


 <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>

</body>

</html>






















