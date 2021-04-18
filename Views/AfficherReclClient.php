<?PHP
	include "../controller/TypeReclamationC.php";
	include "../controller/ReclamationC.php";


$ReclamationC=new ReclamationC();
$listeReclamationClient =$ReclamationC->getReclamationById_Client();
?>