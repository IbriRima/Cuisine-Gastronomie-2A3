<?php
// ajouut
     //require_once '../Controller/ReservationC.php';
  // require_once '../Model/Reservation.php';
   require_once '../config.php';
       
if(isset($_POST['Réserver']))
    {
        
        $reservation=new Reservation();
        $reservation->addReservation();
       
    }

   
class Reservation{
     public function addReservation() {
            try {
                echo('addreservation');
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO reserve (ID,Nom,Prenom,Email,Message,datetemps) 
                    VALUES (:ID,:Nom,:Prenom,:Email,:Message,:datetemps)'
                );
                echo('addreservation2');
                $query->execute([
                   'ID' => $_POST['ID'],
                    'Nom' => $_POST['Nom'],
                    'Prenom' => $_POST['Prénom'],
                    'Email' => $_POST['email'],
                    'Message' => $_POST['message'],
                    'datetemps' => $_POST['datetemps'] 
                 /*   'ID' => 'jawhar',
                    'Nom' =>  'jawhar',
                    'Prenom' =>  'jawhar',
                    'Email' =>  'jawhar',
                    'Message' =>  'jawhar',
                    'datetemps' =>  'jawhar'*/
                ]);
                header('Location:../Views/CategorieTable.php');
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
}

     
   

 

?>