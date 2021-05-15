<?php
  require_once '../Controller/ProduitC.php';
  require_once '../Model/Produit.php';

  $ProduitC = new ProduitC() ;
  $error = "";

  if (isset($_POST["Nom_produit"])&& isset($_POST["Quantité_dans_le_stock"])&& isset($_POST["Prix_de_vente"])&& isset($_POST["nom_image"]))
         {
            if (
                !empty($_POST["Nom_produit"]) && 
                !empty($_POST["Quantité_dans_le_stock"]) &&
                !empty($_POST["Prix_de_vente"]) &&
                !empty($_POST["nom_image"]) 
               
            )
              {
                $Produit = new Produit($_POST["Nom_produit"],$_POST["Quantité_dans_le_stock"],$_POST["Prix_de_vente"] ,$_POST["nom_image"]);
                  
          $ProduitC->updateProduit($Produit,$_POST["Id_produit"]);
              }
              else
                  $error = "Missing information";
        }
	

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

          <li class="active ">
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
    <script type="text/javascript">
    function controleSaisie() {
      var error;
       if (document.formulaire.Nom_produit.value == "") {
        document.getElementById("labelID").innerHTML="Veuillez saisir votre nom de produit!";
        error=false ;

      }
       if (document.formulaire.Quantité_dans_le_stock.value == "") {
        document.getElementById("labelID1").innerHTML="Veuillez saisir la quantité dans le stock!";
				error=false ;

      }
       if (document.formulaire.Prix_de_vente.value == "") {
        document.getElementById("labelID2").innerHTML="Veuillez saisir le prix de vente!";
				error=false ;

      }
       if (document.formulaire.nom_image.value == "") {
        document.getElementById("labelID3").innerHTML="Veuillez saisir le nom de l'image!";
				error=false ;

      }
      return error;
    } 
  </script> 


    <div class="main-panel" id="main-panel">

  
      <div class="panel-header panel-header-sm">
      </div>

      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Modifier un Produit</h5>
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

     

            <form name="formulaire" action="ModifierProduit.php" method="POST" id="form"  OnSubmit="return controleSaisie()"> 

            
   <div class="row">
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
              
                      
                      <label for="Id_produit"> Identifiant </label>

<input  type="number" name="Id_produit" id="Id_produit" class="form-control" value = <?php echo  (int)$_POST["Id_produit"] ; ?> >
                  
                    </div>
                  </div>
                </div>


                <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Nom_produit"> nom de produit</label>
                        <input  type="text" name="Nom_produit" id="Nom_produit" class="form-control" placeholder="changer le nom " value = <?php echo  $_POST["Nom_produit"] ; ?> >
                        <label id="labelID" name="labelID" style="color:#eb1212">  </label>


                    </div>
                    </div>
          
                  </div>


                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Quantité_dans_le_stock"> Quantité_dans_le_stock</label>
                        <input  type="number" name="Quantité_dans_le_stock" id="Quantité_dans_le_stock" class="form-control" placeholder="changer la quantité dans le stock" value = <?php echo  $_POST["Quantité_dans_le_stock"] ; ?>  >
                        <label id="labelID1" name="labelID1" style="color:#eb1212">  </label>


                    </div>
                    </div>
          
                  </div>




                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Prix_de_vente"> Prix de vente</label>
                        <input  type="number" name="Prix_de_vente" id="Prix_de_vente" class="form-control" placeholder="changer le prix de vente" value = <?php echo  $_POST["Prix_de_vente"] ; ?>  > 
                        <label id="labelID2" name="labelID2" style="color:#eb1212">  </label>


                    </div>
                    </div>
          
                  </div>

                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="nom_image"> nom de l'image</label>
                        <input  type="text" name="nom_image" id="nom_image" class="form-control" placeholder="changer le nom de l'image " value = <?php echo  $_POST["nom_image"] ; ?>   >
                        <label id="labelID3" name="labelID3" style="color:#eb1212">  </label>


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