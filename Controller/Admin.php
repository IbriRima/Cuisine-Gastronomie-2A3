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

            $stmt=$pdo->prepare("SELECT COUNT(*) FROM admin");
            $stmt->execute();

            $row=$stmt->fetchColumn();

            return $row;


        }

       
        public function admin() {
            
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO admin (numero,nom,prenom,email,adresse,mdp) 
                    VALUES (:numero,:nom,:prenom,:email,:adresse,:mdp)'
                );
                $query->execute([
                    'numero' => $_POST['numero'],
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'email' => $_POST['email'],
                    'adresse' => $_POST['adresse'],
                    'mdp' => $_POST['mdp'],
                ]);

            } catch (PDOException $e) {
                $e->getMessage();
                header('Location:../Views/Register.php');
            }

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


            header('Location:../Views/AfficherClients.php');

        }

        public function getAdmin($numero) 
        {
            try {
                $pdo = getConnexion();
            
                $query = $pdo->prepare(
                    'SELECT * FROM admin WHERE numero= :numero '
                );
                $query->execute([
                    'numero' => $numero,

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
                    'UPDATE admin SET 
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
                echo('delete');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM admin WHERE numero= :numero'
                );
                $query->execute([
                    'numero' => $_POST['numero']
                ]);
                header('Location:../Views/Login.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function AfficherAdminsPaginer($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM admin LIMIT {$start},{$perPage}";
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
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM admin";
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