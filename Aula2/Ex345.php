<?php 
    class Pessoa{
        private $nome;
        private $idade;

        function __construct($nome, $idade){
            $this->setName($nome);
            $this->setAge($idade);
        }

        public function setName($nome){
            $this->nome = $nome;
        }
        function getName(){
            return $this->nome;
        }

        function setAge($idade){
            $this->idade = $idade;
        }
        function getAge(){
            return $this->idade;
        }

        

        function apresentar(){
            echo "Meu nome é ".$this->getName()." tenho ".$this->getAge()." anos!\n";
        }
    }

    $p1 = new Pessoa("Roan", 23);
    $p2 = new Pessoa("Gustavo", 20);

    $p1->apresentar();
    $p2->apresentar();
?>