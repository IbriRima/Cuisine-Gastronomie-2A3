<?PHP
	include "../Controller/CategoriesTableC.php";

	$CategoriesTableC=new CategoriesTableC();

	if (isset($_POST["ID"]))
		{
			$CategoriesTableC->deleteCategoriesTable($_POST["ID"]);
			header('Location:AfficherCategoriesTable.php');
		}
?>
