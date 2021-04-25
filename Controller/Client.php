<?php
    require_once '../config.php';

    
    
    if(isset($_POST['submit']))
    {
        //  if($_POST['homme'])
        // $sexe='homme';
        //  else $sexe='femme';
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
        // session_start();
        // $_SESSION['search'] = "";               
        // header('Location:../Views/AfficherClients.php'); 
    }

    
    if(isset($_POST['searchbutton']))
    {
        $client=new Client();
        $client->Search();
    }


    
    
    class Client {
      
       



        public function getClient($numero) 
        {
            try {
                $pdo = getConnexion();
            
                $query = $pdo->prepare(
                    'SELECT * FROM client WHERE numero= :numero'
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

            $sql = "SELECT * from admin where numero=:numero "; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'numero' => $_POST['numero'],
                ]); 
                $result = $query->fetchAll(); 
                echo('houni');
                
                if(!$result)
                {
                    echo('famech admin');
                    try {
                        $pdo = getConnexion();
                        $query = $pdo->prepare(
                            'INSERT INTO client (numero,nom,prenom,email,adresse,mdp) 
                            VALUES (:numero,:nom,:prenom,:email,:adresse,:mdp)'
                        );
                        $query->execute([
                            'numero' => $_POST['numero'],
                            'nom' => $_POST['nom'],
                            'prenom' => $_POST['prenom'],
                            'email' => $_POST['email'],
                            'adresse' => $_POST['adresse'],
                            'mdp' => $_POST['mdp1'],
                        ]);
                        session_start();
                        $_SESSION['numero'] = $_POST['numero'];               
                         header('Location:../Views/ClientProfile.php');
        
                    } catch (PDOException $e) {
                        $e->getMessage();
                        header('Location:../Views/Register.php');
                    }

                }
                else
                {
                    
                    echo '<script>',
                    'alert("test");',
                    '</script>';        
                    header('Location:../Views/Register.php');

                }
                
            }
            catch (PDOException $e) {
                $e->getMessage();
            }          
        }

        public function updateClient() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE client SET 
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
                    'DELETE FROM client WHERE numero= :numero'
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
            $sql = "SELECT * from client where numero=:numero and mdp=:mdp"; 
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
                    session_start();
                    $_SESSION['numero'] = $_POST['numero'];               
                    header('Location:../Views/ClientProfile.php'); 
                  
                 }
                 else
                 {

                $sql = "SELECT * from admin where numero=:numero and mdp=:mdp "; 
                $db = getConnexion();
                try {
                $query = $db->prepare($sql);
                $query->execute([
                    'numero' => $_POST['numero'],
                    'mdp' => $_POST['mdp'],
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

            $stmt=$pdo->prepare("SELECT COUNT(*) FROM client");
            $stmt->execute();

            $row=$stmt->fetchColumn();

            return $row;

        }

        public function Search() {
            
            session_start();
                $_SESSION['search'] = $_POST['search'];
                header('Location:../Views/AfficherClients.php'); 
        }
        
        public function afficherClients($keyword) {
            

            if($keyword=="")
            {
                                
                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'SELECT * FROM client '
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
                        'SELECT * FROM client WHERE numero = :keyword OR prenom = :keyword OR nom = :keyword OR
                        email = :keyword OR adresse = :keyword '
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

       



        
    }

