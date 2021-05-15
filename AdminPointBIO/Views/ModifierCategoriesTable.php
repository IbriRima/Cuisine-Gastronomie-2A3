<?php
require_once '../config.php';
if(isset($_POST['Enregistrer']))
    {
        
        $categoriesTable=new CategoriesTable();
        $categoriesTable->updateCategoriesTable();
       
    }
class CategoriesTable{ 
 function updateCategoriesTable() {
            try {
                echo ("update1");
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE Reserve SET ID = :ID, NB_places = :NB_places, Forme = :Forme, Espace = :Espace'   
                );
                echo ("update2");
                $query->execute([
                    'ID' => $_POST['ID'],
                    'NB_places' => $_POST['NB_Places'],
                    'Forme' => $_POST['Forme'],
                    'Espace' => $_POST['Espace'],
                    
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
                //header('Location:../Views/AfficheReservation.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        } 
        }
?>
