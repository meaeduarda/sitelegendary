<?php

// Carrega o autoload do Composer (verifique se o caminho está certo)
require 'C:/xampp/htdocs/sitelegendary/PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/sitelegendary/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/sitelegendary/PHPMailer-master/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $mensagem = trim($_POST["mensagem"]);

    if (empty($nome) || empty($mensagem) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, preencha o formulário corretamente.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configuração SMTP Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'eduardaaraujodemoraes@gmail.com';  // Substitua pelo seu e-mail
        $mail->Password = 'npst tsmb cljn qpov';           // Substitua pela senha ou app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // recomendado invés de 'tls'
        $mail->Port = 587;

        // Remetente e destinatário
        $mail->setFrom($email, $nome);
        $mail->addAddress('eduardaaraujodemoraes@gmail.com');

        // Conteúdo do email
        $mail->isHTML(false);
        $mail->Subject = "Nova mensagem do formulário Legendary";
        $mail->Body = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";

        $mail->send();
        echo 'Mensagem enviada com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
} else {
    echo "Método não permitido.";
}
