<?php
class Forme {
    public function aire() {
        return 0;
    }
}

class carre extends Forme {
    private $cote;

    public function __construct($cote) {
        $this->cote = $cote;
        echo "Un carré de côté " . $this->cote . " a été créé.<br>";
    }

    public function aire() {
        return $this->cote * $this->cote;
    }
}

class cercle extends Forme {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
        echo "Un cercle de rayon " . $this->rayon . " a été créé.<br>";
    }

    public function aire() {
        return pi() * $this->rayon * $this->rayon;
    }
}

//Fonction polymorphe
function afficherAire(Forme $forme) {
    echo "L'aire de la forme est : " . $forme->aire() . "<br>";
}

function calculerAireTotale(array $formes) {
    $aireTotale = 0;
    foreach ($formes as $forme) {
        $aireTotale += $forme->aire();
    }
    return $aireTotale;
}

$formes = [
    new Carre(5),
    new Cercle(3),
    new Carre(2)
];

echo "Aire totale des formes : " . calculerAireTotale($formes) . "<br>";
?>