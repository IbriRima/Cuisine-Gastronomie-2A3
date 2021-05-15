<?php
    class Reclamation {
        private ?int $IdRecl = null;
        private string $Proposition;
        private string $Description;
        private string $Type;
        private string $Etat_traitement;
        private float $Note;
        private string $Id_client;

        public function __construct($Proposition, $Description, $Type,$Etat_traitement,$Note,$Id_client)
        
        { 
            $this->Proposition = $Proposition;
            $this->Description= $Description;
            $this->Type = $Type;
            $this->Etat_traitement = $Etat_traitement;
            $this->Note = $Note;
            $this->Id_client = $Id_client;
        }

        public function getIdRecl () {
            return $this->IdRecl;
        }

        public function getProposition(){
            return $this->Proposition ;
        }

        public function getDescription(){
            return $this->Description;
        }
 
        public function getType (){
            return $this->Type ;
        }
        public function getEtat_traitement (){
            return $this->Etat_traitement ;
        }
      
        public function getNote(){
            return $this->Note ;
        }

        public function getId_client(){
            return $this->Id_client ;
        }




        public function setProposition($Proposition){
            $this->Proposition= $Proposition;
        }

        public function setDescription($Description){
            $this->Description = $Description;
        }

        public function setType ($Type){
            $this->Type = $Type;
        }

        public function setEtat_traitement ($Etat_traitement){
            $this->Etat_traitement= $Etat_traitement;
        }

        public function setNote ($Note){
            $this->Note = $Note;
        }
        public function setId_client ($Id_client){
            $this->Id_client= $Id_client;
        }
    }