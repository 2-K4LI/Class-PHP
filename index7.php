<?php
Interface Transport {
    public function demarrer();
    public function arreter();
}


class Voiture implements Transport {
    public function demarrer() {
        return "La voiture démarre.";
    }
    
    public function arreter() {
        return "La voiture s'arrête.";
    }
}

class Velo implements Transport {
    public function demarrer() {
        return "Le vélo démarre.";
    }
    
    public function arreter() {
        return "Le vélo s'arrête.";
    }
}

function testerTransport(Transport $transport) {
    echo $transport->demarrer() . "<br>";
    echo $transport->arreter() . "<br>";
}

$maVoiture = new Voiture();
$monVelo = new Velo();
testerTransport($maVoiture);
?>