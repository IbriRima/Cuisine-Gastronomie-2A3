<?PHP
//imprimer.php
include "../controller/ReservationC.php";
include "../controller/CategoriesTableC.php";
session_start();
$keyword = $_SESSION['search'];

$ReservationC=new ReservationC();
$listeReservation =$ReservationC->afficherReservation($keyword);
  


$CategoriesTableC=new CategoriesTableC();
$listeCategoriesTable =$CategoriesTableC->afficherCategoriesTable();
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
<h5 > Liste des réservations</h5>
 <table border=2 class="table">
                    <thead class=" text-primary">
                    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nom</th>
        <th class="text-center">Prénom</th>
        <th class="text-center">E-mail</th>
        <th class="text-center">Message</th>
        <th class="text-center">Date de réservation</th> 
      </tr>
        
                    </thead>

   <tbody>
                    <?PHP
        foreach($listeReservation as $Reservation)
        {
      ?>
       
    <tr>
          <td class="text-center"><?PHP echo $Reservation["ID"] ?></td>
          <td class="text-center"><?PHP echo $Reservation['Nom']; ?></td>
          <td class="text-center"><?PHP echo $Reservation['Prenom']; ?></td>
          <td class="text-center"><?PHP echo $Reservation['Email'] ?></td>
          <td class="text-center"><?PHP echo $Reservation['Message'] ?></td>
          <td class="text-center"><?PHP echo $Reservation['datetemps'] ?></td>
        </tr>
               <?PHP
        }
      ?>
  </tbody>
</table>
<br><br><br>
      <h5> Liste des Catégories Table</h5>
      <table border="2" class="table">
                    <thead class=" text-primary">
                <tr>
                <th class="text-center">ID</th>
        <th class="text-center">NB_places</th>
        <th class="text-center">Forme</th>
        <th class="text-center">Espace</th>
          </tr>
                    </thead>
     
                    <tbody>
                    <?PHP
        foreach($listeCategoriesTable as $CategoriesTable)
        {
      ?>
        <tr>
          <td class="text-center"><?PHP echo $CategoriesTable["ID"] ?></td>
          <td class="text-center"><?PHP echo $CategoriesTable["NB_places"]; ?></td>
          <td class="text-center"><?PHP echo $CategoriesTable['Forme']; ?></td>
          <td class="text-center"><?PHP echo $CategoriesTable['Espace'] ?></td>
  
        </tr>
      <?PHP
        }
      ?>  
      </tbody> 
      </table>                          
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