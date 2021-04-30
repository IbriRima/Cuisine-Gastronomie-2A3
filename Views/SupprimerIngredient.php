<?PHP
	include "../Controller/ProduitC.php";

    $ProduitC = new ProduitC();


	
if (isset($_POST["Id_produit"])){
	$ProduitC->deleteProduit($_POST["Id_produit"]);
	header('Location:AjouterProduit.php');
}


?>

