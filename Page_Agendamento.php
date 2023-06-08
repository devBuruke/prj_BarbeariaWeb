<?php

require_once("db.php");
require_once("globals.php");
require_once("models/ServicoModel.php");
require_once("models/FuncionarioModel.php");
require_once("models/Message.php");
require_once("templates/header_agendamento.php");
require_once("dao/ServicoDAO.php");
require_once("dao/FuncionarioDAO.php");

// Verificando o tipo do formulário
$type = filter_input(INPUT_POST, "type");

$message = new Message($BASE_URL);

// preenchendo os select com dados do banco.
$servicosDao = new ServicoDAO($conn, $BASE_URL);
$servicos = $servicosDao->carregarServicos();

// preenchendo os select com dados do banco.
$funcionariosDao = new FuncionarioDAO($conn, $BASE_URL);
$funcionarios = $funcionariosDao->carregarFuncionarios();


?>

<div class="cor_index">
    <center class="cor_index">
        <h1 class="menuh1">Barbearia Dias</h1>
        <button class="homebtn" type="submit"><a href="Page_InicioLog.php">
                <img class="homeimg" src="imagens/logo_pequena.png" alt="logo_barbearia" width="100%" height="100%"></a></button>
    </center>
    </figure>
    <hr class="rodapemenu">
</div>
<div class="container">

    <div class="conteudo1">
        <div class="coluna1">
            <h2 class="title titulo1">Agende agora</h2>
            <p class="descricao desc1">Agende o melhor horário e dia para você!</p>
        </div>
        <div class="coluna2">
            <div class="fecharbt">
                <button class="btn_fechar" type="button">
                    <a href="<?= $BASE_URL ?>Page_InicioLog.php" value="ds"><span id="icon" class="material-symbols-outlined fechar">close</span></a>
                </button>
            </div>
            <h2 class="titulo titulo2">Dados do Agendamento</h2>
            <p class="descricao desc2">Insira os dados abaixo:</p>


            <!-- mudei de onsubmit para action  -->
            <!-- <form class="form" action="valida_campos(this)"> -->
            <form class="form" action="agendamento_process.php" method="POST">
                <input type="hidden" name="type" value="register">
                <label class="label-input" for="">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <input type="text" 
                            id="idclie" name="idclie" 
                            value="<?= $_SESSION['usuario']['codclie'] ?>">
                    <input type="text" placeholder="Nome" 
                            id="nome" name="nome" 
                            value="<?= $_SESSION['usuario']['nome']?>">
                </label>


                <label class="label-input" for="">
                    <span class="material-symbols-outlined">
                        content_cut
                    </span>
                    
                    <select class="servicos" name="servico" id="id_servicos" onload="AgendarBarba(this)">
                        <?php foreach ($servicos as $sv) : ?>

                            <option value="<?= $sv['codservico'] ?>"><?= $sv['nomeserv'] ?></option>

                        <?php endforeach; ?>
                    </select>

                </label>

                <label class="label-input" for="">
                    <span class="material-symbols-outlined">
                        calendar_month
                    </span>
                    <input type="date" id="data" name="data">
                </label>

                <label class="label-input" for="">
                    <span class="material-symbols-outlined">schedule</span>
                    <input type="time" id="horario" name="horario">
                </label>


                <label class="label-input" for="">
                    <span class="material-symbols-outlined">badge</span>
                    <select class="funcionarios" name="func" id="funcionarios">

                    <?php foreach ($funcionarios as $fc) : ?>

                    <option value="<?= $fc['codmatri'] ?>"><?= $fc['nome'] ?></option>

                    <?php endforeach; ?>

                        <!-- <option value="op1">SELECIONE O FUNCIONÁRIO</option>
                        <option value="1">ROBERTO</option>
                        <option value="3">CARLOS</option>
                        <option value="funcvago">VAGO</option> -->

                    </select>
                </label>

                <button type="submit" class="btn_agendar">AGENDAR</button>
            </form>
        </div>
    </div>
</div>
<script src="js/js_Agendamento.js"></script>
<script src="js/js_Servicos.js"></script>
</body>

</html>


<?php
include_once("templates/footer.php");
?>