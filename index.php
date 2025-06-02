<?php
class Animal {
    //attributes
    public $name;

    //methods
    public function speak() {
        return "The animal makes a sound.";
    }
}
$monAnimal = new Animal();
$monAnimal->name = "REX";
echo "Mon animal s'appelle " . $monAnimal->name . "<br>";
echo $monAnimal->speak() . "<br>";
?>  