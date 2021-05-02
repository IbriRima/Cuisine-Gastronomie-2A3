<?PHP
	 require_once '../Controller/platigdC.php';

      require_once '../Model/platigd.php';


	
    if (isset($_POST["Id_Igd"])&& isset($_POST["Id_plat"]))
    {

      {
       $Id_Igd=$_POST['Id_Igd'];
       $Id_plat=$_POST['Id_plat'];
     
      

       $platigd = new platigd( $Id_Igd,$Id_plat);

       $platigdC = new platigdC();      
        $platigdC->addplatIgd($platigd);
       } 
  
   }
    else
     $error = "Missing information";

?>