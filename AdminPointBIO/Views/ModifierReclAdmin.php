
<?php
	include "../Controller/ReclamationC.php";
	include "../Model/Reclamation.php";
	include "../Controller/Client.php";
	$ReclamationC = new ReclamationC();
   
            if (
              isset($_POST['Id_Recl']) && 
              isset($_POST['Etat_traitement']) &&
              isset($_POST['Id_client'])
          ){
          if (
           
                  !empty($_POST['Id_Recl']) && 
                  !empty($_POST['Etat_traitement']) &&
                  !empty($_POST['Id_client'])
              ) {
		
                
if ($_POST['Etat_traitement']=="Traitee")
{
	$Etat="Non traitee";
    
    header('Location:AfficherReclamation.php'); 
}
else if ($_POST['Etat_traitement']=="Non")
{   
	$Etat="Traitee";
    $id=$_POST['Id_client'];
    $idR=$_POST['Id_Recl'];
    $Client=new Client();
    $listeClient =$Client->getClient($id) ;
    
    foreach($listeClient as $user)
        
    {
       $email= $user["email"] ;
 
    
    }
    ini_set('SMTP','smtp.topnet.tn');
    
    $recipient = $email;
    $subject = 'Traitement de votre réclamation';
    $message = "Votre réclamation d'identifiant $idR a été traitée. Merci pour votre compréhension!";
    $sender = "From: PointBio@gmail.com";
    if(mail($recipient, $subject, $message, $sender))
    {
        $message="Un email de notification a été envoyé à $recipient";

   
    }

    	   
			echo '<script type="text/javascript">';
			echo 'alert("L email d alerte a bien été envoyé au client")';
			echo '</script>';
			echo ("<script>location.href='./AfficherReclamation.php'</script>");

}
         
$ReclamationC->updateEtatReclamation($Etat,(int)$_POST["Id_Recl"]);     
           
              }
              else
              $error = "Missing information";

		
        }
      
?>



