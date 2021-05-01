<?php
    class Reservation {
        private ?int $ID = null;
        private string $Nom;
        private string $Prenom;
        private string $Email;
        private string $Message;
        private string $datetemps;
      

        public function __construct($ID, $Nom, $Prenom,$Email,$Message,$datetemps)
        
        { 
            $this->ID = $ID;
            $this->Nom= $Nom;
            $this->Prenom = $Prenom;
            $this->Email = $Email;
            $this->Message = $Message;
            $this->datetemps = $datetemps;
        }

        public function getID () {
            return $this->ID;
        }

        public function getNom(){
            return $this->Nom ;
        }

        public function getPrenom(){
            return $this->Prenom;
        }
 
        public function getEmail (){
            return $this->Email ;
        }
        public function getMessage (){
            return $this->Message ;
        }
      
        public function getDatetemps(){
            return $this->datetemps ;
        }

     




        public function setID($ID){
            $this->ID= $ID;
        }

        public function setNom($Nom){
            $this->Nom = $Nom;
        }

        public function setType ($Prenom){
            $this->Prenom = $Prenom;
        }

        public function setEmail ($Email){
            $this->Email= $Email;
        }

        public function setMessage ($Message){
            $this->Message = $Message;
        }
        public function setDatetemps ($datetemps){
            $this->datetemps= $datetemps;
        }
    }