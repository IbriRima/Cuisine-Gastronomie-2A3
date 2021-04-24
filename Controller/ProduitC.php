<?php
    require_once '../config.php';

    class ProduitC {
        public function afficherProduit() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM Produit'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }

        }


        public function addProduit($Produit) {
            try {
               
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO Produit (Nom_produit,Quantité_dans_le_stock,Prix_de_vente) 
                VALUES (:Nom,:Quantite,:Prix)'
                );
                $query->execute([
                    'Nom' => $Produit->getNomproduit(),
                    'Quantite' => $Produit->getQuantitédanslestock(),
                    'Prix' => $Produit->getPrixdevente()

                    
                ]);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        function updateProduit($Produit, $id){
			try {
				$pdo = getConnexion();
				$sql="UPDATE Produit SET 
				Nom_produit= :Nom,
                Quantité_dans_le_stock= :Quantite,
                Prix_de_vente= :Prix
				
			WHERE Id_produit = :id";
				$query = $pdo->prepare($sql);

				$query->bindValue(':id',$id);
				$query->bindValue(':Nom',$Produit->getNomproduit());
				$query->bindValue(':Quantite',$Produit->getQuantitédanslestock());
                $query->bindValue(':Prix',$Produit->getPrixdevente());
				$query->execute();
	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			
			} catch (PDOException $e) {
			
				die('Erreur: '.$e->getMessage());
			}
			
		}

	


		function deleteProduit($id){
			$sql="DELETE FROM Produit WHERE id_produit= :id";
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











     /*   function recupererTypeReclamation($id){
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



    } */

}