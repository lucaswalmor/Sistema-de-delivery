<?php 

    include_once("config.php");

    $remetente = $email_adm;
    $assunto = 'Contato do BURGUER';

    $mensagem = utf8_decode('Nome: '.$_POST['name']. "\r\n"."\r\n" . 'Telefone: '.$_POST['tel']. "\r\n"."\r\n" . 'Mensagem: ' . "\r\n"."\r\n" .$_POST['menssagem']);
    $dest = $_POST['email'];
    $cabecalhos = "From: " .$dest;

    mail($remetente, $assunto, $mensagem, $cabecalhos);
?>