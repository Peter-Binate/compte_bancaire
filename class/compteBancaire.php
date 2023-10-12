<?php
    class compteBancaire {
        // Atribut
        private $name;
        private $solde;

        // Méthodes
        function __construct($name, $solde) {
            $this->name = $name;
            $this->solde = $solde;
        }

        public function depotSolde($depot){
            return $this->solde += $depot;
        }
        
        public function retraitSolde($retrait){
            if ($this->solde > $retrait) {
                return $this->solde -= $retrait;
            } else {
                echo "Le solde est insufisant !";
            }
            
        }
        
        public function AfficheSolde(){
            echo 'Le solde du compte bancaire de '. $this->name. ' est de: '. $this->solde.' euros </br>';
        }
    }
?>