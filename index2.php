<?php
class Personne {
    // Attributs
    public $nom;
    public $age;

    // Constructeur
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
        echo "Une nouvelle personne a été créée : $nom, $age ans.<br>";
    }

    // Destructeur
    public function __destruct() {
        echo "La personne " . $this->nom . "a été détruite.<br>";
    }

    // Méthodes
    public function afficherInfos() {
        echo "Et voici ! : <br>";
        return "Nom : " . $this->nom . " Âgé(e) :" . $this->age . "ans";
    }
}


$pierre = new Personne("Pierre", 30);
echo $pierre->afficherInfos() . "<br>";
?>