<?php
class Notificacao {
    public function enviar() {
        return "Enviando notificação.";
    }
}

class Email extends Notificacao {
    public function enviar() {
        return "Enviando notificação por Email.";
    }
}

class SMS extends Notificacao {
    public function enviar() {
        return "Enviando notificação por SMS.";
    }
}

class Push extends Notificacao {
    public function enviar() {
        return "Enviando notificação Push.";
    }
}

$notificacoes = [new Email(), new SMS(), new Push()];

foreach ($notificacoes as $n) {
    echo $n->enviar() . "<br>";
}
?>
