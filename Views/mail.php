<?php


include "../Controller/ClientC.php";

$id="1";

$ClientC=new ClientC();
$ClientMail =$ClientC->getEmailClient($id) ;

foreach($ClientMail as $Client)
{


 echo $Client["email"] ;
   


}

?>









