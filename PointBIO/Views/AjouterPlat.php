<?php
    require_once '../Controller/platC.php';
    require_once '../Model/plat.php';

    $error = "";

 
     
    if (isset($_POST["Nom_Plat"])&& isset($_POST["Type_plat"])&& isset($_POST["Prix_plat"])&& isset($_POST["Nbr_Clri_plat"])&& isset($_POST["Pds_Portion_plat"]) && isset($_POST["imageP"]))
     {

       {
        $Nom_Plat=$_POST['Nom_Plat'];
        $Type_plat=$_POST['Type_plat'];
        $Prix_plat=$_POST['Prix_plat'];
        $Pds_Portion_plat=$_POST["Pds_Portion_plat"];
        $Nbr_Clri_plat=$_POST["Nbr_Clri_plat"];
        $imageP=$_POST["imageP"];
       
		$plat = new plat($Nom_Plat,$Type_plat , $Prix_plat,$Nbr_Clri_plat,$Pds_Portion_plat,$imageP);
		$platC = new platC();
		$platC->addplat($plat);
      }
    }
    else
       $error = "Missing information";


      $platC = new platC();
      $listeplat =$platC->afficherplat();
      
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <script type = "text/javascript"  src="../assets/js/plat.js"></script>  

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
<script src="../assets/js/dark.js"></script>
      <script>
      new Darkmode({
        bottom: '32px',
        right: '32px',
        time: '0.5s',
        label: '🌓'
      }).showWidget();
    </script>

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

<li >
          <a href="./index.php">
          <i class="now-ui-icons ui-1_settings-gear-63"></i>            
          <p> Se déconnecter </p>
          </a>
        </li>
</ul>

      </div>
    </div>
 
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
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form method="POST" action="Recherche_plat.php">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search..." name="recherche" id="recherche" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="statistique_plat.php">
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
   
      <form action="AjouterPlat.php" method="POST" id="form"> 
        
      <div class="panel-header panel-header-sm"></div>
      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto ">
            <div class="card">
 
 
         

            <div class="card-header">
                <h5 class="title"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Ajouter un plat        </h5>
              </div>


              <div class="card-body">
              <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Nbr_Clri_plat">  nombre de calorie par plat</label>
                        <input  type="number" name="Nbr_Clri_plat" id="Nbr_Clri_plat" class="form-control" placeholder="calorie/portion">
                      </div>
                    </div>
                    </div>
                    <div class="controle" id="verifnbrclri">
      </div>
                <div class="row">
                 
                    <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Nom_Plat"> nom de plat</label>
                        <input  type="text" name="Nom_Plat" id="Nom_Plat" class="form-control" placeholder="nom de plat" >
                      </div>
                    </div>
                  </div>
                  <div class="controle" id="verifnomplat">
      </div>


                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Type_plat">  le type de plat </label>
                        <select  name="Type_plat" id="Type_plat"  class="form-control" >
                        <option>Choisissez un type de plat</option>

              <option>Entree-chaud</option>
              <option>Entree-froid</option>
              <option>Plat-principale</option>
              <option>Dessert</option>
              <option>Apéritifs</option>
  </select>
              


                      </div>
                    </div>
                    </div>
                    
                    <div class="controle" id="veriftypeplat">
      </div>
                    <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Prix_plat">  le prix d'un plat </label>
                        <input  type="number" name="Prix_plat" id="Prix_plat" class="form-control" placeholder="prix">
                      </div>
                    </div>
                    </div>
                    <div class="controle" id="verifprixplat"> 

                    
                    </div>

       
                    <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Pds_Portion_plat">  poids d'une portion </label>
                        <input  type="number" name="Pds_Portion_plat" id="Pds_Portion_plat" class="form-control" placeholder="poids/portion">
                      </div>
                    </div>
                    </div>
                    <div class="controle" id="verifpdsportion">
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
                <input   type="file" name="imageP" id="imageP"  accept="image/png, image/jpeg">
                </div>
                
                  <div class="row">
                  
                    <div class="col-md-12 pl" style="text-align:center">
                    <input  type="submit"   value=" Ajouter" name = "submit" onclick = "verifplat();">
                    <input type="reset" value="Annuler" name = "annuler">
                    </div>
                    </div>
             
                  
</form>

</div>

</div> 



  <!--   Afficher + Supprimer  -->
  
  
      <div class="content">
        <div class="row">
          <div class="col-md-12 ">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Table des plats</h4>
              </div>
              <div class="card-body ">
                <div class="table-responsive ">



                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
				<th class="text-center">  &nbsp;&nbsp;Identifiant de plat</th>
				<th class="text-center">nom de plat</th>
        <th class="text-center">type de plat</th>
				<th class="text-center">prix de plat</th>
        <th class="text-center">nombre de calorie par plat</th>
				<th class="text-center">poids d'une portion</th>
        <th class="text-center">image</th>
				<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>  
        <th class="text-center">composer</th>

			</tr>
                    </thead>
     
                  
                  
                    <tbody>
                    <?PHP
				foreach($listeplat as $plat)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $plat["Id_plat"] ?></td>
					<td class="text-center"><?PHP echo $plat['Nom_Plat']; ?></td>
					<td class="text-center"><?PHP echo $plat['Type_plat']; ?></td>
          <td class="text-center"><?PHP echo $plat['Prix_plat']; ?></td>
					<td class="text-center"><?PHP echo $plat['Nbr_Clri_plat']; ?></td>
          <td class="text-center"><?PHP echo $plat['Pds_Portion_plat']; ?></td>
         <td> <img src="../assets/img/<?PHP echo $plat['imageP'];?>" class="img-responsive" alt="image"></td>
          <td>
					<form method="POST" action="SupprimerPlat.php">
            <input class="left"  type="image" src="../assets/img/delete.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $plat['Id_plat']; ?> name="Id_plat" id="Id_plat">
            </form>
					</td>


          <td>
          <form method="POST" action="ModifierPlat.php" >
          <input class="left" type="image" src="../assets/img/update.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $plat['Id_plat']; ?> name="Id_plat" id="Id_plat">
            <input type="hidden" value=<?PHP echo $plat['Nom_Plat']; ?> name="Nom_Plat" id="Nom_Plat">
            <input type="hidden" value=<?PHP echo $plat['Type_plat']; ?> name="Type_plat" id="Type_plat">
            <input type="hidden" value=<?PHP echo $plat['Prix_plat']; ?> name="Prix_plat" id="Prix_plat">
            <input type="hidden" value=<?PHP echo $plat['Nbr_Clri_plat']; ?> name="Nbr_Clri_plat" id="Nbr_Clri_plat">
            <input type="hidden" value=<?PHP echo $plat['Pds_Portion_plat']; ?> name="Pds_Portion_plat" id="Pds_Portion_plat">
            <input type="hidden" value=<?PHP echo $plat['imageP']; ?> name="imageP" id="imageP">

            </form>
					</td>
          <td>
					<form method="POST" action="ajouterplating.php">
            <input class="left"  type="image" src="../assets/img/cooking.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $plat['Id_plat']; ?> name="Id_Plat" id="Id_Plat">
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

</html>