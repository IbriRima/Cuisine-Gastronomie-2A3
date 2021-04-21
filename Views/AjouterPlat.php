<?php
    require_once '../Controller/platC.php';
    require_once '../Model/plat.php';

    $error = "";


     
    if (isset($_POST["Nom_Plat"])&& isset($_POST["Type_plat"])&& isset($_POST["Prix_plat"])&& isset($_POST["Nbr_Clri_plat"])&& isset($_POST["Pds_Portion_plat"]))
     {

       {
        $Nom_Plat=$_POST['Nom_Plat'];
        $Type_plat=$_POST['Type_plat'];
        $Prix_plat=$_POST['Prix_plat'];
        $Pds_Portion_plat=$_POST["Pds_Portion_plat"];
        $Nbr_Clri_plat=$_POST["Nbr_Clri_plat"];
       
		$plat = new plat($Nom_Plat,$Type_plat , $Prix_plat,$Nbr_Clri_plat,$Pds_Portion_plat);
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
            <a href="./AjouterPlat.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Plat</p>
            </a>
          </li>
          <li >
          <a href="./AjouterIngredient.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Ingredient</p>
            </a>
          </li>
          <li>
            <a href="./tables.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
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
 
 
   
      <form action="AjouterPlat.php" method="POST"> 
        
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
                        <label for="Nom_Plat"> nom de plat</label>
                        <input  type="text" name="Nom_Plat" id="Nom_Plat" class="form-control" placeholder="nom de plat">
                      </div>
                    </div>
                  </div>



                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Type_plat">  le type de plat </label>
                        <input  type="text" name="Type_plat" id="Type_plat" class="form-control" placeholder="type de plat">
                      </div>
                    </div>
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

                  <div class="row">
                  
                    <div class="col-md-12 pl" style="text-align:center">
                    <input  type="submit"   value=" Ajouter" name = "submit">
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

			<!--	<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>  
        -->
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