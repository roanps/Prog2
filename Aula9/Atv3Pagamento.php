<?php
class Pagamento {
    public function processar() {
        return "Processando pagamento genérico.";
    }
}

class Cartao extends Pagamento {
    public function processar() {
        return "Processando pagamento com cartão.";
    }
}

class Pix extends Pagamento {
    public function processar() {
        return "Processando pagamento via Pix.";
    }
}

class Boleto extends Pagamento {
    public function processar() {
        return "Processando pagamento com boleto.";
    }
}

$pagamentos = [new Cartao(), new Pix(), new Boleto()];

foreach ($pagamentos as $p) {
    echo $p->processar() . "<br>";
}
?>
