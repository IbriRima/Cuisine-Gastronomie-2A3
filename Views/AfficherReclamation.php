<?PHP
require_once "../Controller/TypeReclamationC.php";
require_once "../Controller/ReclamationC.php";


$ReclamationC=new ReclamationC();
$listeReclamation =$ReclamationC->afficherReclamation();

$nb_NonTraitee=$ReclamationC->NonTraitee();


$nb_Traitee=$ReclamationC->Traitee();

$array=array("Non Traitée"=>$nb_NonTraitee,"Traitée"=>$nb_Traitee);

$N=$array["Non Traitée"];
$T=$array["Traitée"];
$datay=array($N,$T,"0");
$datax= array_keys($array);


$arrayI=array("");
$arrayV=array("");
$listeNote =$ReclamationC->getNote();  

foreach($listeNote as $Reclamation)
{ 
array_push($arrayI,$Reclamation['Note']);
array_push($arrayV,$Reclamation['Nombre']);






}


$arrayTI=array("");
$arrayTV=array("");
$listeType =$ReclamationC->getType();  
foreach($listeType as $Reclamation)
{ 
array_push($arrayTI,$Reclamation['Type']);
array_push($arrayTV,$Reclamation['NT']);


}

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <script type = "text/javascript"  src="../assets/js/Reclamation.js"></script>  
  <script type = "text/javascript"  src="../assets/js/test.js"></script>  
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
        
          <li>
            <a href="./AjouterTypeReclamation.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Type de Reclamation</p>
            </a>
          </li>
          <li class="active ">
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


          <!-- RECHERCHE  -->
          
            <form action="Recherche_Reclamation.php" method="POST">
              <div class="input-group no-border">
                <input type="search" size="50" name="recherche" id="recherche" value="" class="form-control" placeholder="Chercher les réclamations par identifiant du client ...">


                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            
</form>






            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#stat">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
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
                <h4 class="card-title"> Liste des réclamations</h4>
          
              <div class="card-body">
                <div class="table-responsive">



                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                    <th class="text-center">Identifiant</th>
				<th class="text-center">Description</th>
				<th class="text-center">Proposition</th>
				<th class="text-center">Note</th>
				<th class="text-center">Type</th>
				<th class="text-center">Identifiant du client</th>
        <th class="text-center">Etat de traitement</th>

				<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>
			
	
			</tr>
          
                    </thead>
     
                    <tbody>
                    <?PHP
				foreach($listeReclamation as $Reclamation)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $Reclamation["Id_Recl"] ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Description']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Proposition']; ?></td>
          <td class="text-center"><?PHP echo $Reclamation["Note"] ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Type']; ?></td>
          <td class="text-center"><?PHP echo $Reclamation['Id_client']; ?></td>
					<td class="text-center"><?PHP echo $Reclamation['Etat_traitement']; ?></td>
              <td>
					<form method="POST" action="SupprimerReclamation.php" id="Admin" >
          <div class="controle" id="verifDelete"> </div>
              </div>
              <!--   -->
            <input class="left" type="image" src="../assets/img/delete.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $Reclamation['Id_Recl']; ?> name="Id_Recl" id="Id_Recl">
            <input type="hidden" value=<?PHP echo $Reclamation['Etat_traitement']; ?> name="Etat_traitement" id="Etat_traitement" class="Etat">
     
   
     
            </form>
					</td>
     
          <td>
					<form method="POST" action="ModifierReclAdmin.php" id="formMAdmin"  >
            <input class="left" type="image" src="../assets/img/update3.png"  type="submit" width="30" heigth="10"  />
            <input type="hidden" value=<?PHP echo $Reclamation['Id_Recl']; ?> name="Id_Recl" id="Id_Recl">
            <input type="hidden" value=<?PHP echo $Reclamation['Etat_traitement']; ?> name="Etat_traitement" id="Etat_traitement">
            <input type="hidden" value=<?PHP echo $Reclamation['Id_client']; ?> name="Id_client" id="Id_client">
            </form>
					</td>

				</tr>
			<?PHP
				}
			?>

      </tbody>              
                  </table>
                </div>
              </div>
            </div>
          </div>



        
         
          <div class="row" id="stat" >
          <h4> Statistiques des réclamations selon l'état de traitement  </h4>
          </div>
          <div class="row">
          <h4> </h4>
          </div>
        <div style="width:60%;hieght:20%;text-align:center">
         
            <canvas  id="chartjs_bar"></canvas> 
        </div>    

  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">

      var ctx = document.getElementById("chartjs_bar").getContext('2d');
      gradientFill = ctx.createLinearGradient(0, 170, 20, 50);
    gradientFill.addColorStop(0, "rgba(127, 182, 245, 0)");
    gradientFill.addColorStop(1,"rgba(255, 128,68, 0.9)");

                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($datax); ?>,
                        datasets: [{
          
         backgroundColor: gradientFill,
          borderColor: "rgba(255, 128,68, 0.9)",
     
     
          pointBorderWidth: 2,
          pointHoverRadius: 4,
          pointHoverBorderWidth: 1,
          pointRadius: 4,
          fill: true,
          borderWidth: 1,
          label: "Etat de traitement",
          data: <?php echo json_encode($datay); ?>
        }]
                       
                    
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 16,
                        }
                    },
 
 
                }
                });

                
    </script>







<div class="row" id="stat" >
          <h4> Statistiques des Notations </h4>
          </div>
          <div class="row">
          <h4> </h4>
          </div>
        <div style="width:60%;hieght:20%;text-align:center">
         
            <canvas  id="chartjs_bar2"></canvas> 
        </div>    



    <script type="text/javascript">

var grp = document.getElementById("chartjs_bar2").getContext('2d');
gradientFill = grp.createLinearGradient(0, 170, 50, 50);
gradientFill.addColorStop(0, "rgba(127, 182, 245, 0)");
gradientFill.addColorStop(1,"rgba(255, 128,68, 0.9)");

          var myChart = new Chart(grp, {
              type: 'bar',
              data: {
                  labels:<?php echo json_encode($arrayI); ?>,
                  datasets: [{
    
   backgroundColor: gradientFill,
    borderColor: "rgba(255, 128,68, 0.9)",


    pointBorderWidth: 2,
    pointHoverRadius: 4,
    pointHoverBorderWidth: 1,
    pointRadius: 4,
    fill: true,
    borderWidth: 1,
    label: "Note",
   
    data: <?php echo json_encode($arrayV); ?>
  }]
                 
              
              },
              options: {
                     legend: {
                  display: true,
                  position: 'bottom',
                  labels: {
                      fontColor: '#71748d',
                      fontFamily: 'Circular Std Book',
                      fontSize: 16,
                  }
              },


          }
          });

          
</script>
     


<form action="ExcelReclamationNote.php" method="POST">
          <input class="left" type="image" src="../assets/img/excel.png"  type="submit" width="30" heigth="10" />
          <input type="hidden" value=<?php echo json_encode($arrayTI); ?> name="Indice" id="Indice">
            <input type="hidden" value=<?php echo json_encode($arrayTV); ?>name="Valeur" id="Valeur">
      </form>




<div class="row" id="stat" >
          <h4> Statistiques des réclamations selon le type  </h4>
          </div>
          <div class="row">
          <h4> </h4>
          </div>
        <div style="width:60%;hieght:20%;text-align:center">
         
            <canvas  id="chartjs_bar3"></canvas> 
        </div>    

  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">

      var gt = document.getElementById("chartjs_bar3").getContext('2d');
      gradientFill = gt.createLinearGradient(0, 170, 20, 50);
    gradientFill.addColorStop(0, "rgba(127, 182, 245, 0)");
    gradientFill.addColorStop(1,"rgba(255, 128,68, 0.9)");

                var myChart = new Chart(gt, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($arrayTI); ?>,
                        datasets: [{
          
         backgroundColor: gradientFill,
          borderColor: "rgba(255, 128,68, 0.9)",
     
     
          pointBorderWidth: 2,
          pointHoverRadius: 4,
          pointHoverBorderWidth: 1,
          pointRadius: 4,
          fill: true,
          borderWidth: 1,
          label: "Type de réclamation",
          data: <?php echo json_encode($arrayTV); ?>
        }]
                       
                    
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 16,
                        }
                    },
 
 
                }
                });

                
    </script>




<form action="ExcelReclamationType.php" method="POST">
          <input class="left" type="image" src="../assets/img/excel.png"  type="submit" width="30" heigth="10" />
          <input type="hidden" value=<?php echo json_encode($arrayTI); ?> name="Indice" id="Indice">
            <input type="hidden" value=<?php echo json_encode($arrayTV); ?>name="Valeur" id="Valeur">
      </form>



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