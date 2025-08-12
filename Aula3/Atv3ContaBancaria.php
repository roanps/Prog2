<?php 
class ContaBancaria{
    public $titular;
    public $saldo;

    function exibirSaldo(){
        return "O saldo do $this->titular é R$$this->saldo";
    }

    function sacar($valorSaque){
        $this->saldo = $this->saldo - $valorSaque;
    }
    
    function depositar($valorDeposito){
        $this->saldo += $valorDeposito;
    }
}

$cb1 = new ContaBancaria();
$cb1->saldo = 0;
$cb1->depositar(200);
$cb1->sacar(112);

echo $cb1->exibirSaldo();

?>