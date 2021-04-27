<?php
    require_once '../config.php';

    echo('php');


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
                    'SELECT * FROM user WHERE numero= :numero and typee=:typee'
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
                echo('update');
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