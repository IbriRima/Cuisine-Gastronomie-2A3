<?php
    class Offres {
        private ?int $Id_offre = null;
        private int $Valeur;
        private int $id_produit;

        public function __construct($Valeur,$id_produit)
        
        { 
           // $this->Id_offre = $Id_offre;
            $this->Valeur = $Valeur;
            $this->id_produit = $id_produit;

       
        }

        public function getIdoffre () {
            return $this->Id_offre;
        }

        public function getValeur (){
            return $this->Valeur ;
        }

        public function getIdproduit () {
            return $this->id_produit;
        }


       





        public function setIdoffre ($Id_offre){
            $this->Id_offre = $Id_offre;
        }

        public function setValeur ($Valeur){
            $this->Valeur = $Valeur;
        }

        public function setIdproduit ($id_produit){
            $this->id_produit = $id_produit;
        }




       
    }