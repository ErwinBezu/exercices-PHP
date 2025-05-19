<?php

final class CompteEpargne extends CompteBancaire{
    private float $tauxInteret;

    public function __construct($titulaire, $solde, $devise, $tauxInteret) {
        parent::__construct($titulaire, $solde, $devise);
        $this->tauxInteret = $tauxInteret;
    }

    public function calculerInterets() {
        $interets = $this->solde * $this->tauxInteret / 100;
        $this->solde += $interets;
        echo "Vous avez gagné $interets $this->devise en intérêt et sont ajoutés au compte épargne de $this->titulaire", PHP_EOL;
    }
}