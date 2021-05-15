<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Liste_Notes.xls");

include "../Controller/TypeReclamationC.php";
include "../Controller/ReclamationC.php";


$ReclamationC=new ReclamationC();


$listeNote =$ReclamationC->getNote();  

 ?>

 <br>
 <table style="width:100%" border='1'>
 <tr>
 <tr>
    <th>Note</th>
    <th>Frequence de la note</th> 
    
  </tr>
    	
    <?php
  foreach($listeNote as $Reclamation)
{ 

?>
 <tr>
    		<td class="text-center"><?PHP echo $Reclamation['Note'] ?></td>
        <td class="text-center"><?PHP echo $Reclamation['Nombre'] ?></td>
        </tr>
    <?php
}
?>
  
 
</table>

