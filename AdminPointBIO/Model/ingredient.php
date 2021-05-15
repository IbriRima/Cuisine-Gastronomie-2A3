
<?php
    class ingredient {
        private $Id_Igd = null;
        private $Nom_Igd;
        private  $Type_Igd;
        private  $Prix_Igd;

        public function __construct($Nom_Igd, $Type_Igd, $Prix_Igd)
        
        { 
            $this->Nom_Igd = $Nom_Igd;
            $this->Type_Igd= $Type_Igd;
            $this->Prix_Igd = $Prix_Igd;
          
        }

        public function getIdIgd () {
            return $this->Id_Igd;
        }

        public function getNomIgd(){
            return $this->Nom_Igd ;
        }

        public function getTypeIgd(){
            return $this->Type_Igd;
        }
 
        public function getprixIgd (){
            return $this->Prix_Igd ;
        }
     



        public function setNomIgd($Nom_Igd){
            $this->Nom_Igd= $Nom_Igd;
        }

        public function setprixIgd($Prix_Igd){
            $this->Prix_Igd = $Prix_Igd;
        }

        public function setTypeIgd ($Type_Igd){
            $this->Type_Igd = $Type_Igd;
        }

      
    }