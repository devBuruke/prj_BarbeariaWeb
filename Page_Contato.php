<?php
include_once("templates/header.php");
?>


<body>
<h1>Contato</h1>
<div class="back_bolinha">


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
    <input class="btn_contato" type="submit"value="Enviar" onclick="valida_campos(this)">
<br><br>
    <input class="btn_contato btn_red" type="reset" value="Redefinir" >




</form>

</div>

  <script src="js/js_Contato.js"></script>
</body>
</html>

<?php
include_once("templates/footer.php");
?>