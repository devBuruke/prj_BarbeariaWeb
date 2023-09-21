<?php
// include_once("config/url.php");
// include_once("config/processo.php");
require_once("models/Message.php");
require_once("globals.php");

// limpa a mensagem
// if(isset($_SESSION['msg'])) {
// $printMsg = $_SESSION['msg'];
// $_SESSION['msg'] = '';
// }

// Verifique se a mensagem está definida na sessão
if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION['mensagem']; // Atribua a mensagem a uma variável
    unset($_SESSION['mensagem']); // Remova a mensagem da sessão para não exibi-la novamente

    // Agora você pode exibir a mensagem onde for necessário no seu cabeçalho
    echo '<div class="mensagem">' . $mensagem . '</div>';
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BARBEARIA DIAS</title>
    <!-- ICONE DA ABA -->
    <link rel="short icon" href="imagens/logo.ico" />

    <!-- LINK CSS DA PAG: INDEX, QUEM SOMOS, SERVICOS, CONTATO, OBRIGADO   -->
    <link rel="stylesheet" href="css/estlios.css">

    <!-- LINKS TABELA SERVICOS -->
    <script type="text/javascript" src="Biblioteca/jquery-3.3.1.js"></script>

    <!-- LINIKS ICONES GOOGLE -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- ESTILO AGENDAMENTOS  -->
    <link rel="stylesheet" href="css/Estilo_Agendamento.css">
</head>

<body>
    <header>
        <div class="cor_index">
            <h1 class="titulo">Barbearia Dias</h1>
            <center class="cor_index">
                <img class="brasao" src="imagens/logo_pequena.png" alt="logo_barbearia" width="5%" height="5%">
                <a href="index.php"><button class="btn-geral" type="submit">Home</button></a> 
                   <a href="#quem-somos"><button class="btn-geral" type="submit">Quem somos</button></a>
                <a href="Page_Login.php"><button class="btn-geral" type="submit">Entre/Cadastre-se</button></a>
                <!-- <button type="submit"><a href="Page_Agendamento.php">Agende Agora</button></a> -->
                <a href="#servicos"><button class="btn-geral" type="submit">Serviços</button></a>
                <a href="#contato"><button class="btn-geral" type="submit">Contato</button></a>
                <img class="brasaodir" src="imagens/logo_pequena.png" alt="logo_barbearia" width="5%" height="5%">
            </center>
            <hr>
        </div>
    </header>


