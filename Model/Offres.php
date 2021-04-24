<?php
    class Offres {
        private ?int $Id_offre = null;
        private int $Valeur;

        public function __construct($Valeur)
        
        { 
           // $this->Id_offre = $Id_offre;
            $this->Valeur = $Valeur;
       
        }

        public function getIdoffre () {
            return $this->Id_offre;
        }

        public function getValeur (){
            return $this->Valeur ;
        }

       





        public function setIdoffre ($Id_offre){
            $this->Id_offre = $Id_offre;
        }

        public function setValeur ($Valeur){
            $this->Valeur = $Valeur;
        }



       
    }