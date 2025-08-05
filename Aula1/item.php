<?php
class Produto
{
    public $name;
    public $preco;
    public $desconto;

    public function precoFinal($valor, $desc)
    {
        $this->preco = $valor;
        $this->desconto = $this->preco * $desc / 100;
        return $this->preco - $this->desconto;
    }
}

class Compra{
    public $valorUnitario;
    public $quantidade;
    public $desconto;
    public $valorFinal;

    public function calculaValorF($valor, $quant, $desc)
    {   
        $this->valorUnitario = $valor;
        $this->quantidade = $quant;
        $this->desconto = $desc / 100;
        
        $valorFinal =  $this->valorUnitario*$this->quantidade*$this->desconto;     
    }
}

$camiseta = new Produto();



echo $camiseta->precoFinal(200, 10)
?>