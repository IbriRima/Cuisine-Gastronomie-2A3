<?php
    require_once '../config.php';



    if(isset($_POST['submit']))
    {
        $admin=new Admin();
        $admin->addAdmin();
       
    }

    if(isset($_POST['submit2']))
    {
        echo('update');
        $admin=new Admin();
        $admin->updateAdmin();
    }

    if(isset($_POST['submit1']))
    {
        $admin=new Admin();
        $admin->deleteAdmin();
    }

    
    if(isset($_POST['admin']))
    {
        $admin=new Admin();
        $admin->admin();
    }

    if(isset($_POST['emailbutton']))
    {
        session_start();
        $_SESSION['email'] = $_POST['email'];
        header('Location:../Views/EmailClient.php');
    }

    if(isset($_POST['seconnecter']))
    {
        
        $admin=new Admin();
        $admin->connect();
         
    }
    
    class Admin {

        public function countAdmin()
        {   
            $pdo = getConnexion();

            $stmt=$pdo->prepare("SELECT COUNT(*) FROM user WHERE typee=:typee");
            $stmt->execute(
                [
                    'typee' => "admin",
                ]
              
            );

            $row=$stmt->fetchColumn();

            return $row;


        }


        public function addAdmin() {

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
                    'mdp' => password_hash( $_POST['mdp1'],PASSWORD_DEFAULT),
                    'typee' => "admin",
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

                setcookie ("member_login2","",time()+ (86400 * 1), "/");
                setcookie ("member_password2","",time()+ (86400 * 1), "/");

                // $GLOBALS['id']=$_POST['email'];

                session_start();
                $_SESSION['numero'] = $_POST['email'];               
                 header('Location:../Views/AdminProfile.php');

            } catch (PDOException $e) {
                $e->getMessage();
                //header('Location:../Views/RegisterAdmin.php');
                $error="";
                header("Location:../Views/RegisterAdmin.php?error=".$error);
            }  
        }

       
        public function admin() {
            
            try {
                echo('update');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE user SET 
                    typee=:typee  WHERE numero = :numero'
                );
                $query->execute([
                    'numero' => $_POST['numero'],
                    'typee' => "admin",
                   
                ]);
                header('Location:../Views/AfficherClients.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }


        }

        public function getAdmin($numero) 
        {
            try {
                $pdo = getConnexion();
            
                $query = $pdo->prepare(
                    'SELECT * FROM user WHERE email= :numero and typee=:typee'
                );
                $query->execute([
                    'numero' => $numero,
                    'typee' => "admin",

                ]);

                return $query->fetchAll();

            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateAdmin() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE user SET 
                    nom = :nom, prenom = :prenom, adresse = :adresse, 
                    numero = :numero WHERE  email= :email'
                );
                $query->execute([
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'email' => $_POST['email'],
                    'adresse' => $_POST['adresse'],
                    'numero' => $_POST['numero'],
                ]);
                echo('updated');
                header('Location:../Views/AdminProfile.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteAdmin() {
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
                    echo('2');

                } catch (PDOException $e) {
                    $e->getMessage();
                    echo($e);
                }


                header('Location:../Views/index.php');
            } catch (PDOException $e) {
                $e->getMessage();
                echo($e);

            }
        }


        public function connect() 
        {            
            $sql = "SELECT * from user where email=:email  and typee=:typee"; 
            $db = getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'email' => $_POST['numero'],
                    'typee' => "admin"
                ]); 
                $result = $query->fetchAll(); 

                if(!$result)
                {
                    $error="";

                    header("Location:../Views/index.php?error=".$error);

                }

                $password=$_POST['mdp'];

                foreach($result as $admin)
                {

                    if( password_verify( $password, $admin['mdp'] )) 
                    {

                    if(!empty($_POST["remember"]))   
                    {  
                        setcookie ("member_login2",$_POST["numero"],time()+ (86400 * 1), "/");
                        setcookie ("member_password2",$_POST["mdp"],time()+ (86400 * 1), "/");
                    } 
                    else
                    {
                        setcookie ("member_login2","",time()+(86400 * 1), "/");
                        setcookie ("member_password2","",time() + (86400 * 1), "/");
                    }


                    // $GLOBALS['id']=$_POST['numero'];

                    session_start();
                    $_SESSION['numero'] = $_POST['numero'];               
                    header('Location:../Views/AdminProfile.php'); 
                  
                 }
                 else
                 {

                    $error="";

                    header("Location:../Views/index.php?error=".$error);
            
                 }
               
                }

            }

                catch (PDOException $e) {
                $e->getMessage();
                }
            
                
        
            
        }












        public function AfficherAdminsPaginer($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM user WHERE typee='admin' LIMIT {$start},{$perPage}";
            $db = getConnexion();
            try {
                $liste = $db->prepare($sql);
                $liste->execute();
                $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
    
        public function calcTotalRows($perPage)
        {
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM user WHERE typee='admin'";
            $db = getConnexion();
            try {
    
                $liste = $db->query($sql);
                $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                $pages = ceil($total / $perPage);
                return $pages;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
       

        
    }