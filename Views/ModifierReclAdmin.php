<?php
	include "../Controller/ReclamationC.php";
	include_once '../Model/Reclamation.php';

	$ReclamationC = new ReclamationC();


            if (
              isset($_POST['Id_Recl']) && 
              isset($_POST['Etat_traitement'])
          ){
          if (
                  
                  !empty($_POST['Id_Recl']) && 
                  !empty($_POST['Etat_traitement'])
              ) {
		
                
if ($_POST['Etat_traitement']=="Traitee")
{
	$Etat="Non traitee";
}
else
{
	$Etat="Traitee";
}
                  
          $ReclamationC->updateEtatReclamation($Etat,(int)$_POST["Id_Recl"]);
           
              }
              else
              $error = "Missing information";
           
			  header('Location:AfficherReclamation.php');
		
        }
      
?>


