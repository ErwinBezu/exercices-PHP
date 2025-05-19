<?php
require_once "Rectangle.php";
require_once "Cercle.php";  

abstract class Forme {
    public function __construct(protected string $nom){
    }

    abstract public function calculerAire();

    abstract public function calculerPerimetre();

    public function infos(){
        echo "La forme est un $this->nom", PHP_EOL;
        echo "Le périmètre du $this->nom est de : " . $this->calculerPerimetre(), PHP_EOL;
        echo "L'aire du $this->nom est de : " . $this->calculerAire(), PHP_EOL;
    }
}



$rectangle = new Rectangle("rectangle", 5, 3);
$cercle = new Cercle("cercle", 4);

$carre = new Rectangle("carré", 5, 5);

$rectangle->infos();
echo PHP_EOL;
$cercle->infos();
echo PHP_EOL;
$carre->infos();

