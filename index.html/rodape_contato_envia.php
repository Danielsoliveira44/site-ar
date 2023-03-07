<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instância da classe
$mail = new PHPMailer(true);
try
{
    // Configurações do servidor
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'site-ar@outlook.com';
    $mail->Password   = 'DAniels07';
    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'STARTTLS';
    // Informações específicadas pelo Google
    $mail->Host = 'smtp.office365.com';
    $mail->Port = 587;
    // Define o remetente
    $mail->setFrom('site-ar@outlook.com', 'daniel');
    // Define o destinatário
    $mail->addAddress('site-ar@outlook.com', 'daniel silva');
    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'contato de: '.$_POST['nome_contato']. ' email: '. $_POST['email_contato'];
    $mail->Body    = $_POST['comentario_contato'];
    // $mail->AltBody =  $_POST.'[comentario_contato]';
    // Enviar
    
}


catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
            try
            {
            $mail->send();
                echo 'A mensagem foi enviada!';
            }
            catch (Exception $e)
            {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
?>
</body>
</html>