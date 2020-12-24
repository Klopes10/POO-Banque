<?php

class comptebancaire {

    private $_libelle;                         // Création de la classe. Attributs
    private $_soldeInitial;
    private $_devise;
    private $_titulaire;
    
    
      


    public function __construct($libelle, $soldeInitial, $devise, $titulaire) {  //Constructeur c'est la méthode qui est appelée lorsque l'on instancie un objet 

        $this->_libelle = $libelle;
        $this->_soldeInitial = $soldeInitial;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $this->_titulaire->addComptes($this);
    }

    //getter (accesseur) & setter (mutateur)

    public function getLibelle(){
        return $this->_libelle;
    }
    public function setLibelle($libelle){
        $this->_libelle = $libelle;
        return $this;
    }

    public function getSoldeInitial(){
        return $this->_soldeInitial;
    }
    public function setSoldeInitial($soldeInitial) {
         $this->_soldeInitial = $soldeInitial;
         return $this;
    }

    public function getDevise() {
        return $this->_devise;
    }
    public function setDevise($devise) {
        $this->_devise=$devise;
        return $this;
    }

    public function getTitulaire(){
        return $this->_titulaire;
    }
    public function setTitulaire($titulaire) {
        $this->_titulaire = $titulaire;
        return $this;
    }

    public function __toString(){
        return "Le compte ".$this-> getLibelle()." est d'un montant de ".$this->getSoldeInitial()." ".$this->getDevise()." et appartient à ".$this->getTitulaire()."<br/><br/>";
    }

    // Methode 

    public function crediter($actions) {

        $this->_soldeInitial +=$actions;
        echo "Le ".$this->getLibelle()." appartenant à ".$this->getTitulaire()." est crédité de ".$actions."".$this->getDevise().". Le nouveau solde s'élève à ".$this->getSoldeInitial()."".$this->getDevise()." <br/>";
    }   
    
    public function debiter($actions) {

        $this->_soldeInitial -=$actions;
        echo "Le ".$this->getLibelle()." appartenant à ".$this->getTitulaire()." est débité de ".$actions." ".$this->getDevise().". Le nouveau solde s'élève à ".$this->getSoldeInitial()."".$this->getDevise()."<br/>";
    }

    public function virement($actions, $comptedestinataire) {
        
        $this->debiter($actions);
        echo "Le ".$this->getLibelle()." appartenant à ".$this->getTitulaire()." est débité de ".$actions." ".$this->getDevise().". <br/>";

        $comptedestinataire->crediter($actions);
        echo " Le montant est reversé vers ".$this->getLibelle()." de ".$this->getTitulaire()." et est de ".$this->getSoldeInitial()." ".$this->getDevise()."<br/><br/>";
    }

}
?>