<?php

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require 'phpmailer/OAuth.php';
require 'phpmailer/POP3.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarEmail($mensagem, $assunto, $para)
{


    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 2; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'suporte.anjosdadoacao@gmail.com'; // SMTP username
        $mail->Password = 'Anjos01102019'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->setFrom('suporte.anjosdadoacao@gmail.com', 'Suporte Anjos da Doação');
        $mail->addAddress($para); // Add a recipient

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = $assunto;
        $mail->Body = $mensagem;
        $mail->AltBody = 'Erro';

        $mail->send();
    } catch (Exception $e) {
        header('location: recuperar.php?sent=false');
    }
}
