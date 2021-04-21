<?php
    require_once '../Controller/ingredientC.php';
    require_once '../Model/ingredient.php';

    $error = "";


     
    if (isset($_POST["Nom_Igd"])&& isset($_POST["Type_Igd"])&& isset($_POST["Prix_Igd"]))
    {

      {
       $Nom_Igd=$_POST['Nom_Igd'];
       $Type_Igd=$_POST['Type_Igd'];
       $Prix_Igd=$_POST['Prix_Igd'];
      

       $ingredient = new ingredient( $Nom_Igd,$Type_Igd, $Prix_Igd);
       $ingredientC = new ingredientC();
       $ingredientC->addIgd($ingredient);
       } 
  
   }
    else
     $error = "Missing information";
      $ingredientC = new ingredientC() ;
      $listeingredient =$ingredientC->afficherIgd();
     
    

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
 
     
         <li >
            <a href="./AjouterPlat.php">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Plat</p>
            </a>
          </li>
          <li class="active " >
          <a href="./ajouterIngredient.php">
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
 
 
   
      <form action="AjouterIngredient.php" method="POST"> 
        
      <div class="panel-header panel-header-sm"></div>
      <div class="content">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto ">
            <div class="card">
 
 
 
            <div class="card-header">
                <h5 class="title"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Ajouter un ingredient       </h5>
              </div>


              <div class="card-body">
           
                <div class="row">
                 
                    <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Nom_Igd"> nom de l'ingredient</label>
                        <input  type="text" name="Nom_Igd" id="Nom_Igd" class="form-control" placeholder="nom l'ingredient">
                      </div>
                    </div>
                  </div>



                  <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Type_Igd">  le type de l'ingredient </label>
                        <input  type="text" name="Type_Igd" id="Type_Igd" class="form-control" placeholder="type de l'ingredient">
                      </div>
                    </div>
                    </div>

                    <div class="row">    
                  <div class="col-md-3 px-1">
                      <div class="form-group"></div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="Prix_Igd">  le prix d'une portion de l'ingredient </label>
                        <input  type="number" name="Prix_Igd" id="Prix_Igd" class="form-control" placeholder="prix/portion">
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
                <h4 class="card-title"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Table des ingredients </h4>
              </div>
              <div class="card-body ">
                <div class="table-responsive ">



                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
				<th class="text-center">  &nbsp;&nbsp;Identifiant d'ingredient</th>
				<th class="text-center">nom d'ingredient'</th>
        <th class="text-center">type d'ingredient'</th>
				<th class="text-center">prix d'ingredient</th>
     

			<!--	<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>  
        -->
			</tr>
                    </thead>
     
                  
                  
                    <tbody>
                    <?PHP
				foreach($listeingredient as $ingredient)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $ingredient["Id_Igd"] ?></td>
					<td class="text-center"><?PHP echo $ingredient['Nom_Igd']; ?></td>
					<td class="text-center"><?PHP echo $ingredient['Type_Igd']; ?></td>
          <td class="text-center"><?PHP echo $ingredient['Prix_Igd']; ?></td>
					


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