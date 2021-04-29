<?php
    class User    {
        protected int $numero;
        protected string $nom;
        protected string $prenom;
        protected string $email;
        protected string $adresse;
        protected string $mdp;
        protected string $typee;


        public function __construct($numero, $nom, $prenom,$email,$adresse,$mdp,$typee)
        
        { 
            $this->numero = $numero;
            $this->nom= $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->adresse = $adresse;
            $this->mdp = $mdp;
            $this->typee = $typee;


        }

        public function getNum () {
            return $this->numero;
        }

        public function getNom(){
            return $this->nom ;
        }

        public function getPrenom(){
            return $this->prenom;
        }
 
        public function getEmail (){
            return $this->email ;
        }
        public function getAdresse (){
            return $this->adresse ;
        }
      
        public function getMdp(){
            return $this->mdp ;
        }

        public function getType(){
            return $this->typee ;
        }

       



        public function setNumero($numero){
            $this->numero= $numero;
        }

        public function setNom($nom){
            $this->nom= $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setEmail ($email){
            $this->email = $email;
        }

        public function setAdresse ($adresse){
            $this->adresse= $adresse;
        }

        public function setMdp ($mdp){
            $this->mdp = $mdp;
        }

        public function setType ($typee){
            $this->typee = $typee;
        }
        
    }