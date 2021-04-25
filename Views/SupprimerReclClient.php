<?PHP
	include "../Controller/ReclamationC.php";

	$ReclamationC=new ReclamationC();

	if (isset($_POST["Id_Recl"]))
	{

			$ReclamationC->deleteReclamation($_POST["Id_Recl"]);
	
			header('Location:ReclamationClient.php');
	
	}

?>