<?php
    require_once '../config.php';

    
    
    if(isset($_POST['submit']))
    {
        //  if($_POST['homme'])
        // $sexe='homme';
        //  else $sexe='femme';
        $client=new ClientC();
        $client->addClient();
       
    }

    if(isset($_POST['submit1']))
    {
        $client=new ClientC();
        $client->deleteClient();
    }

    if(isset($_POST['submit2']))
    {
        $client=new ClientC();
        $client->updateClient();
    }

    if(isset($_POST['seconnecter']))
    {
        $client=new ClientC();
        $client->connect();
    }

    
    
    class ClientC {
        public function afficherClient() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM user WHERE typee=:typee '
                );
                $query->execute([
                    'typee' => 'client',
                ]);
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

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
                    'typee' => 'client'
                ]);
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
                    'DELETE FROM user WHERE numero= :numero'
                );
                $query->execute([
                    'numero' => $_POST['numero']
                ]);
                header('Location:../Views/Login.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

       
        public function connect() 
        {            
            $sql = "SELECT * from user where numero=:numero and mdp=:mdp"; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'numero' => $_POST['numero'],
                    'mdp' => $_POST['mdp']
                ]); 
                $result = $query->fetchAll(); 
                
                if($result) 
                 {
                    
                    $sql = "SELECT * from user where numero=:numero and mdp=:mdp and typee=:typee"; 
                    $db = getConnexion();
                    try {
                        $query = $db->prepare($sql);
                        $query->execute([
                            'numero' => $_POST['numero'],
                            'mdp' => $_POST['mdp'],
                            'typee' => 'admin'
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
                            session_start();
                            $_SESSION['numero'] = $_POST['numero'];               
                            header('Location:../Views/ClientProfile.php');  
                         }
                      
                        
                    }
                    catch (PDOException $e) {
                        $e->getMessage();
                    }

                  
                 }
                 else
                 {
                    echo '<script>',
                    'alert("leeeee");',
                    '</script>';        
                    header('Location:../Views/Login.php');

                 }
                
                
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
    }