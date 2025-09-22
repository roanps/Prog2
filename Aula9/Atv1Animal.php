<?php
class Animal {
    public function falar() {
        return "Som genérico de animal";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Au Au!";
    }
}

class Gato extends Animal {
    public function falar() {
        return "Miau!";
    }
}

$animal = new Animal();
echo $animal->falar() . "<br>";

$cachorro = new Cachorro();
echo $cachorro->falar() . "<br>";

$gato = new Gato();
echo $gato->falar() . "<br>";
?>
