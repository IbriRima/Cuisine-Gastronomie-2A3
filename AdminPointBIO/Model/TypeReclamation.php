<?php
    class TypeReclamation {
        private ?int $IdType = null;
        private string $Libelle;
        private int $Duree_Max;

        public function __construct($Libelle, $Duree_Max)
        
        { 
            $this->Libelle = $Libelle;
            $this->Duree_Max = $Duree_Max;
       
        }

        public function getIdType () {
            return $this->IdLiv;
        }

        public function getLibelle (){
            return $this->Libelle ;
        }

        public function getDuree_Max (){
            return $this->Duree_Max ;
        }





        public function setDuree_Max ($Duree_Max){
            $this->Duree_Max = $Duree_Max;
        }

        public function setLibelle ($libelle){
            $this->Libelle = $Libelle;
        }



       
    }