<?php 

final class Rectangle extends Forme{
    public function __construct($nom, private float $longueur, private float $largeur){
        parent::__construct($nom);
    }

    public function calculerAire(){
        return $this->longueur * $this->largeur;
    }

    public function calculerPerimetre(){
        return ($this->longueur + $this->largeur) * 2;
    }

    public function infos(){
        parent::infos();
        echo "La longueur du $this->nom est de : " . $this->longueur, PHP_EOL;
        echo "La largeur du $this->nom est de : " . $this->largeur, PHP_EOL;
    }
}