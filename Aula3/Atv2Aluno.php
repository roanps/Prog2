<?php 
class Aluno{
    public $nome;
    public $media;

    function verificarAprovacao(){
        if($this->media >= 7)
            return true;
        else
            return false;
    }
}

function aprovacao($aluno){
    if($aluno->verificarAprovacao())
        echo ("O aluno $aluno->nome está aprovado com média $aluno->media!\n");
    else
        echo ("O aluno $aluno->nome está reprovado com média $aluno->media!\n");
}
$aluno1 = new Aluno();
$aluno1->nome = "Luiz";
$aluno1->media = 8;

$aluno2 = new Aluno();
$aluno2->nome = "Carlos";
$aluno2->media = 6;

$aluno3 = new Aluno();
$aluno3->nome = "João";
$aluno3->media = 12;

aprovacao($aluno1);
aprovacao($aluno2);
aprovacao($aluno3);
?>