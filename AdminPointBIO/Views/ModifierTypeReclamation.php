<?php
	include "../Controller/TypeReclamationC.php";
	include_once '../Model/TypeReclamation.php';

	$TypeReclamationC = new TypeReclamationC();

	$error = "";

   
            if (
             
              isset($_POST['duree']) 
          ){
          if (
               
                  !empty($_POST['duree']) 
              ) {
   
                  $Duree= (int)$_POST['duree'];
   
                  
          $TypeReclamationC->updateTypeReclamation($Duree,(int)$_POST["Id_type"]);
 
         
       
              }
              else
                  $error = "Missing information";
                  echo"$error ";
        }
        else    $error = "Missing information";
 
      
?>



<!DOCTYPE html>
<html lang="en">

<head>
<script type = "text/javascript"  src="../assets/js/Reclamation.js"></script>  
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

<body class="user-profile">
<div id="error">
            <?php echo $error; ?>
        </div>
			

	<?php
			if (isset($_POST["Id_type"])){
        $id=$_POST["Id_type"];
       
        $duree=$_POST["duree"];
       
				$TypeReclamation= $TypeReclamationC->recupererTypeReclamation($_POST["Id_type"]);
      
		?>

<div class="wrapper ">

  <div class="sidebar" data-color="yellow">

    <div class="logo">
      
    </div>

<div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">


         
         
          <li class="active ">
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
          <li>
            <a href="">
              <i class="now-ui-icons users_single-02"></i>
              <p>Profil</p>
            </a>
          </li>
          <li>
            <a href="Rechercher_Table.php">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>R??servation de table</p>
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
          <li >
            <a href="AjouterIngredient.php">
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
            <a href="./Main.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>www.PointBio.com</p>
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
                <h5 class="title">Modifier le type de r??clamation d'identifiant <?php echo $id; ?></h5>
         
              <div class="card-body">
            
    
      <div class="content">


        <div class="row">
          <div class="col-md-8 ml-auto mr-auto ">
         
          
            <div class="row">
                 
              <div class="col-md-3 px-1">
                <div class="form-group"></div>
              </div>
              
          
         
            </div>

     

                <form action="ModifierTypeReclamation.php" method="POST" id="formA"> 

            
   <div class="row">
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
              
                      
                      

<input  type="number" name="Id_type" id="Id_type" class="form-control" value = "<?php echo $id; ?>" hidden>
                  
                    </div>
                  </div>
                </div>

                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="duree"> Dur??e maximale pour le traitement</label>
                        <input  type="number" name="duree" id="duree" class="form-control" placeholder="Duree maximale en jours" value = "<?php echo $duree; ?>"  >
                    

                    </div>
                    </div>
          
                  </div>
                
     


                  <div class="controle" id="verifDureeAd"> </div>
                
         
          <input type="submit" value="Enregistrer" name = "submit" onclick = "ModifType();">
  
          <input type="reset" value="Annuler" name = "annuler">
   
       
        
        </form> 

          </div>

      

        </div>
      </div>
    </div>


          </div>
        </div>

        

      </div>
      
    </div>
  </div>
</div>

    <?php
   
		}


  
		?>
          


  
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
</body>

</html>