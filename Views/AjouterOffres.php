<?php
     require_once '../Controller/OffresC.php';
	 require_once '../Model/offres.php';

    $error = "";


     
    if (isset($_POST["Valeur"])&& isset($_POST["id_produit"]))
     {
      if (
        !empty($_POST["Valeur"])&& 
        !empty($_POST["id_produit"]) 

    )
    {

      $Valeur=(int)$_POST['Valeur'];
      $id_produit=(int)$_POST['id_produit'];

      $offres = new offres($Valeur,$id_produit);
      $OffresC = new OffresC();
      $OffresC->addOffres($offres);
     // echo "hh $id_produit";

    
   
    }
    else
    $error = "Missing information";

    }



      $OffresC = new OffresC();
      $listeOffres =$OffresC->afficherOffres();
      
    

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <script type = "text/javascript"  src="../assets/js/Offres.js"></script>  
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

 
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

          <li >
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
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" onclick="test();">
                  <a class="dropdown-item" name="TypeRech">Identifiant produit</a>
                  <a class="dropdown-item"  name="TypeRech">Type</a>
                  <a class="dropdown-item"  name="TypeRech">Etat de traitement</a>
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

      <form name="formulaire" action="AjouterOffres.php" method="POST" id="form"  OnSubmit="return controleSaisie1()"> 


<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
      <h5> <p style="color:orange">liste des offres</p> </h5>
        <div class="controle" id="verifEtat"> </div>
      </div>
      <div class="card-body">


       
        
  
              <div class="form-group"></div>

              <div class="row">    
              <div class="col-md-3 px-1">
                  <div class="form-group"></div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="id_produit">  identifiant produit</label>
                    <input  type="number" name="id_produit" id="id_produit" class="form-control" placeholder="identifiant produit" >
                    <label id="labelIDoffre" name="labelIDoffre" style="color:#eb1212">  </label>

 
                  </div>
                </div>
                </div>



                <div class="controle" id="verifValeur">
      </div>
    
            
        
            
      <div class="row">    
              <div class="col-md-3 px-1">
                  <div class="form-group"></div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="Valeur">  Nouveau prix</label>
                    <input  type="number" name="Valeur" id="Valeur" class="form-control" placeholder="nouveau prix" >
                    <label id="labelIDoffreprix" name="labelIDoffreprix" style="color:#eb1212">  </label>

 
                  </div>
                </div>
                </div>



                <div class="controle" id="verifValeur">
      </div>
   












      <input type="submit" value="Ajouter" id="ajouter" name = "submit">
      <input type="reset" value="Annuler" name = "annuler">







      </div>
    </div>
  </div>
</div>


</form>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Liste Offres</h4>
                <div class="controle" > </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">



                <table id="example1" class="table">
                    <thead class=" text-primary">
                    <tr>
				<th class="text-center">Identifiant offre</th>
				<th class="text-center">Valeur</th>

			
				<th class="text-center">id produit</th>
				<th class="text-center">Supprimer</th>
                <th class="text-center">Modifier</th>

			</tr>
                    </thead>
     
                  
                  
                    <tbody>
                    <?PHP
				foreach($listeOffres as $Offre)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $Offre['Id_offres'] ?></td>
					<td class="text-center"><?PHP echo $Offre['Valeur']; ?></td>
                    <td class="text-center"><?PHP echo $Offre['id_produit']; ?></td>
                    




          <td>
					<form method="POST" action="SupprimerOffres.php">
            <input class="left"  type="image" src="../assets/img/delete.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $Offre['Id_offres']; ?> name="Id_offres" id="Id_offres">
            </form>
					</td>


          <td>
          <form method="POST" action="ModifierOffres.php" >
          <input class="left" type="image" src="../assets/img/update1.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $Offre['Id_offres']; ?> name="Id_offres" id="Id_offres">
            <input type="hidden" value=<?PHP echo $Offre['Valeur']; ?> name="Valeur" id="Valeur">
            <input type="hidden" value=<?PHP echo $Offre['id_produit']; ?> name="id_produit" id="id_produit">


            </form>
					</td>


				</tr>
			<?PHP
				}
			?>

                    <tbody>              
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>



   
    <?php
 echo nl2br( "date :  " . date("Y-m-d\n"));
echo "time :  " . date("h:i:sa");


?>




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

  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"> </script>
            <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"> </script>


<script>
  $(document).ready(function() {
    $('#example1').DataTable();
} );

</script>



</body>

</html>