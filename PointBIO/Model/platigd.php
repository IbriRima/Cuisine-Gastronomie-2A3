<?php
    class platigd {
        private  $Id_plat ; //identifiant d'un plat
        private $Id_Igd ;


        public function __construct($Id_plat,$Id_Igd ) //constructeur d'un plat
        
        { 
            $this->Id_plat = $Id_plat;
            $this->Id_Igd= $Id_Igd;
           
          
        }

        public function getIdplat () {
            return $this->Id_plat;
        }

        public function getIdIgd () {
            return $this->Id_Igd;
        }

        public function setIDIgd($Id_Igd){
            $this->Id_Igd= $Id_Igd;
        }

        public function setIdPlat($Id_plat){
            $this->Id_plat = $Id_plat;
        }

      
      
    }