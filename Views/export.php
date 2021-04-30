<?php
require('database.php');
$sql="select * from produit";
$res=mysqli_query($con,$sql);
$html='<table><tr><td>Id produit</td><td>nom produit</td><td>quantite dans le stock</td><td>prix de vente</td><td>nom image</td></tr>';
while($row=mysqli_fetch_assoc($res)){
	$html.='<tr><td>'.$row['Id_produit'].'</td><td>'.$row['Nom_produit'].'</td><td>'.$row['Quantité_dans_le_stock'].'</td><td>'.$row['Prix_de_vente'].'</td><td>'.$row['nom_image'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>