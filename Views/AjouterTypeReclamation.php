<?php
     require_once '../Controller/TypeReclamationC.php';
	 require_once '../Model/TypeReclamation.php';

    $error = "";


     
    if (isset($_POST["libelle"])&& isset($_POST["duree"]) )
     {
        $Libelle=$_POST['libelle'];
        $Duree=(int)$_POST['duree'];
       
     
		$TypeReclamation = new TypeReclamation($Libelle,$Duree);
		$TypeReclamationC = new TypeReclamationC();
		$TypeReclamationC->addTypeReclamation($TypeReclamation);
    }
    else
        $error = "Missing information";


        $TypeReclamationC = new TypeReclamationC();
      $listeTypeReclamation =$TypeReclamationC->afficherTypeReclamation();
      
    

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
<li>
<a href="./AfficherReclamation.php">
    <i class="now-ui-icons files_single-copy-04"></i>
    <p>réclamation</p>
  </a>
</li>
<li  >
  <a href="">
    <i class="now-ui-icons users_single-02"></i>
    <p>Profil</p>
  </a>
</li>
<li>
  <a href="">
    <i class="now-ui-icons ui-1_calendar-60"></i>
    <p>Réservation de table</p>
  </a>
</li>

<li>
  <a href="">
    <i class="now-ui-icons design_app"></i>
    <p>Type de table</p>
  </a>
</li>

<li>
  <a href="">
    <i class="now-ui-icons shopping_box"></i>
    <p>Produits</p>
  </a>
</li>

<li>
  <a href="">
    <i class="now-ui-icons business_money-coins"></i>
    <p>offres</p>
  </a>
</li>
<li>
  <a href="">
    <i class="now-ui-icons files_paper"></i>
    <p>Ingrédients</p>
  </a>
</li>

<li>
  <a href="">
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
 
 
   
      <form action="AjouterTypeReclamation.php" method="POST"> 
        
      <div class="panel-header panel-header-sm"></div>
      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto ">
            <div class="card">
 
 
 
            <div class="card-header">
                <h5 class="title">Ajouter un type de reclamation</h5>
              </div>


              <div class="card-body">
           
                <div class="row">
                 
                    <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="libelle"> Libellé</label>
                        <input  type="text" name="libelle" id="libelle" class="form-control" placeholder="Libellé">
                      </div>
                    </div>
                  </div>



                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Durée maximale pour le traitement"> Durée maximale pour le traitement</label>
                        <input  type="number" name="duree" id="duree" class="form-control" placeholder="Durée en jours">
                      </div>
                    </div>
                    </div>




                  <div class="row">
                    <div class="col-md-12 pl">
                    <input type="submit" value="Ajouter" name = "submit">
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
                <h4 class="card-title"> Table de types de réclamation</h4>
              </div>
              <div class="card-body ">
                <div class="table-responsive ">



                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
				<th class="text-center">Identifiant</th>
				<th class="text-center">Libellé</th>
				<th class="text-center">Durée maximale de traitement de la réclamation</th>
			
				<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>
			</tr>
                    </thead>
     
                  
                  
                    <tbody>
                    <?PHP
				foreach($listeTypeReclamation as $TypeReclamation)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $TypeReclamation["Id_type"] ?></td>
					<td class="text-center"><?PHP echo $TypeReclamation['Libelle']; ?></td>
					<td class="text-center"><?PHP echo $TypeReclamation['Duree_traitement_max']; ?></td>
          <td>
					<form method="POST" action="SupprimerTypeReclamation.php">
            <input class="left"  type="image" src="../assets/img/delete.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $TypeReclamation['Id_type']; ?> name="Id_type" id="Id_type">
            </form>
					</td>


          <td>
          <form method="POST" action="ModifierTypeReclamation.php">
          <input class="left" type="image" src="../assets/img/update3.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $TypeReclamation['Id_type']; ?> name="Id_type" id="Id_type">
            <input type="hidden" value=<?PHP echo $TypeReclamation['Libelle']; ?> name="Libelle" id="Libelle">
            <input type="hidden" value=<?PHP echo $TypeReclamation['Duree_traitement_max']; ?> name="duree" id="duree">
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