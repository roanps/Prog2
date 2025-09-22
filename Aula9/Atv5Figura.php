<?php
class FiguraGeometrica {
    public function calcularArea() {
        return 0;
    }
}

class Quadrado extends FiguraGeometrica {
    private $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

class Retangulo extends FiguraGeometrica {
    private $largura;
    private $altura;
    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }
    public function calcularArea() {
        return $this->largura * $this->altura;
    }
}

class Circulo extends FiguraGeometrica {
    private $raio;
    public function __construct($raio) {
        $this->raio = $raio;
    }
    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }
}

$formas = [
    new Quadrado(5),
    new Retangulo(4, 6),
    new Circulo(3)
];

foreach ($formas as $f) {
    echo $f->calcularArea() . "<br>";
}
?>
