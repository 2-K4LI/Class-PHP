<?php
abstract class Animal {
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
        echo "Un nouvel animal a été créé : " . $this->nom . "<br>";
    }

    abstract public function FaireBruit();

    public function dormir() {
        return $this->nom . " Zzz, dort paisiblement.<br>";
    }
}

class Chien extends Animal {
    public function FaireBruit() {
        return $this->nom . " aboie : Woof Woof!<br>";
    }
}

class Chat extends Animal {
    public function FaireBruit() {
        return $this->nom . " miaule : Miaou Miaou!<br>";
    }
}

$monChat = new Chat("Minou");
echo $monChat->dormir();
echo $monChat->FaireBruit();
?>