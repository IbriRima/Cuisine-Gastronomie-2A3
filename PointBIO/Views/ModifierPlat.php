<?php
 require_once '../Controller/platC.php';
 require_once '../Model/plat.php';

 $platC = new platC();
	$error = "";

    if (isset($_POST["Nom_Plat"])&& isset($_POST["Type_plat"])&& isset($_POST["Prix_plat"])&& isset($_POST["Nbr_Clri_plat"])&& isset($_POST["Pds_Portion_plat"]))

         {
            if (
                !empty($_POST["Nom_Plat"]) && 
                !empty($_POST["Type_plat"]) &&
                !empty($_POST["Prix_plat"]) && 
                !empty($_POST["Nbr_Clri_plat"]) &&
                !empty($_POST["Pds_Portion_plat"])
               

            )  {
                $plat = new plat($_POST["Nom_Plat"],$_POST["Type_plat"],$_POST["Prix_plat"],$_POST["Nbr_Clri_plat"],$_POST["Pds_Portion_plat"],$_POST["imageP"] );
                  
          $platC->updateplat($plat,$_POST["Id_plat"]);
         
              }
              else
                  $error = "Missing information";
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

<body class="user-profile">
<div id="error">
            <?php echo $error; ?>
        </div>
			

	<?php
			if (isset($_POST["Id_plat"])){
        $id=$_POST["Id_plat"];
       
        $Nom_Plat=$_POST["Nom_Plat"];
        
        $Type_plat=$_POST["Type_plat"];
        $Prix_plat=$_POST["Prix_plat"];
        $Nbr_Clri_plat=$_POST["Nbr_Clri_plat"];
        $Pds_Portion_plat=$_POST["Pds_Portion_plat"];
        $imageP=$_POST["imageP"];
				$plat= $platC->recupererPlat($_POST["Id_plat"]);
    
		?>

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

<li class="active">
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
                <h5 class="title">Modifier le  Plat d'identifiant <?php echo $_POST["Id_plat"]?> </h5>
              </div>
              <div class="card-body">
            
    
      <div class="content">


        <div class="row">
          <div class="col-md-8 ml-auto mr-auto ">
         
          
            <div class="row">
                 
              <div class="col-md-3 px-1">
                <div class="form-group"></div>
              </div>
              
          
         
            </div>

     

                <form action="ModifierPlat.php" method="POST" id="formA"> 

            
   <div class="row">
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
              
                      
                     
                          <input  type="number" name="Id_plat" id="Id_plat" class="form-control" value = "<?php echo $id; ?>" hidden >
                  
                    </div>
                  </div>
                </div>

                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Nom_Plat"> nom de plat</label>
                        <input  type="text" name="Nom_Plat" id="Nom_Plat" class="form-control" placeholder="nom de plat" value = "<?php echo $Nom_Plat; ?>"  >
                    

                    </div>
                    </div>
          
                  </div>
                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Type_plat"> type de plat</label>
                        <input  type="text" name="Type_plat" id="Type_plat" class="form-control" placeholder="type de plat" value = "<?php echo $Type_plat; ?>"  >
                    

                    </div>
                    </div>
          
                  </div>



                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Prix_plat"> Prix de plat</label>
                        <input  type="text" name="Prix_plat" id="Prix_plat" class="form-control" placeholder="Prix de plat" value = "<?php echo $Prix_plat; ?>"  >
                    

                    </div>
                    </div>
          
                  </div>






                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Nbr_Clri_plat"> nombre de calorie par plat</label>
                        <input  type="text" name="Nbr_Clri_plat" id="Nbr_Clri_plat" class="form-control" placeholder="clri/plat" value = "<?php echo $Nbr_Clri_plat; ?>"  >
                    

                    </div>
                    </div>
          
                  </div>




                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Pds_Portion_plat"> Poid de portion par plat</label>
                        <input  type="text" name="Pds_Portion_plat" id="Pds_Portion_plat" class="form-control" placeholder="pds/portion" value = "<?php echo $Pds_Portion_plat; ?>"  >
                    

                    </div>
                    </div>
          
                  </div>




                  <div class="row">    
              <div class="col-md-3 px-1">
                  <div class="form-group"></div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="imageP"> nom de l'image a saisir </label>
                  
                  


                  </div>
                </div>
                <input   type="file" id="imageP" name="imageP" accept="image/png, image/jpeg"  value = "<?php echo $imageP; ?>" >
                
                </div>




             
                  <div class="controle" id="verifDureeAd"> </div>
                
         
          <input type="submit" value="Enregistrer" name = "submit"  >
         
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