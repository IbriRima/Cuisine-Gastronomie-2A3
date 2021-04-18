<?php
    require_once '../config.php';
    require_once '../Model/TypeReclamation.php';
    class TypeReclamationC {
        public function afficherTypeReclamation() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM TypeReclamation'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }

        }


        public function addTypeReclamation($TypeReclamation) {
            try {
               
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO TypeReclamation (Libelle,Duree_traitement_max) 
                VALUES (:Libelle,:Duree_traitement_max)'
                );
                $query->execute([
                    'Libelle' => $TypeReclamation->getLibelle(),
                    'Duree_traitement_max' => $TypeReclamation->getDuree_Max()
                    
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        function updateTypeReclamation($TypeReclamation, $id){
			try {
				$pdo = getConnexion();
				$sql="UPDATE TypeReclamation SET 
				libelle = :libelle, 
				Duree_traitement_max = :duree
				
			WHERE id_type = :id";
				$query = $pdo->prepare($sql);

				$query->bindValue(':id',$id);
				$query->bindValue(':libelle',$TypeReclamation->getLibelle());
				$query->bindValue(':duree',$TypeReclamation->getDuree_Max());
				$query->execute();
	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			
			
			} catch (PDOException $e) {
			
				die('Erreur: '.$e->getMessage());
			}
			
		}


	


		function deleteTypeReclamation($id){
			$sql="DELETE FROM TypeReclamation WHERE id_Type= :id";
			$pdo = getConnexion();
			$req=$pdo->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}











        function recupererTypeReclamation($id){
			$sql="SELECT * from TypeReclamation where id_type= $id";
			$pdo = getConnexion();
			try{
				$query=$pdo->prepare($sql);
				$query->execute();
				
				$TypeReclamation = $query->fetch(PDO::FETCH_OBJ);
				return $TypeReclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		



    }