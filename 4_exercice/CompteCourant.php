<?php

final class CompteCourant extends CompteBancaire{
    private float $decouvertAutorise;

    public function __construct($titulaire, $solde, $devise, $decouvertAutorise) {
        parent::__construct($titulaire, $solde, $devise);
        $this->decouvertAutorise = $decouvertAutorise;
    }

    public function retirerAvecDecouvert(float $montant) {
        if ($this->solde - $montant >= -$this->decouvertAutorise) {
            $this->solde -= $montant;
            echo "Les $montant $this->devise sont bien retirés du compte de $this->titulaire.", PHP_EOL;
        } else {
            echo "Impossible de retirer $montant $this->devise CONTACTEZ VOTRE BANQUIER !!!", PHP_EOL;
        }
    }
}