<?php

class Vegetal {
    protected string $nom;
    protected string $couleur;

    public function __construct($nom, $couleur){
        $this->nom = $nom;
        $this->couleur = $couleur;
    }

    public function afficher() {
        return "Nom : $this->nom, Couleur : $this->couleur, Classe : " . get_class($this);
    }
}

final class Plante extends Vegetal {

    public function afficher() {
        return parent::afficher() . " Je suis une belle pousse !";
    }

}

final class Fleur extends Vegetal {

    public function afficher() {
        return parent::afficher() . " Je suis une fleur !";
    }

}