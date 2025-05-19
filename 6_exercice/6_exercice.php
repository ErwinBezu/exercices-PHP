<?php

require_once "Vehicule.php";

require_once "interfaces/Motorise.php";
require_once "interfaces/Electrique.php";
require_once "interfaces/Volant.php";
require_once "interfaces/Flottant.php";

require_once "Voiture.php";
require_once "VoitureHybride.php";
require_once "Hydravion.php";


$voiture = new Voiture('Mustang', "Ford");
echo $voiture;
$voiture->demarrer();


$voitureHybride = new VoitureHybride('R5', "Renault");
echo $voitureHybride;
$voitureHybride->recharger();
$voitureHybride->demarrer();

$hydravion = new Hydravion("CL-215", "Canadair");
echo $hydravion;
$hydravion->demarrer(); 
$hydravion->naviguer(); 
$hydravion->decoller();
$hydravion->atterrir();  