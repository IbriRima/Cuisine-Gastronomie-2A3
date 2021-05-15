<?php
    class CarteFid    {
        protected int $id;
        protected string $points;
        protected int $userid;
        


        public function __construct($id, $points, $userid)
        
        { 
            $this->id = $id;
            $this->points= $points;
            $this->userid = $userid;

        }

        public function getId () {
            return $this->id;
        }

        public function getPoints(){
            return $this->points ;
        }

        public function getUserId(){
            return $this->userid;
        }



        public function setId($id){
            $this->id= $id;
        }

        public function setPoints($points){
            $this->points= $points;
        }

        public function setUserId($userid){
            $this->userid = $userid;
        }

        
    }