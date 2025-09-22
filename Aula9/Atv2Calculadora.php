<?php
class Calculadora {
    public function somar($a, $b, $c = null) {
        if ($c !== null) {
            return $a + $b + $c;
        }
        return $a + $b;
    }
}

$calc = new Calculadora();
echo $calc->somar(5, 3) . "<br>";
echo $calc->somar(5, 3, 2) . "<br>";
?>