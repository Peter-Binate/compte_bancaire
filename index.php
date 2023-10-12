<?php
    require("./class/compteBancaire.php");
    
    // valeurs par défaut
    $name = 'Dupont';
    $solde = 1000;
    
    // Compte 1 
    $compte1 = new compteBancaire('Duchmol', 800);
    $compte1->depotSolde(350);
    $compte1->retraitSolde(200);
    $compte1->AfficheSolde();

    // Compte 2
    $compte2 = new compteBancaire($name, $solde);
    $compte2->depotSolde(25);
    $compte2->AfficheSolde();
?>