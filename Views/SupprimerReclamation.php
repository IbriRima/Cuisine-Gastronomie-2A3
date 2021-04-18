<?PHP
	include "../Controller/ReclamationC.php";

	$ReclamationC=new ReclamationC();

	if (isset($_POST["Id_Recl"])&& isset($_POST["Etat_traitement"])){
		if($_POST["Etat_traitement"]=="Non")
		{
			$ReclamationC->deleteReclamation($_POST["Id_Recl"]);
	
		}
	
	}

?>