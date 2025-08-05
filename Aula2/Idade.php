<?php 
    class Pessoa
    {
        public $name;
        public $email;
        public $idade;

        

        public function exibirDados($n, $e, $i){
            $this->name = $n;
            $this->email = $e;
            $this->idade = $i;
            echo "Nome: $this->name \tEmail: $this->email \nIdade: $this->idade \n";
        }

        public function deMaior($i){
            $this->idade = $i;
            if($this->idade >= 18){
                echo "É de maior!\n";
            }else{
                echo "É de menor!\n";
            }
        }

    }

    $p1 = new Pessoa();
    $p1->exibirDados("Gustavo", "gugugaitero@gmail.com", 20);
    $p1->deMaior(20);
?>