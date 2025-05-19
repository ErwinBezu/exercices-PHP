<?php

class Personnage {
    private string $nom;
    private int $vie;
    private int $attaque; 

    public function __construct($nom, $vie, $attaque) {
    $this->nom = $nom;
    $this->vie = $vie;
    $this->attaque = $attaque;
    }

    public function attaque(Personnage $adversaire) {
        $updateVie = $adversaire->getVie() - $this->getAttaque();
        $adversaire->setVie($updateVie);

        echo $this->getNom() . " a attaqué " . $adversaire->getNom(), PHP_EOL;
        echo "Il reste " .  $adversaire->getVie() . "pv à " . $adversaire->getNom(), PHP_EOL;

    } 

    public function estEnVie() {
        return $this->vie > 0;
    }

    public function __destruct() {
        echo $this->nom . " disparait.", PHP_EOL;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function getVie() {
        return $this->vie;
    }

    public function setVie(int $vie) {
        $this->vie = $vie;
    }

    public function getAttaque() {
    return $this->attaque;
    }

    public function setAttaque(int $attaque) {
    $this->attaque = $attaque;
    }

}

$p1 = new Personnage("Gilmi", 25, 5);
$p2 = new Personnage("Legolas", 10, 10);


while ($p1->estEnVie() && $p2->estEnVie()) {
    $p1->attaque($p2);
    
    if (!$p2->estEnVie()) break;

    
    $p2->attaque($p1);
}

if ($p1->estEnVie()) {
    unset($p2);
    echo $p1->getNom() . " gagne le combat !!!", PHP_EOL;
} else {
    unset($p1);
    echo $p2->getNom() . " gagne le combat !!!", PHP_EOL;
}


