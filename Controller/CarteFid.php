<?php
    require_once '../config.php';

    

    if(isset($_POST['edit']))
    {
        $carte=new CarteFid();
        $carte->updateCarte();
    }
    
    if(isset($_POST['searchbutton']))
    {
        $carte=new CarteFid();
        $carte->Search();
    }


    
    
    class CarteFid {
     

        public function updateCarte() {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE cartefid SET 
                    points = :points  WHERE id = :id'
                );
                $query->execute([
                    'id' => $_POST['id'],
                    'points' => $_POST['points'],
                   
                ]);
                header('Location:../Views/AfficherCartes.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        public function Search() {
            
            session_start();
                $_SESSION['search'] = $_POST['search'];
                header('Location:../Views/AfficherCartes.php'); 
        }
        
        public function afficherCartes($keyword) {
            

            if($keyword=="")
            {
                                
                try {
                    $pdo = getConnexion();
                    $query = $pdo->prepare(
                        'SELECT * FROM cartefid '
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
                        'SELECT * FROM cartefid  WHERE id=:keyword OR userID=:keyword OR points=:keyword'
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

