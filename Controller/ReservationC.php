<?php
    require_once '../config.php';
    if(isset($_POST['searchbutton']))
    {
        $reservation=new ReservationC();
        $reservation->Search();
    }

    class ReservationC {
         public function Search() {
            
            session_start();
                $_SESSION['search'] = $_POST['search'];
                header('Location:../Views/Rechercher_Table.php'); 
        }
        public function afficherReservation($keyword) {
            

            if($keyword=="")
            {
                                
                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'SELECT * FROM reserve '
                    );
                    $query->execute([
                    ]);
                    return $query->fetchAll();
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
            else
            {
                               
                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'SELECT * FROM reserve  WHERE ID=:keyword'
                    );
                    $query->execute([
                        'keyword' => $keyword,

                    ]);
                    return $query->fetchAll();

                } catch (PDOException $e) {
                    $e->getMessage();
                }

            }
           
        }
      /*  public function afficherReservation() {
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
*/
        public function getReservationByID($id) 
        {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                   'SELECT * FROM reserve WHERE ID= :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
    } 


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

       public function rechercherReservation($id) 
        {            
            $sql = "SELECT * from reserve where ID=:id"; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'id' => $Reservation->getID(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        } 
        
    
     public function countReservation()
        {
            $pdo = getConnexion();

            $stmt=$pdo->prepare("SELECT COUNT(*) FROM reserve");
            $stmt->execute();

            $row=$stmt->fetchColumn();

            return $row;

        }
  }
