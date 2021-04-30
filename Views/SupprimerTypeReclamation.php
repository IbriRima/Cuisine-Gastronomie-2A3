<?PHP
	include "../Controller/TypeReclamationC.php";

	$TypeReclamationC=new TypeReclamationC();


	
if (isset($_POST["Id_type"])){
	$TypeReclamationC->deleteTypeReclamation($_POST["Id_type"]);
	header('Location:AjouterTypeReclamation.php');
}
else 
{

	header('Location:AjouterTypeReclamation.php');
}


?>