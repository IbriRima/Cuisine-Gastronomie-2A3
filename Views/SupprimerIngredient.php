<?PHP
	include "../Controller/ingredientC.php";

    $ingredientC = new ingredientC();


	
if (isset($_POST["Id_Igd"])){
	$ingredientC->deleteIgd($_POST["Id_Igd"]);
header('Location:AjouterIngredient.php');
}


?>