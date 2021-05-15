<?php
    class CategoriesTable {
        private ?int $ID = null;
        private int $NB_places;
        private string $Forme;
        private string $Espace;
       

        public function __construct($ID, $NB_places, $Forme,$Espace)
        
        { 
            $this->ID = $ID;
            $this->NB_places= $NB_places;
            $this->Forme = $Forme;
            $this->Espace = $Espace;
           
        }

        public function getID () {
            return $this->ID;
        }

        public function getNB_places(){
            return $this->NB_places ;
        }

        public function getForme(){
            return $this->Forme;
        }
 
        public function getEspace (){
            return $this->Espace ;
        }
        



        public function setID($ID){
            $this->ID= $ID;
        }

        public function setNB_places($NB_places){
            $this->NB_places = $NB_places;
        }

        public function setForme ($Forme){
            $this->Forme = $Forme;
        }

        public function setEspace ($Espace){
            $this->Espace= $Espace;
        }

    }