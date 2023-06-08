<?php
include('globals.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/Estilo_Login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body onload="loading()">
    <div id="load">
        <div class="container">
            <div class="conteudo  conteudo1">
                <div class="coluna1">
                    <h2 class="titulo titulo1">Bem vindo de volta!</h2>
                    <p class="desc desc1">Para interagir conosco</p>
                    <p class="desc desc1">Por favor, entre com os seus dados!</p>
                    <button id="signin" class="btn btn_Entrar1">Login</button>
                </div>
                <div class="coluna2">
                    <div class="fecharbt">
                        <button class="btn_fechar" type="button">
                            <a href="index.php" value="ds"><span id="icon" class="material-symbols-outlined fechar">close</span></a>
                        </button>
                    </div>
                    <h2 class="titulo titulo2 ">Criar Conta</h2>
                    
                    <p class="desc desc2">Use seu e-mail para cadastrar-se:</p>

                    <form class="form" action="cliente_process.php" method="POST">
                        <input type="hidden" name="type" value="register">
                        <label class="label-input" for="nome">
                            <span class="material-symbols-outlined icones">person</span>
                            <input type="text" id="nome" name="nome" placeholder="Nome">
                        </label>

                        <label class="label-input" for="cpf">
                        <span class="material-symbols-outlined icones">person_pin</span>
                            <input type="text" id="cpf" name="cpf" placeholder="CPF">
                        </label>

                        <label class="label-input" for="telefone">
                        <span class="material-symbols-outlined icones">call</span>
                            <input type="text" id="telefone" name="telefone" placeholder="Telefone">
                        </label>

                        <label class="label-input" for="email">
                            <span class="material-symbols-outlined icones">mail</span>
                            <input type="email" id="email" name="email" placeholder="Email">
                        </label>

                        <label class="label-input" for="login">
                            <span class="material-symbols-outlined icones">person</span>
                            <input type="text" id="login" name="login" placeholder="Login">
                            <!-- </label>
                    
                    <label class="label-input" for="senha"> -->
                            <span class="material-symbols-outlined icones">lock</span>
                            <input type="password" id="senha" name="senha" placeholder="Senha">
                        </label>

                        <label class="label-input" for="sexo">
                        <span class="material-symbols-outlined icones">wc</span>
                            <select class="sexo" name="sexo">
                                <option value="">Nenhum</option>
                                <option value="F">Feminino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </label>

                        <button class="btn_Cad" onclick="">Cadastrar</button>
                    </form>
                </div>
            </div>
            <div class="conteudo conteudo2">
                <div class="coluna1">
                    <h2 class="titulo titulo1 ">Ei!</h2>
                    <p class="desc desc1">Crie uma conta</p>
                    <p class="desc desc1">e agende o seu serviço!</p>
                    <button id="signup" class="btn btn_Entrar1">Cadastrar</button>
                </div>
                <div class="coluna2">
                    <h2 class="titulo titulo2">Entrar no sistema</h2>

                    <p class="desc desc2">Use o e-mail para entrar na sua conta:</p>
                    <form class="form" method="POST" action="cliente_process.php" enctype="multipart/form-data">
                        <input type="hidden" name="type" value="login">
                        <label class="label-input" for="login">
                            <span class="material-symbols-outlined icones">mail</span>
                            <input type="text" id="login" name="login" placeholder="Digite seu Login">
                        </label>

                        <label class="label-input" for="senha2">
                            <span class="material-symbols-outlined icones">lock</span>
                            <input type="password" id="senha2" name="senha2" placeholder="Digite sua Senha">
                        </label>

                        <a class="password" a href="Page_Contato.php">Esqueceu sua senha?</a>
                        <button class="btn btn_Entrar" onclick="">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/js_LoginCad.js"></script>

    <!-- MOSTRA MENSAGEM DA SESSION POR MEIO DE JS -->
    <script>
        
        let msg = "<?= $_SESSION['msg'] ?>";

        if (msg.length > 0) {
            window.alert(msg);
        }

    </script>


    <footer>
        Barbearia Dias
    </footer>
</body>

</html>