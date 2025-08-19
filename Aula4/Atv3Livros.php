<?php 
class Livro{

    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $numeroPaginas;
    private bool $disponivel;

    /*public function __construct($titulo, $autor, $anoPublicacao, $numeroPaginas){

    }*/

    public function setTitulo($titulo){
        $this->titulo;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    
    public function setAutor($autor){
        $this->autor;
    }
    public function getAutor(){
        return $this->autor;
    }

    public function setAnoPublicacao($anoPublicacao){
        if($anoPublicacao <= intval(date('Y'))){
            $this->anoPublicacao;
        }else{
            echo "<br>Não é possível lançar um livro com data de lançamento futura.";
        }
    }
    public function getAnoPublicaocao(){
        return $this->anoPublicacao;
    }
    

    public function setNumeroPaginas($numeroPaginas){
        if($numeroPaginas>0){
         $this->numeroPaginas = $numeroPaginas;
        }else{
            echo "<br>O livro deve ter pelo menos uma página!";
        }
    }
    public function getNumeroPaginas(){
        return $this->numeroPaginas;
    }

    public function setDisponivel($disponivel){
        $this->disponivel = $disponivel;
    }
    public function getDisponivel(){
        return $this->disponivel;
    }
}

$livro = new Livro();
$livro->setTitulo("Dom Casmurro");
$livro->setAutor("Machado de Assis");
$livro->setAnoPublicacao(2026);
$livro->setNumeroPaginas(1);
$livro->setDisponivel(true);


?>