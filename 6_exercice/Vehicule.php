<?php

abstract class Vehicule {
    public function __construct(protected string $nom, protected string $marque){
    }

    public function __toString() {
        return "Le véhicule $this->nom, de la marque $this->marque \n"; 
    }
}