<!DOCTYPE html>
<html>
<head>

    <title></title>
    <link rel="stylesheet" href="css/Estilo_Confirmacao.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="container">
        <div class="conteudo1">

            <div class="coluna1">
                <h2 class="title titulo1">Confirmação de Agendamento</h2>
                <p class="descricao desc1">Imprima a confirmação ou salve o arquivo!</p>
                <p class="desc3">*Ao clicar em imprimir poderá selecionar para salvar o arquivo*</p>
            </div> 
            <div class="coluna2"> 
                <div class="fecharbt">
                    <button class="btn_fechar" type="button">
                        <a href="index.html" value="ds"><span id="icon" class="material-symbols-outlined fechar">close</span></a>
                    </button>
                </div>  
                <h2 class="titulo titulo2">Dados do Agendamento</h2>
                    <label class="label-input" for="">
                        <span class="material-symbols-outlined">
                            person
                            </span>
                        <p id="nome"> CLIENTE:</p>
                    </label>

                    <label class="label-input" for="horariodia">
                        <span class="material-symbols-outlined">
                            calendar_month
                            </span>
                        <p id="horariodia"> DIA E HORÁRIO</p>
                    </label>

                    <label class="label-input" for="">
                        <span class="material-symbols-outlined">
                            content_cut
                            </span>
                        <p id="servico"> SERVIÇO:</p>
                    </label>

                    <label class="label-input" for="">
                        <span class="material-symbols-outlined icones">badge</span>
                        <p id="funcionario"> FUNCIONÁRIO ESCOLHIDO:</p>
                    </label>
                    <P class="aviso"> **OS DADOS VIRÃO DO BANCO - PARA CONFIRMAR SE OS VALORES FORAM SALVOS</P>
                <input class="btn_imprimir" id="botao" type="button" value="Imprimir Confirmação" onclick="imprimir()">
            </div>
            </div>
    </div>
    <script src="js/js_Confirmacao.js"></script>
</body>
</html>