<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Envio Email</title>
</head>
<body>
    <?php
        $para = "lukasnunesgs@gmail.com";

        $assunto = "CURRÍCULO WEB";

        $nome = $_POST['nome_u'];
        $email = $_POST['email'];
        $telefone = $_POST['tel'];
        $mensagem = $_POST['mensagem'];

        $corpo = "<html><body>";
        $corpo .= "Nome: $nome ";
        $corpo .= "Email: $email Telefone: $telefone<br/>";
        $corpo .= "Mensagem: $mensagem ";
        $corpo .= "</body></html>";

        $email_headers = implode("\n", array("From: $nome", "Reply-To: $email", "Subject: $assunto", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

        if(!empty($nome) && !empty($email) && !empty($mensagem)){
            mail($para, $assunto, $corpo, $email_headers);
            $msg = "Sua mensagem foi enviada com sucesso.";
            echo "<script>alert('$msg');window.location.assign('http://localhost/CurriculoWeb/index.html');</script>";
        } else {
            $msg = "Erro ao enviar a mensagem.";
            echo "<script>alert('$msg');window.location.assign('http://localhost/CurriculoWeb/index.html');</script>";
        }   
    ?>
</body>
</html>