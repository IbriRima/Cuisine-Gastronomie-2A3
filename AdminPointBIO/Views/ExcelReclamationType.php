<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reclamations_par_Type.xls");

include "../Controller/TypeReclamationC.php";
include "../Controller/ReclamationC.php";


$ReclamationC=new ReclamationC();


$listeType =$ReclamationC->getType();  

 ?>

 <br>
 <table style="width:100%" border='1'>
 <tr>
 <tr>
    <th>Type de reclamation</th>
    <th>Nombre de reclamation</th> 
    
  </tr>
    	
    <?php
  foreach($listeType as $Reclamation)
{ 

?>
 <tr>
    		<td class="text-center"><?PHP echo $Reclamation['Type'] ?></td>
        <td class="text-center"><?PHP echo $Reclamation['NT'] ?></td>
        </tr>
    <?php
}
?>
  
 
</table>

