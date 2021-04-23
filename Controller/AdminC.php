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

    
    class Admin {
       
        public function admin() {
            try {
                echo('admin');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE user SET 
                    typee = :typee WHERE numero = :numero'
                );
                $query->execute([
                    //'numero' => $_POST['numero'],
                    'numero' => '12345555',
                    'typee' => 'admin'
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
                    'SELECT * FROM user WHERE numero= :numero and typee =:typee'
                );
                $query->execute([
                    'numero' => $numero,
                    'typee' => 'admin'

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
                echo('delete');
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


       

        
    }