<?php
     require_once '../Controller/ReclamationC.php';
	 require_once '../Model/Reclamation.php';

    $error = "";


     
    if (isset($_POST["Id_client"])&& isset($_POST["Note"])&& isset($_POST["Type"])&& isset($_POST["Description"])&& isset($_POST["Proposition"]))
     {

        if (
            !empty($_POST["Id_client"]) && 
            !empty($_POST["Note"]) &&
            !empty($_POST["Type"]) && 
            !empty($_POST["Description"]) &&
            !empty($_POST["Proposition"])
        ) {
        $Id_client=$_POST['Id_client'];
        $Note=(float)$_POST["Note"];
        $Type=$_POST['Type'];
        $Proposition=$_POST["Proposition"];
        $Description=$_POST["Description"];
        $Etat_traitement="Non traitee";
		$Reclamation = new Reclamation($Proposition, $Description, $Type,$Etat_traitement,$Note,$Id_client);
		$ReclamationC = new ReclamationC();
		$ReclamationC->addReclamation($Reclamation);
    	header('Location:ReclamationClient.php');
    }
    else
    {  header('Location:ReclamationClient.php');}
 
}
else
{  header('Location:ReclamationClient.php');}
 

?>