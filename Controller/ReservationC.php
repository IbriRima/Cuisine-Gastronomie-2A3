<?php
    require_once '../config.php';
    class ReservationC {
        public function afficherReservation() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM reserve'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

     /*   public function getReclamationById_Client($id) 
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
    } */


        public function addReservation($reserve) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO resere (Nom,Prénom,email,Message,date&temps) 
                VALUES (:Nom,:Prénom,:email,:Message,:date&temps)'
                );
                $query->execute([
                    'Nom' => $reserve->getNom(),
                    'Prénom' => $reserve->getPrénom(),
                    'email' => $reserve->getemail(),
                    'Message' => $reserve->getMessage(),
                    'date&temps' => $reserve->getdate&temps(),
                    
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       public function updateReservation($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE Reserve SET ID = :ID, Nom = :Nom, Prenom = :Prenom, Email = :Email, Message= :Message, datetemps = :datetemps  WHERE ID = :id'
                );
                $query->execute([
                    'ID' => $ID,       
                    'Nom' => $Nom,
                    'Prenom' => $Prenom,
                    'Email' => $Email,
                    'Message' => $Message,
                    'datetemps' => $datetemps,
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        } 

        public function deleteReservation($id) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM reserve WHERE ID= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

      /*  public function rechercherReclamation($id) 
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
        } */
        
    } 