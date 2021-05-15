<?php
require('database.php');
$sql="select * from produit";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Export data to excel in PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
body {
  background-image: url('../assets/img/exceel.jpg');
}
</style>

<body>

<div class="container">
  <a href="export.php"><button type="button" class="btn btn-primary">Export</button></a>
  <table class="table table-bordered  table-striped">
    <thead>
      <tr>
        <th>Id produit</th>
        <th>nom produit</th>
        <th>qunatite dans le stock</th>
        <th>prix de vente</th>
        <th>nom image</th>

      </tr>
    </thead>
    <tbody>
	 <?php while($row=mysqli_fetch_assoc($res)){?>	
	 <tr>
        <td><?php echo $row['Id_produit']?></td>
        <td><?php echo $row['Nom_produit']?></td>
        <td><?php echo $row['Quantité_dans_le_stock']?></td>
        <td><?php echo $row['Prix_de_vente']?></td>
        <td><?php echo $row['nom_image']?></td>

      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<style>
.btn{
	float: right;
    margin-bottom: 20px;
    margin-top: 20px;
}
</style>

</body>
</html>
