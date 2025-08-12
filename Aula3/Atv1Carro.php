<?php 
class Carro{
    public $modelo;
    public $marca;
    public $ano;

    function exibirInformações(){
        echo("Carro:$this->modelo\n Marca:$this->marca\t Ano:$this->ano\n");
    }
}

$mc = new Carro();
$mc->modelo="Santana";
$mc->marca="Volkswagen";
$mc->ano = 1997;

$mc->exibirInformações();
?>