<?PHP
	include "../Controller/OffresC.php";

    $OffresC = new OffresC();


	
if (isset($_POST["id_offres"])){
	$OffresC->deleteOffres($_POST["id_offres"]);
	header('Location:AjouterOffres.php');
}


?>

