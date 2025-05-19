<?php

final class Cercle extends Forme{
    public function __construct($nom, private float $rayon){
        parent::__construct($nom);
    }

    public function calculerAire(){
        return pi() * pow($this->rayon, 2);
    }

    public function calculerPerimetre(){
        return 2 * pi() * $this->rayon; 
    }

    public function infos(){
        parent::infos();
        echo "Le rayon du $this->nom est de : " . $this->rayon, PHP_EOL;
    }
}