<?php
    require_once '../config.php';
    class platC {
        public function afficherplat() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM plat'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       
    


        public function addplat($plat) {
            try { 
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO plat (Nom_Plat, Type_plat, Prix_plat ,Nbr_Clri_plat ,Pds_Portion_plat,imageP) 
                VALUES (:Nom_plat,:Type_plat,:Prix_plat, :Nbr_Clri_plat , :Pds_Portion_plat , :imageP)'
                );
                $query->execute([
                    'Nom_plat' => $plat->getNomplat(),
                    'Type_plat' => $plat->getTypeplat(),
                    'Prix_plat' => $plat->getprixplat(),
                    'Nbr_Clri_plat'=> $plat->getNbrClriplat(),
                    'Pds_Portion_plat' => $plat->getPdsPortionplat(),
                    'imageP' => $plat->getimageP(),

                    ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateplat($plat, $id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE plat SET Nom_plat = :Nom_plat, Type_plat = :Type_plat, Prix_plat = :Prix_plat, Nbr_Clri_plat = :Nbr_Clri_plat, Pds_Portion_plat = :Pds_Portion_plat,imageP= :imageP  WHERE Id_plat = :id'
                );
                $query->execute([
                    'Nom_plat' => $plat->getNomplat(),
                    'Type_plat' => $plat->getTypeplat(),
                    'Prix_plat' => $plat->getprixplat(),
                    'Nbr_Clri_plat'=> $plat->getNbrClriplat(),
                    'Pds_Portion_plat' => $plat->getPdsPortionplat(),
                    'imageP' => $plat->getimageP(),
                    'id' => $id
                ]);
    
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteplat($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM plat WHERE Id_plat= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        function recupererPlat($id){
			$sql="SELECT * from plat where Id_plat= $id";
			$pdo = getConnexion();
			try{
				$query=$pdo->prepare($sql);
				$query->execute();
				
				$plat = $query->fetch(PDO::FETCH_OBJ);
				return $plat;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        public function rechercherplat($type) 
        {            
            $sql = "SELECT * from plat where Type_plat=:type"; 
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


        public function stattype() 
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                'SELECT Type_plat, COUNT(*) as "Nombre" FROM plat GROUP BY Type_plat'
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
}
        
    }