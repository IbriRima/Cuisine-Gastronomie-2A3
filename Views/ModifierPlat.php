<?php
 require_once '../Controller/platC.php';
 require_once '../Model/plat.php';

 $platC = new platC();
	$error = "";

    if (isset($_POST["Nom_Plat"])&& isset($_POST["Type_plat"])&& isset($_POST["Prix_plat"])&& isset($_POST["Nbr_Clri_plat"])&& isset($_POST["Pds_Portion_plat"]))

         {
            if (
                !empty($_POST["Nom_Plat"]) && 
                !empty($_POST["Type_plat"]) &&
                !empty($_POST["Prix_plat"]) && 
                !empty($_POST["Nbr_Clri_plat"]) &&
                !empty($_POST["Pds_Portion_plat"])
            )  {
                $plat = new plat($_POST["Nom_Plat"],$_POST["Type_plat"],$_POST["Prix_plat"],$_POST["Nbr_Clri_plat"],$_POST["Pds_Portion_plat"] );
                  
          $platC->updateplat($plat,$_POST["Id_plat"]);
              }
              else
                  $error = "Missing information";
        }
	

?>
