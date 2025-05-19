<?php 
require_once "Vehicule.php";

class Hydravion extends Vehicule implements Motorise, Volant, Flottant {
    public function demarrer(): void{
        echo "L'hydravion démarre.\n"; 
    }

    public function decoller(): void{
        echo "L'hydravion décolle.\n"; 
    }

    public function atterrir(): void{
        echo "L'hydravion atterit.\n"; 
    }

    public function naviguer(): void{
        echo "L'hydravion navigue sur l'eau.\n"; 
    }
}