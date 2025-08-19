<?php 
    class Aluno{
        public $aluno;
        private $matricula;
        private $notas;
        private $media;

        public function __construct($nome){
            $this->aluno = $nome;
            $this->matricula = rand(1,1000);
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function adicionarNota($nota){
            $this->notas[] = $nota;
        }

        private function calcularMedia(){
            $media = array_sum($this->notas)/count($this->notas);
            return $media;
            //Soma as notas do vetor(array_sum) e divide pela quantidade(count)
        }

        public function situacao(){
            if($this->calcularMedia()>=7){
                echo "<br> Aprovado";
            }else{
                echo "<br> Reprovado";
            }
        }
    }

$a1 = new Aluno("Roan");
$a2 = new Aluno("Luiz");

$a1->adicionarNota(10);
$a1->adicionarNota(6);

$a2->adicionarNota(8);
$a2->adicionarNota(6);
$a2->adicionarNota(4);

$a1->situacao();
$a2->situacao();
?>