<?php
    class plat {
        private  $Id_plat = null; //identifiant d'un plat
        private  $Nom_Plat; // nom de plat
        private  $Type_plat; //type de plat
        private  $Prix_plat; //prix de plat
        private  $Nbr_Clri_plat; // nombre de calorie
        private  $Pds_Portion_plat; // poids d'une  portion d'un plat
        private  $imageP;
        public function __construct($Nom_Plat, $Type_plat, $Prix_plat , $Nbr_Clri_plat , $Pds_Portion_plat,$imageP ) //constructeur d'un plat
        
        { 
            $this->Nom_plat = $Nom_Plat;
            $this->Type_plat= $Type_plat;
            $this->Prix_plat = $Prix_plat;
            $this->Nbr_Clri_plat = $Nbr_Clri_plat;
            $this->Pds_Portion_plat = $Pds_Portion_plat;
            $this->imageP = $imageP;
          
        }

        public function getIdplat () {
            return $this->Id_plat;
        }

        public function getNomplat(){
            return $this->Nom_plat ;
        }

        public function getTypeplat(){
            return $this->Type_plat;
        }
 
        public function getprixplat (){
            return $this->Prix_plat ;
        }
        public function getNbrClriplat () {
            return $this->Nbr_Clri_plat;
        }
        public function getPdsPortionplat () {
            return $this->Pds_Portion_plat;
        }


        public function getimageP(){
            return $this->imageP ;
        }

        public function setNomplat($Nom_Plat){
            $this->Nom_plat= $Nom_Plat;
        }

        public function setprixplat($Prix_plat){
            $this->Prix_plat = $Prix_plat;
        }

        public function setTypeplat ($Type_plat){
            $this->Type_plat = $Type_plat;
        }
        public function setNbrClriplat ($Nbr_Clri_plat){
            $this->Nbr_Clri_plat = $Nbr_Clri_plat;
        }
        public function setPdsPortionplat ($Pds_Portion_plat){
            $this->Pds_Portion_plat = $Pds_Portion_plat;
        }
        public function setimageP($imageP){
            $this->imageP = $imageP;
        }

      
    }