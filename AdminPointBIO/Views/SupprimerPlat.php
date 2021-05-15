<?PHP
	include "../Controller/platC.php";

    $platC = new platC();


	
if (isset($_POST["Id_plat"])){
	$platC->deleteplat($_POST["Id_plat"]);
	header('Location:AjouterPLat.php');
}


?>