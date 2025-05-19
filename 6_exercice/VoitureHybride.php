<?php 

require_once "Voiture.php";

final class VoitureHybride extends Voiture implements Electrique {
    public function recharger(): void{
        echo "La voiture se recharge.\n"; 
    }
}