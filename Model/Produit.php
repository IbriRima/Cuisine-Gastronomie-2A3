<?php
    class Produit {
        private ?int $Id_produit = null;
        private string $Nom_produit;
        private int $Quantité_dans_le_stock;
        private int $Prix_de_vente;

        public function __construct($Nom_produit,$Quantité_dans_le_stock,$Prix_de_vente)
        
        { 
           $this->Nom_produit= $Nom_produit;
           $this->Quantité_dans_le_stock = $Quantité_dans_le_stock;
           $this->Prix_de_vente = $Prix_de_vente;
          
        }

        public function getIdproduit() {
            return $this->Id_produit;
           }

           public function getNomproduit(){
            return $this->Nom_produit ;
        }

        public function getQuantitédanslestock(){
            return $this->Quantité_dans_le_stock;
        }
 
        public function getPrixdevente (){
            return $this->Prix_de_vente ;
        }





        public function setNomproduit($Nom_produit){
            $this->Nom_produit = $Nom_produit;
        }

        public function setQuantitédanslestock ($Quantité_dans_le_stock){
            $this->Quantité_dans_le_stock = $Quantité_dans_le_stock;
        }

        public function setPrixdevente ($Prix_de_vente){
            $this->Prix_de_vente= $Prix_de_vente;
        }



       
    }
