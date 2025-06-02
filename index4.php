<?php
class Animal {
    //attributes
    protected $nom;

    public function __construct($nom) {
        $this->nom = $nom;
        echo "Un nouvel animal a été créé : " . $this->nom . "<br>";
    }
    
    //methods
    public function manger() {
        return $this->nom . " mange de la nourriture.<br>";
    }
}

class Chien extends Animal {
    //methods
    public function aboyer() {
        return $this->nom . " aboie : Woof Woof!<br>";
    }
}

class Chat extends Animal {
    //methods
    public function miauler() {
        return $this->nom . " miaule : Miaou Miaou!<br>";
    }
}

$monChat = new Chat("Minou");
echo $monChat->manger();
echo $monChat->miauler();
$monChien = new Chien("Rex");
?>