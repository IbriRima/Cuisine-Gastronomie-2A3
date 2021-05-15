<?php
     require_once '../Controller/ProduitC.php';
	 require_once '../Model/Produit.php';
	 require_once '../Controller/OffresC.php';
	 require_once '../Model/offres.php';


    $error = "";




        $ProduitC = new ProduitC();
      $listeProduit =$ProduitC->afficherProduit();
	  $OffresC = new OffresC();
      $listeOffres =$OffresC->afficherOffres();

      
    

?>
<!DOCTYPE html>
<html>
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
<body>
<img src="../assets/img/favicon.png" height="80" width="80"><h5>PointBIO</h5>
<br>
<img src="../assets/img/u.jpg" height="500" width="1300">
<p>
</p>
<br>
<br>
<br>
  <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Table de produits</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">



                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
				<th class="text-center">identifiant produit</th>
				<th class="text-center">nom produit</th>
				<th class="text-center">quantite dans le stock</th>
        <th class="text-center">prix de vente</th>
        <th class="text-center">nom de l'image de produit</th>


			
	
			</tr>
          
                    </thead>
     
                    <tbody>
                    <?PHP
				foreach($listeProduit as $Produits)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $Produits["Id_produit"] ?></td>
					<td class="text-center"><?PHP echo $Produits['Nom_produit']; ?></td>
					<td class="text-center"><?PHP echo $Produits['Quantité_dans_le_stock']; ?></td>
          <td class="text-center"><?PHP echo $Produits['Prix_de_vente']; ?></td>
          <td class="text-center"><?PHP echo $Produits['nom_image']; ?></td>


     
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






          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Table des offres</h4>
              
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class="text-center">
                      <th>
                        Identifiant offres
                      </th>
                      <th class="text-center">
                        nouveau prix
                      </th>

                      <th class="text-center">
                        identifiant produit
                      </th>

                 
                    </thead>






                    <tbody>
                    
                    <?PHP
				foreach($listeOffres as $Offres)
        {
			?>
				<tr>
					<td class="text-center"><?PHP echo $Offres["Id_offres"] ?></td>
					<td class="text-center"><?PHP echo $Offres['Valeur']; ?></td>
					<td class="text-center"><?PHP echo $Offres['id_produit']; ?></td>
          
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
        </div>
      </div>              
<br><br><br>
    
                 <div id="HTMLtoPDF">
  <div class="imprimer">
        <input id="impression" name="impression" class="btn btn-primary" type="submit" onclick="imprimer_page()" value="Imprimer la Page" />
      </div>
 
       <script type="text/javascript">
            function imprimer_page(){
            window.print();
             }
        </script>
</body>
</html>