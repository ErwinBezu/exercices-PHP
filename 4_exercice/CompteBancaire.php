<?php
require_once "CompteEpargne.php"; 
require_once "CompteCourant.php"; 

class CompteBancaire {
    protected string $titulaire;
    protected float $solde;
    protected string $devise;
    
    public function __construct($titulaire, $solde, $devise){
        $this->titulaire = $titulaire;
        $this->solde = $solde;
        $this->devise = $devise;

    }
    
    public function __destruct() {
        echo "Le compte de $this->titulaire est bien supprimé !", PHP_EOL;
    }

    public function deposer(float $montant) {
        $this->solde += $montant; 
        echo "Le compte de $this->titulaire à bien été crédité de $montant $this->devise ! Votre banquier est content !", PHP_EOL;
    }

    public function retirer(float $montant) {
        if($montant <= $this->solde){
            $this->solde -= $montant;
            echo "Vous venez de retirer $montant $this->devise ! Votre banquier n'est pas content !", PHP_EOL;
        }else {
            echo "Vous n'êtes pas assez riche pour retirer $montant $this->devise !!", PHP_EOL;
        }
    }

    public function afficherSolde(){
        echo "Solde de $this->titulaire : $this->solde $this->devise", PHP_EOL;
    }

} 

echo "COMPTE BANCAIRE", PHP_EOL;
$compte = new CompteBancaire("John Wick", 10000.0, "EUR");
$compte->deposer(15500);
$compte->retirer(500);
$compte->affichersolde();
unset($compte);

echo PHP_EOL, "COMPTE EPARGNE", PHP_EOL;
$compteEpargne = new CompteEpargne("John Wick", 2000.0, "EUR", 2.5);
$compteEpargne->deposer(1000);
$compteEpargne->calculerInterets();
$compteEpargne->afficherSolde();
unset($compteEpargne);

echo PHP_EOL, "COMPTE COURANT", PHP_EOL;
$compteCourant = new CompteCourant("John Wick", 500.0, "EUR", 100.0);
$compteCourant->afficherSolde();
$compteCourant->deposer(200);
$compteCourant->retirerAvecDecouvert(900);
$compteCourant->retirerAvecDecouvert(200);
$compteCourant->afficherSolde();
unset($compteCourant);