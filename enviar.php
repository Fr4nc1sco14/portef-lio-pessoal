<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];

    // Configurações do e-mail
    $para = "francisco.o.pereira2005@gmail.com";
    $assunto = "Nova mensagem de contato";
    $corpo = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem";
    $cabecalhos = "From: $email";

    // Envia o e-mail
    if (mail($para, $assunto, $corpo, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>
