<?php 
class Conta{
    private $titular;
    private $saldo;
    private $numero;

    public function __construct($titular, $saldo){
        $this->setTitular($titular);
        $this->setSaldo($saldo);
        $this->setNumero(rand(0,1000));
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }
    public function getTitular(){
        return $this->titular;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getNumero(){
        return $this->numero;
    }

    public function exibirDados(){
        echo "<br>Conta: ".$this->getNumero();
        echo "<br>Titular: ".$this->getTItular();
        echo "<br>Saldo: ".$this->getSaldo();
        echo "<br>";
    }
    

    public function depositar($valor){
        $this->setSaldo($this->getSaldo()+$valor);
        echo "<br> Deposito realizado com sucesso na Conta: ".$this->getNumero()." no valor de $valor";
    }

    public function sacar($valor){
        $this->setSaldo($this->getSaldo()-$valor);
        echo "<br> Saque realizado com sucesso na Conta: ".$this->getNumero()." de $valor";
    }
}

$c1 = new Conta("Roan", 300);
$c2 = new Conta("Gustavo", 500);

$c1->exibirDados();
$c2->exibirDados();

$c1->depositar(200);
$c2->sacar(200);

$c1->exibirDados();
$c2->exibirDados();

?>