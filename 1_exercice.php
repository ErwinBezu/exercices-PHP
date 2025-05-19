<?php

class Rectangle {
    public int $largeur;
    public int $hauteur;

    public function __construct($largeur, $hauteur) {
    $this->largeur = $largeur;
    $this->hauteur = $hauteur;
    }

    public function perimetre() {
        return 2 * ($this->largeur + $this->hauteur);
    }

    public function surface() {
        return $this->largeur * $this->hauteur;
    }
}

$monRectangle = new Rectangle(10,5);


echo $monRectangle->perimetre(), PHP_EOL;
echo $monRectangle->surface(), PHP_EOL;
