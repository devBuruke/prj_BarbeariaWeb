<?php



require_once("db.php");
require_once("globals.php");
require_once("models/ServicoModel.php");
require_once("models/FuncionarioModel.php");
require_once("models/Message.php");
require_once("dao/ServicoDAO.php");
require_once("dao/FuncionarioDAO.php");
include_once("templates/header_logado.php");

$agendamentosDao = new AgendamentoDAO($conn, $BASE_URL);
$agendamentos = $agendamentosDao->carregarAgendamentos();


if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION['mensagem']; // Atribua a mensagem a uma variável
    unset($_SESSION['mensagem']); // Remova a mensagem da sessão para não exibi-la novamente

    // Agora você pode exibir a mensagem onde for necessário no seu cabeçalho
    echo '<div class="mensagem">' . $mensagem . '</div>';
}

?>

<body>
    <h1> Meus Agendamentos</h1>

    <br>
    <br>
    <br>
    <table id="horario">
        <caption class="tbtexto">
            Barbearia Dias
        </caption>
        <thead>
            <tr id="horizontal">
                <th scope="col">Código</th>
                <th scope="col">Data do Agendamento</th>
                <th scope="col">Horário Agendado</th>
    
            </tr>
        </thead>
        <tbody>

        <?php foreach ($agendamentos as $ag): ?>
            <tr>
                <td scope="row" class="col-id"><?= $ag["codagendamento"] ?></td>
                <td scope="row"><?= $ag["dataagenda"] ?></td>
                <td scope="row"><?= $ag["hora"] ?></td>
            
            <td class="actions">
                        <!--CAPTURAR O ID SERVINDO COMO PASSAGEM DE PARÂMETRO-->
                       

                                                
                        <form class="delete-form" action="<?= $BASE_URL ?>agendamento_process.php" method="POST">
                        <input type="hidden" name="type" value="delete">
                        <input type="hidden" name="ID" value="<?= $ag["codagendamento"] ?>">
                        <!-- <span class="material-symbols-outlined btnMeuAg">delete</span> -->
                        <!--CRIANDO UMA FUNÇÃO JAVA SCRIP PARA CONFIRMAR SE VOCE QUER EXCLUIR UM CONTATO--->
                            <button type="submit" class="btnMeuAg" onclick="return confirm('TEM CERTEZA QUE DESEJA EXCLUIR ESTE USUARIO? ')">
                                <!--preciso criar um hiden para dizer que a ação vai ser diferente o nome vai ser delete -->
                                <span class="material-symbols-outlined btnMeuAg">delete</span>
                                <!-- estilizar o botão - classe excluirform -->
                            </button>
                        </form>
                        </a>

                        <!--- Adicionar--->
                            <a href="Page_Agendamento.php">
                            <span class="material-symbols-outlined btnMeuAg">add_circle</span></a>
                    </td>
                </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    

    <br>
    <script type="text/javascript" src="js/js_Servicos.js"></script>
    <script src="js/js_Agendamento.js"></script>
</body>

<?php
include_once("templates/footer.php");
?>