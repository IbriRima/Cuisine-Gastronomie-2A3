<?php
  require_once '../Controller/ingredientC.php';
  require_once '../Model/ingredient.php';

  $ingredientC = new ingredientC() ;
  $error = "";

  if (isset($_POST["Nom_Igd"])&& isset($_POST["Type_Igd"])&& isset($_POST["Prix_Igd"]))
         {
            if (
                !empty($_POST["Nom_Igd"]) && 
                !empty($_POST["Type_Igd"]) &&
                !empty($_POST["Prix_Igd"]) 
               
            )
              {
                $ingredient = new ingredient($_POST["Nom_Igd"],$_POST["Type_Igd"],$_POST["Prix_Igd"] );
                  
          $ingredientC->updateIgd($ingredient,$_POST["Id_Igd"]);
              }
              else
                  $error = "Missing information";
        }
	

?>
