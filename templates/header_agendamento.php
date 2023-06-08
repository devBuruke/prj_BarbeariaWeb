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

if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION['mensagem']; // Atribua a mensagem a uma variável
    unset($_SESSION['mensagem']); // Remova a mensagem da sessão para não exibi-la novamente

    // Agora você pode exibir a mensagem onde for necessário no seu cabeçalho
    echo '<div class="mensagem">' . $mensagem . '</div>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AGENDAMENTO</title>
    <link rel="stylesheet" href="css/Estilo_Agendamento.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>