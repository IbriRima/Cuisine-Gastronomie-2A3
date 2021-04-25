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

   /*     public function getReclamationById_Client($id) 
        {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM Reclamation WHERE Id_client= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
    }
*/

        public function addReclamation($Reclamation) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO Reclamation (Description,Proposition,Note,Type,Etat_traitement,Id_client) 
                VALUES (:Description,:Proposition,:Note,:Type,:Etat_traitement, :Id_client)'
                );
                $query->execute([
                    'Description' => $Reclamation->getDescription(),
                    'Proposition' => $Reclamation->getProposition(),
                    'Note' => $Reclamation->getNote(),
                    'Type' => $Reclamation->getType(),
                    'Etat_traitement' => $Reclamation->getEtat_traitement(),
                    'Id_client' => $Reclamation->getId_client()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateReclamation($Reclamation, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE Reclamation SET Description = :Description, Proposition = :Proposition, Note = :Note, Type= :Type, Etat_traitement=:Etat_traitement WHERE id_Recl = :id'
                );
                $query->execute([
                    'Description' => $Reclamation->getDescription(),       
                    'Proposition' => $Reclamation->getProposition(),
                    'Note' => $Reclamation->getNote(),
                    'Type' => $Reclamation->getType(),
                    'Etat_traitement' => $Reclamation->getEtat_traitement(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
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

 /*       public function rechercherReclamation($id) 
        {            
            $sql = "SELECT * from Reclamation where id_Recl=:id"; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'id' => $Reclamation->getIdRecl(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        */
    }
    