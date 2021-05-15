<?php
    require_once '../config.php';
    class ReclamationC {
        public function afficherReclamation() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM Reclamation'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getReclamationById_Client($id) 
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
           
               
            } catch (PDOException $e) {
                $e->getMessage();
            }
         
      
        }


        public function updateEtatReclamation($Etat_traitement, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE Reclamation SET  Etat_traitement=:Etat WHERE id_Recl = :id'
                );
                $query->execute([
             
                    'Etat' => $Etat_traitement,
                    'id' => $id
                ]);
              
              

      
        
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        function recupererReclamation($id){
			$sql="SELECT * from Reclamation where Id_Recl= $id";
			$pdo = getConnexion();
			try{
				$query=$pdo->prepare($sql);
				$query->execute();
				
				$Reclamation = $query->fetch(PDO::FETCH_OBJ);
				return $Reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

        
        public function deleteReclamation($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM Reclamation WHERE Id_Recl= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function rechercherReclamation($id) 
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


  
        public function getEmailClient($id) 
        {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT email FROM usre WHERE numero= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
    }

    public function NonTraitee()
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                '  SELECT Etat_traitement
                FROM reclamation
                WHERE Etat_traitement="Non traitee"
            '
            );
            $query->execute();
           return $query->rowCount();
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

    public function Traitee()
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                '  SELECT Etat_traitement
                FROM reclamation
                WHERE Etat_traitement="Traitee"
            '
            );
            $query->execute();
           return $query->rowCount();
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }
  
    

    public function getNote() 
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'SELECT Note, COUNT(*) as "Nombre" FROM reclamation GROUP BY Note'
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
}




public function getType() 
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'SELECT Type, COUNT(*) as "NT" FROM reclamation GROUP BY Type'
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
}

    }
    ?>