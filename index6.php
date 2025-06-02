<?php
class Math {
    public static $pi = 3.14159;
    public static function carre($n) {
        return $n * $n;
    }
}

echo Math::$pi . "<br>";
echo Math::carre(5) . "<br>";

class Cercle {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
        echo "Un cercle de rayon " . $this->rayon . " a été créé.<br>";
    }

    public function aire() {
        return Math::$pi * Math::carre($this->rayon);
    }
}
?>