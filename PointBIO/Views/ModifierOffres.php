<?php
  require_once '../Controller/OffresC.php';
  require_once '../Model/offres.php';

  $OffresC = new OffresC() ;
  $error = "";
  
  if (isset($_POST["Valeur"])&& isset($_POST["id_produit"]))
         {
            if (
                !empty($_POST["Valeur"]) &&
                !empty($_POST["id_produit"]) 

               
            )
              {
                $offres = new offres($_POST["Valeur"],$_POST["id_produit"]);
                  
          $OffresC->updateOffres($offres,$_POST["Id_offres"]);
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
				<?php
			if (isset($_POST["Id_offres"])){
        $Valeur=(int)$_POST["Valeur"];
       
        $Id_prod=(int)$_POST["id_produit"];
       
				$offre= $OffresC->recupererOffre($_POST["Id_offres"]);
      
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
              <p>Cartes Fidelités</p>
            </a>
          </li>
          <li>
            <a href="Rechercher_Table.php">
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

          <li class="active ">
            <a href="./AjouterOffres.php">
              <i class="now-ui-icons business_money-coins"></i>
              <p>offres</p>
            </a>
          </li>
          <li>
            <a href="AjouterIngredient.php">
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
            <a href="./index.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>www.PointBio.com</p>
            </a>
          </li>
        </ul>

        
      </div>
    </div>

    <div class="main-panel" id="main-panel">

    <script type="text/javascript">
    function controleSaisie1() {
      var error=true;


       if (document.formulaire.id_produit.value == "") {
        document.getElementById("labelIDoffre").innerHTML="Veuillez saisir un identifiant de produit existant";
        error=false ;

      }
      if (document.formulaire.Valeur.value == "") {
        document.getElementById("labelIDoffreprix").innerHTML="Veuillez saisir le nouveau prix ";
        error=false ;   

      }
      return error;


      }
     
  </script> 



  
      <div class="panel-header panel-header-sm">
      </div>

      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Modifier une offre</h5>
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

     

                <form name="formulaire" action="ModifierOffres.php" method="POST" id="form"  OnSubmit="return controleSaisie1()"> 


            
   <div class="row">
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
              
                      
                      <label for="Id_offres"> Identifiant </label>

<input  type="number" name="Id_offres" id="Id_offres" class="form-control" placeholder="entrez l'id de l'offre" value = "<?php echo $_POST["Id_offres"]; ?>" >
                  
                    </div>
                  </div>
                </div>


                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                  
                        <label for="Valeur"> changer le Valeur de l'offre</label>
                        <input  type="number" name="Valeur" id="Valeur" class="form-control" placeholder="changer le valeur de l'offre"    value = <?php echo  (int)$_POST["Valeur"]; ?>>
                        <label id="labelIDoffreprix" name="labelIDoffreprix" style="color:#eb1212">  </label>


                    </div>
                    <div class="form-group">
                  
                  <label for="id_produit"> changer l'identifiant du produit</label>
                  <input  type="number" name="id_produit" id="id_produit" class="form-control" placeholder="changer l'identifiant du produit"   value = <?php echo  (int)$_POST["id_produit"] ; ?> >
                  <label id="labelIDoffre" name="labelIDoffre" style="color:#eb1212">  </label>

              

              </div>
                    </div>
          
                  </div>




             
                  <div class="controle" id="verifValeur"> </div>
                
         
                  <input type="submit" value="Enregistrer" name = "submit">
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