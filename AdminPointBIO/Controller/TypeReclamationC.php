<?php
    require_once '../config.php';

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

        function updateTypeReclamation($Duree, $id){
			try {
				$pdo = getConnexion();
				$sql="UPDATE TypeReclamation SET 
			
				Duree_traitement_max = :duree
				
			WHERE id_type = :id";
				$query = $pdo->prepare($sql);

				$query->bindValue(':id',$id);
		
				$query->bindValue(':duree',$Duree);
				$query->execute();
               
               
			
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
			catch (Exception $e)
            { 
                echo '<script type="text/javascript">';
                echo 'alert("Ce type de réclamation ne peut pas etre supprimé!\nIl y a déjà des réclamations de ce type.")';
                echo '</script>';
                echo ("<script>location.href='AjouterTypeReclamation.php'</script>");
            
                
                
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
		



        public function TypeReclamation() 
        {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT Libelle FROM TypeReclamation'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
    }



    }