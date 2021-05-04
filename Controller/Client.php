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
                    'SELECT * FROM user WHERE email= :email'
                );
                $query->execute([
                    'email' => $numero,

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
                        'userID' => $_POST['email'],
                    ]);
                   
    
                } catch (PDOException $e) {
                    $e->getMessage();
                }

                session_start();
                $_SESSION['numero'] = $_POST['email'];               
                 header('Location:../Views/ClientProfile.php');

            } catch (PDOException $e) {
                $e->getMessage();
                //header('Location:../Views/Register.php');
                $error="";
                header("Location:../Views/Register.php?error=".$error);
            }  
        }

        public function updateClient() {

                    try {
                        $pdo = getConnexion();
                        $query = $pdo->prepare(
                            'UPDATE user SET 
                            nom = :nom, prenom = :prenom, adresse = :adresse, 
                            numero = :numero WHERE email= :email'
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
                    'DELETE FROM cartefid WHERE userID= :email'
                );
                $query->execute([
                    'email' => $_POST['email']
                ]);

                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'DELETE FROM user WHERE email= :email'
                    );
                    $query->execute([
                        'email' => $_POST['email']
                    ]);

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
            $sql = "SELECT * from user where email=:email and mdp=:mdp and typee=:typee"; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'email' => $_POST['numero'],
                    'mdp' => $_POST['mdp'],
                    'typee' => "client"
                ]); 
                $result = $query->fetchAll(); 
                
                if($result) 
                 {
                    if(!empty($_POST["remember"]))   
                    {  
                        setcookie ("member_login",$_POST["numero"],time()+ (86400 * 1), "/");
                        setcookie ("member_password",$_POST["mdp"],time()+ (86400 * 1), "/");
                    } 
                    else
                    {
                        setcookie ("member_login","",time()+(86400 * 1), "/");
                        setcookie ("member_password","",time() + (86400 * 1), "/");
                    }

                    session_start();
                    $_SESSION['numero'] = $_POST['numero'];               
                    header('Location:../Views/ClientProfile.php'); 
                  
                 }
                 else
                 {

                    $error="";

                    header("Location:../Views/Login.php?error=".$error);
            
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

