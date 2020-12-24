<?php

class titulaire {
    private $_nom ;
    private $_prenom ;
    private $_date ;
    private $_ville;
    private $_gestion;
    

    public function  __construct($nom, $prenom, $date, $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_date = $date;
        $this->_ville = $ville;
        $this->_gestion = [];
       
    }
    //getter (accesseur) & setter (mutateur)

    public function getNom(){
        return $this->_nom;
    }
    public function setNom($nom){
        $this->_nom = $nom;
        return $this;
    }
    
    public function getPrenom() {
        return $this->_prenom;
    }
    public function setPrenom($prenom) {
        $this->_prenom= $prenom;
        return $this;
    }

    public function getDate(){
        return $this->_date;
    }
    public function setDate($date){
        $this->_date = $date ;
        return $this;
    }

    public function getVille() {
        return $this->_ville;
    }
    public function setVille($ville) {
        $this->_ville= $ville;
        return $this;
    }


    
    // Methode
    public function getAge() {
        $dateajd = new Datetime ();
        $date = new Datetime ($this->_date); // Convertir une date en chaine de caract
        $interval = $date->diff ($dateajd) ;
        return $interval->format("%y ans");
    }


    public function  __toString(){
        return "".$this->getNom()." ".$this->getPrenom()." ";
    }

    public function getGestion() {
        return $this->_comptes;
    }

    public function addComptes($comptes){
        $this->_gestion[] = $comptes;
        
      
    }

    public function afficheGestion(){
        echo $this;
        foreach($this->_gestion as $comptes){
            echo ($comptes);
        }
    }
} 
?>