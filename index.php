<?php



include_once("templates/header.php");
?>
<div class="back_bolinha">


    <section class="topico">
    <div class="interface">
        <div class="flex">

        <div class="slideshow-container">

<div class="mySlides fade">
    <div class="numbertext">1 / 4
    </div>
    <img src="imagens/inicio.jpg" style="width:100%" width="350px" height="850px">
    <div class="text">Corte Surreal do Dias</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="imagens/teste2.jpg" style="width:100%" width="350px" height="850px">
    <div class="text">Barba e Corte</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="imagens/teste3.jpg" style="width:100%" width="350px" height="850px">
    <div class="text">Pigmentação</div>
</div>

<div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="imagens/teste4.jpg" style="width:100%" width="350px" height="850px">
    <div class="text">Promoção do Dias</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
<span class="dot" onclick="currentSlide(4)"></span>
</div>

<!-- <footer>
Barbearia Dias
</footer> -->

        </div>
    </div>

    </section>

    <section class="topico">

    <div class="interface">
        <div class="flex">
            


        <h1 id="quem-somos" class="titulo">Quem Somos</h1>
        <div class="ladoalado">
            <figure>
                <img src="imagens/barbe dias logo.png" alt="Logo barbearia" height="500px" width="500px" class="fundo" id="bloco">
            </figure>
            <figure>
                <img class="imagem_est" src="imagens/dias_barbeiro.png" height="500px" width="500px" alt="O DIAS!" id="bloco">
            </figure>

        </div>
        <div class="ladoalado">

            <p class="quemSou">
                Quem sou eu? <br>
                Bem-vindo à minha barbearia! Meu nome é Gabriel, sou um profissional experiente e qualificado.
                Sou apaixonado por trazer o melhor em cuidado pessoal para meus clientes e estou comprometido em fornecer um serviço excepcional
                além disso, estou sempre atualizado com as últimas
                tendências e técnicas de barbearia, então posso ajudá-lo a criar o visual que você deseja.
            </p>
        </div>

        </div>
    </div>


</section>

<section class="topico">

<div class="interface">
        <div class="flex">
    
        
    <h1 id="servicos" class="titulo"> Serviços Ofertados</h1>

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

<h1 class="usandojquery titulo">Tabela de Serviços</h1>
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

        
        </div>
    </div>

</section>

<section class="topico">

<div class="interface">
        <div class="flex">
            
        <h1 id="contato" class="titulo">Contato</h1>



<form class="contato" action="">
    <p>
        <b>Informações</b>
    </p>
    <label class="caixa" for="nome">
        <span class="material-symbols-outlined">person</span>
        <input class="input" type="text" name="nome_clie" size="30px" placeholder="NOME" id="id_nome">
    </label>
    <BR>
    <BR>

    <label class="caixa" for="id_tel"><span class="material-symbols-outlined">phone</span>
        <input class="input" type="text" name="nome_tel" size="25px" placeholder="TELEFONE" id="id_tel" onblur="mascaraDeTelefone(this)">
        <br>
    </label>
    <br><br>

    <label class="caixa"><span class="material-symbols-outlined">
            rate_review
        </span>
        <select class="assunto" name="assunto" id="assunto">
            <option value="1op">ASSUNTO</option>
            <option value="rec">Reclamação</option>
            <option value="sug">Sugestão</option>
            <option value="elg">Elogio</option>
            <option value="alt">Aleatório</option>
        </select>
    </label>
    <br>
    <p>
        Sobre o Assunto:
    </p>
    <textarea class="observacao" name="obs" id="id_obs" size="50px" placeholder="Descreva de acordo com o assunto selecionado." cols="70" rows="25"></textarea>
    <br>
    <input class="btn_contato" type="submit" value="Enviar" onclick="valida_campos(this)">
    <br><br>
    <input class="btn_contato btn_red" type="reset" value="Redefinir">

</form>
<script src="js/js_Contato.js"></script>


        </div>
    </div>

   
</section>

</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>



<?php
include_once("templates/footer.php");
?>