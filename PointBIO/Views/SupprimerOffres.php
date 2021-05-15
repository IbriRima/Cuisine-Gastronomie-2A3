<?PHP
	include "../Controller/OffresC.php";

    $OffresC = new OffresC();



if (isset($_POST["Id_offres"])){
	$OffresC->deleteOffres($_POST["Id_offres"]);
	header('Location:AjouterOffres.php');
}


?>

