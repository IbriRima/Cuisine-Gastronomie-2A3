<?PHP
	include "../controller/TypeReclamationC.php";
	include "../controller/ReclamationC.php";


$ReclamationC=new ReclamationC();
$listeReclamation =$ReclamationC->afficherReclamation();

?>