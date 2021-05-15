<?php
     //require_once '../Controller/ReservationC.php';
  // require_once '../Model/Reservation.php';
   require_once '../config.php';
       
if(isset($_POST['Ajouter']))
    {
        
       $categoriesTable=new CategoriesTable();
       $categoriesTable->addCategoriesTable();
       
    }

   
class CategoriesTable{
     public function addCategoriesTable() {
            try {
                echo('addcategoriesTable');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO categories (ID,NB_places,Forme,Espace) 
                    VALUES (:ID,:NB_places,:Forme,:Espace)'
                );
                echo('addcategoriesTable2');
                $query->execute([
                   'ID' => $_POST['ID'],
                    'NB_places' => $_POST['NB_Places'],
                    'Forme' => $_POST['Forme'],
                    'Espace' => $_POST['Espace']   
                 /*   'ID' => 'jawhar',
                    'Nom' =>  'jawhar',
                    'Prenom' =>  'jawhar',
                    'Email' =>  'jawhar',
                    'Message' =>  'jawhar',
                    'datetemps' =>  'jawhar'*/
                ]);
               header('Location:../Views/CategorieTable.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
}

     
   

 

?>