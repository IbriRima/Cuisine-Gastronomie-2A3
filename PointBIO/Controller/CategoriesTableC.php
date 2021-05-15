<?php
    require_once '../config.php';
    class CategoriesTableC {
        public function afficherCategoriesTable() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM categories'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
       
          public function countCategoriesTable()
        {   
            $pdo = getConnexion();

            $stmt=$pdo->prepare("SELECT COUNT(*) FROM categories");
            $stmt->execute();

            $row=$stmt->fetchColumn();

            return $row;


        }

 
 function updateCategoriesTable() {
            try {
                echo ("update1");
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE categories SET ID = :ID, NB_places = :NB_places, Forme = :Forme, Espace = :Espace'   
                );
                echo ("update2");
                $query->execute([
                    'ID' => $_POST['ID'],
                    'NB_places' => $_POST['NB_Places'],
                    'Forme' => $_POST['Forme'],
                    'Espace' => $_POST['Espace'],
                    
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
                header('Location:../Views/afficherCategoriesTable.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        
        }

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
           
                ]);
               header('Location:../Views/CategorieTable.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteCategoriesTable($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM categories WHERE ID= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


       
    }
    