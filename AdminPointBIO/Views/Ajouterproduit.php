<?php
     include '../Controller/ProduitC.php';
	   include '../Model/Produit.php';

    $error = "";


     
    if (isset($_POST["Nom_produit"])&& isset($_POST["Quantité_dans_le_stock"])&& isset($_POST["Prix_de_vente"]) && isset($_POST["nom_image"]) )
     {
      if (
        !empty($_POST["Nom_produit"]) && 
        !empty($_POST["Quantité_dans_le_stock"]) &&
        !empty($_POST["Prix_de_vente"]) &&
        !empty($_POST["nom_image"]) 

    )
    {

      $Nom_produit=$_POST['Nom_produit'];
      $Quantité_dans_le_stock=(int)$_POST['Quantité_dans_le_stock'];
      $Prix_de_vente=(int)$_POST['Prix_de_vente'];
      $nom_image=$_POST['nom_image'];


  $Produit = new Produit($Nom_produit,$Quantité_dans_le_stock,$Prix_de_vente,$nom_image);
  $ProduitC = new ProduitC();
  $ProduitC->addProduit($Produit);
    }
    else
    $error = "Missing information";

    }



        $ProduitC = new ProduitC();
      $listeProduit =$ProduitC->afficherProduit();
      
    

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

      <div class="panel-header panel-header-sm">
      </div>
 
      <div class="content">

      <form name="formulaire" action="AjouterProduit.php" method="POST" id="form"  OnSubmit="return controleSaisie()"> 

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
      <h5> <p style="color:orange">Ajouter un produit</p> </h5>
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
                    <label for="Nom_produit"> Nom produit</label>
                    <input  type="text" name="Nom_produit" id="Nom_produit" class="form-control" placeholder="Nom produit">
                    <label id="labelID" name="labelID" style="color:#eb1212">  </label>


                  </div>
                </div>
                </div>
                <div class="controle" id="verifNom_produit">
      </div>


  

      <div class="row">    
              <div class="col-md-3 px-1">
                  <div class="form-group"></div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="Quantité_dans_le_stock">  Quantité dans le stock</label>
                    <input  type="number" name="Quantité_dans_le_stock" id="Quantité_dans_le_stock" class="form-control" placeholder="Quantité dans le stock" >
                    <label id="labelID1" name="labelID1" style="color:#eb1212">  </label>

 
                  </div>
                </div>
                </div>


                <div class="controle" id="verifQuantité_dans_le_stock">
      </div>


      <div class="row">    
              <div class="col-md-3 px-1">
                  <div class="form-group"></div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="Prix_de_vente">  Prix_de_vente</label>
                    <input  type="number" name="Prix_de_vente" id="Prix_de_vente" class="form-control" placeholder="Prix de vente" >
                    <label id="labelID2" name="labelID2" style="color:#eb1212">  </label>

 
                  </div>
                </div>
                </div>


                <div class="controle" id="verifPrix_de_vente">
      </div>

      <div class="row">    
              <div class="col-md-3 px-1">
                  <div class="form-group"></div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="nom_image"> nom de l'image a saisir (.jpg) </label>
                    <input  type="text" name="nom_image" id="nom_image" class="form-control" placeholder="nom de l'image doit etre .jpg">
                    <label id="labelID3" name="labelID3" style="color:#eb1212">  </label>


                  </div>
                </div>
                </div>
                <div class="controle" id="verifnom_image">
      </div>

   

   

   
        
            
        


      <input  type="submit" value="Ajouter" id= "ajouter" name = "submit">
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
                <h4 class="card-title"> Liste Produits</h4>
                <div class="controle" > </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">



                <table id="example" class="table">
                    <thead class=" text-primary">
                    <tr>
				<th class="text-center">Identifiant</th>
				<th class="text-center">Nom produit</th>
				<th class="text-center">quantite dans le stock</th>
        <th class="text-center">prix de vente</th>
        <th class="text-center">nom de l'image</th>


			
				<th class="text-center">Supprimer</th>
				<th class="text-center">Modifier</th>
			</tr>
                    </thead>
     
                  
                  
                    <tbody>
                    <?PHP
				foreach($listeProduit as $Produit)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $Produit["Id_produit"] ?></td>
					<td class="text-center"><?PHP echo $Produit['Nom_produit']; ?></td>
					<td class="text-center"><?PHP echo $Produit['Quantité_dans_le_stock']; ?></td>
          <td class="text-center"><?PHP echo $Produit['Prix_de_vente']; ?></td>
          <td class="text-center"><?PHP echo $Produit['nom_image']; ?></td>


          <td>
					<form method="POST" action="SupprimerProduit.php">
            <input class="left"  type="image" src="../assets/img/delete.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $Produit['Id_produit']; ?> name="Id_produit" id="Id_produit">
            </form>
					</td>


          <td>
          <form method="POST" action="ModifierProduit.php" >
          <input class="left" type="image" src="../assets/img/update1.png"  type="submit" width="30" heigth="10" />
            <input type="hidden" value=<?PHP echo $Produit['Id_produit']; ?> name="Id_produit" id="Id_produit">
            <input type="hidden" value=<?PHP echo $Produit['Nom_produit']; ?> name="Nom_produit" id="Nom_produit">
            <input type="hidden" value=<?PHP echo $Produit['Quantité_dans_le_stock']; ?> name="Quantité_dans_le_stock" id="Quantité_dans_le_stock">
            <input type="hidden" value=<?PHP echo $Produit['Prix_de_vente']; ?> name="Prix_de_vente" id="Prix_de_vente">
            <input type="hidden" value=<?PHP echo $Produit['nom_image']; ?> name="nom_image" id="nom_image">


            </form>
					</td>


				</tr>
			<?PHP
				}
			?>


										<!-- 
	content of this area will be the content of your PDF file 
	-->
	<div
  
  id="HTMLtoPDF">

	</div>


	<!-- these js files are used for making PDF -->
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
	
	<div class="imprimer">
      <a align="right" href="statsQuantite.php"><img src="../assets/img/stats.jpg" alt="stats" style="width:60px;height:50px;"></a>
      <br></br>
      <a align="right" href="exportexel.php"><img src="../assets/img/excel.png" alt="stats" style="width:60px;height:50px;"></a>
      <br></br>
    
 <a align="right" href="imprimertables.php"><img src="../assets/img/print.jpg" alt="stats" style="width:60px;height:50px;"></a>

      


 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>

<br><br><br>
									
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>


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
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"> </script>
            <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"> </script>


<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );

</script>
<?php
 echo nl2br( "date :  " . date("Y-m-d\n"));
echo "time :  " . date("h:i:sa");

?>


</body>

</html>