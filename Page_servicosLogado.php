<?php
include_once("templates/header.php");
?>

<body>
    <h1> Serviços Ofertados</h1>

    <div class="back_bolinha">

        <div class="ladoalado">
            <figure>
                <img src="imagens/corte.jpg" alt="corte do dias" id="bloco">
            </figure>


            <figure>
                <img src="imagens/Corte_infantil.png" alt="corte do dias" id="bloco">
            </figure>
        </div>

    </div>

    <h1 class="usandojquery">Tabela de Serviços</h1>
    <table id="horario">
        <caption class="tbtexto">
            Barbearia Dias
        </caption>
        <thead>
            <tr id="horizontal">
                <th scope="col">Código Serviço</th>
                <th scope="col">Nome Serviço</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="Agendar()">
                <th scope="row">01</th>
                <td>Corte </td>
                <td>R$25,00</td>
            </tr>
            <tr id="clkBarba" onclick="ServBtn()">
                <th scope="row">02</th>
                <td>Barba</td>
                <td>R$15,00</td>
            </tr>
            <tr>
                <th scope="row">03</th>
                <td>Navalhado</td>
                <td>R$15,00</td>
            </tr>
            <tr>
                <th scope="row">04</th>
                <td>Sombrancelha</td>
                <td>R$10.00</td>
            </tr>
            <tr>
                <th scope="row">05</th>
                <td>Corte Completo(Cabelo, Barba e Sombrancelha)</td>
                <td>R$35.00</td>
            </tr>
            <tr>
                <th scope="row">06</th>
                <td>Pigmentação</td>
                <td>R$40.00</td>
            </tr>
            <tr>
                <th scope="row">06</th>
                <td>Nevou</td>
                <td>R$50.00</td>
            </tr>
        </tbody>
    </table>

    <br>
    <script type="text/javascript" src="js/js_Servicos.js"></script>
    <script src="js/js_Agendamento.js"></script>
</body>

<?php
include_once("templates/footer.php");
?>