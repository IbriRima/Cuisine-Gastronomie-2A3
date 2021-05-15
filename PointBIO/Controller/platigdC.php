<?php
    require_once '../config.php';
    class platigdC {
        public function afficherPlatIgd($Id_Plat) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT Id_Igd FROM platigd where Id_plat= :id'
                );
                $query->execute([
                   
                    'id' => $Id_Plat
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       
    


        public function addplatIgd($platigd) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO platigd (Id_Igd, Id_plat) 
                VALUES (:Id_Igd,:Id_plat)'
                );
                $query->execute([
                    'Id_Igd' => $platigd->getIdIgd(),
                    'Id_plat' => $platigd->getIdplat(),
                    
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateIgd($ingredient, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE ingredient SET Nom_Igd = :Nom_Igd, type_Igd = :type_Igd, Prix_Igd = :Prix_Igd WHERE Id_Igd = :id'
                );
                $query->execute([
                    'Nom_Igd' => $ingredient->getNomIgd(),
                    'type_Igd' => $ingredient->getTypeIgd(),
                    'Prix_Igd' => $ingredient->getprixIgd(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteIgd($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM ingredient WHERE Id_Igd= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherIgd($type) 
        {            
            $sql = "SELECT * from ingredient where Type_Igd=:type"; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'type' => $type
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function recupererIgd($id){
			$sql="SELECT * from ingredient where Id_Igd=$id";
			$pdo = getConnexion();
			try{
				$query=$pdo->prepare($sql);
				$query->execute();
				
				$ingredient = $query->fetch(PDO::FETCH_OBJ);
				return $ingredient;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        
    }