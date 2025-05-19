<?php 

require_once "Vehicule.php";

class Voiture extends Vehicule implements Motorise {
    public function demarrer(): void{
        echo "La voiture démarre.\n"; 
    }
}