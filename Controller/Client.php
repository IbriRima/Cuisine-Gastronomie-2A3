<?php
    require_once '../config.php';

    
    
    if(isset($_POST['submit']))
    {
        $client=new Client();
        $client->addClient();
       
    }

    if(isset($_POST['submit1']))
    {
        $client=new Client();
        $client->deleteClient();
    }

    if(isset($_POST['submit2']))
    {
        $client=new Client();
        $client->updateClient();
    }

    if(isset($_POST['seconnecter']))
    {
        $client=new Client();
        $client->connect();
         
    }

    
    

    
    
    class Client {
      

        public function getClient($numero) 
        {
            try {
                $pdo = getConnexion();
            
                $query = $pdo->prepare(
                    'SELECT * FROM user WHERE numero= :numero'
                );
                $query->execute([
                    'numero' => $numero,

                ]);

                return $query->fetchAll();

            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        public function addClient() {

            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO user (numero,nom,prenom,email,adresse,mdp,typee) 
                    VALUES (:numero,:nom,:prenom,:email,:adresse,:mdp,:typee)'
                );
                $query->execute([
                    'numero' => $_POST['numero'],
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'email' => $_POST['email'],
                    'adresse' => $_POST['adresse'],
                    'mdp' => $_POST['mdp1'],
                    'typee' => "client",
                ]);

                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'INSERT INTO cartefid (points,userID) 
                        VALUES (:points,:userID)'
                    );
                    $query->execute([
                        'points' => 0,
                        'userID' => $_POST['numero'],
                    ]);
                   
    
                } catch (PDOException $e) {
                    $e->getMessage();
                }

                session_start();
                $_SESSION['numero'] = $_POST['numero'];               
                 header('Location:../Views/ClientProfile.php');

            } catch (PDOException $e) {
                $e->getMessage();
                header('Location:../Views/Register.php');
            }  
        }

        public function updateClient() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE user SET 
                    nom = :nom, prenom = :prenom, adresse = :adresse, 
                    email= :email WHERE numero = :numero'
                );
                $query->execute([
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'email' => $_POST['email'],
                    'adresse' => $_POST['adresse'],
                    'numero' => $_POST['numero'],
                ]);
                header('Location:../Views/ClientProfile.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteClient() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM cartefid WHERE userID= :numero'
                );
                $query->execute([
                    'numero' => $_POST['numero']
                ]);
                echo('1');

                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'DELETE FROM user WHERE numero= :numero'
                    );
                    $query->execute([
                        'numero' => $_POST['numero']
                    ]);
                    echo('2');

                } catch (PDOException $e) {
                    $e->getMessage();
                    echo($e);
                }


                header('Location:../Views/Login.php');
            } catch (PDOException $e) {
                $e->getMessage();
                echo($e);

            }
        }

       
        public function connect() 
        {            
            $sql = "SELECT * from user where numero=:numero and mdp=:mdp and typee=:typee"; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'numero' => $_POST['numero'],
                    'mdp' => $_POST['mdp'],
                    'typee' => "client"
                ]); 
                $result = $query->fetchAll(); 
                
                if($result) 
                 {
                    session_start();
                    $_SESSION['numero'] = $_POST['numero'];               
                    header('Location:../Views/ClientProfile.php'); 
                  
                 }
                 else
                 {

                $sql = "SELECT * from user where numero=:numero and mdp=:mdp and typee=:typee"; 
                $db = getConnexion();
                try {
                $query = $db->prepare($sql);
                $query->execute([
                    'numero' => $_POST['numero'],
                    'mdp' => $_POST['mdp'],
                    'typee' => "admin"

                ]); 
                $result = $query->fetchAll(); 
                
                if($result) 
                 {
                    session_start();
                    $_SESSION['numero'] = $_POST['numero'];               
                    header('Location:../Views/AdminProfile.php');                            
                 }
                 else
                 {
                
                    echo '<script>',
                    'alert("test");',
                    '</script>';        
                    header('Location:../Views/Login.php');

                 }
                 }
            
                catch (PDOException $e) {
                $e->getMessage();
                }
                }
                
            
            }    
            catch (PDOException $e) {
                $e->getMessage();  
            }

            
        }

        public function countClient()
        {
            $pdo = getConnexion();

            $stmt=$pdo->prepare("SELECT COUNT(*) FROM user WHERE typee=:typee");
            $stmt->execute(
                [
                    'typee' => "client"
                ]
            );

            $row=$stmt->fetchColumn();

            return $row;

        }

       
        
        public function afficherClients() {
            
                
                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'SELECT * FROM user WHERE typee=:typee '
                    );
                    $query->execute([
                        'typee' => "client"
                    ]);
                    return $query->fetchAll();
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            
            
           
        }

        public function afficherUtilisateurs() {
            
                
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM user '
                );
                $query->execute([
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        
        
       
    }

       



        
    }

