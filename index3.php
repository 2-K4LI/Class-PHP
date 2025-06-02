<?php
class CompteBancaire {
    //attributs
    private $solde=0;
    public $titulaire;

    //constructeur
    public function __construct($titulaire = "Inconnu") {
        $this->titulaire = $titulaire;
        echo "Bonjour, " . $this->titulaire . ". Votre compte bancaire est à " . $this->solde . ".<br>";
    }

    //methodes
    public function deposer($montant) {
        ($montant > 0) ? $this->solde += $montant: null;
    }

    public function retirer($montant) {
        if ($montant > 0 && $montant <= $this->solde){
            $this->solde -= $montant;
            return $montant;
        }
        return 0;
    }
    
    public function afficherSolde() {
        return "Bonjour, " . $this->titulaire . " votre solde est de " . $this->solde . " €.<br>";
    }

    //getter
    public function getSolde() {
        return $this->solde;
    }
}

$compte = new CompteBancaire("Alice");
$compte->deposer(500);
echo $compte->afficherSolde();
$compte->retirer(200);
echo $compte->afficherSolde();
?>