
function valida_campos(){
    var valorassunt = document.querySelector("#assunto").value;

    if(document.getElementById("id_nome").value==""){
        alert('Por favor, preencha o campo NOME!');
        document.getElementById("id_nome").focus();
        return false;
    }
    if(document.getElementById("id_tel").value==""){
        alert('Por favor, preencha o campo TELEFONE!');
        document.getElementById("id_tel").focus();
        return false;
    }
    if(valorassunt == "1op"){
        alert('Por favor, Selecione o ASSUNTO desejado!');
        return false;
    }
    if(document.getElementById("id_obs").value==""){
        alert('Por favor, preencha o campo OBSERVAÇÃO!');
        document.getElementById("id_obs").focus();
        return false;
    }
    else
    {
        alert('FOI REGISTRADO O SEU CONTATO COM SUCESSO!');
        window.open("Page_obrigado.html");
        return true;
    }

}
function mascaraDeTelefone(telefone){
    const textoAtual = telefone.value;
    var isCelular;
    var isTelefone;
    let textoAjustado;
    if(textoAtual.length == 11){
        isCelular = textoAtual.value;
        const partedd = textoAtual.slice(0,2);
        const parte1 = textoAtual.slice(2,7);
        const parte2 = textoAtual.slice(7,11);
        textoAjustado = `(${partedd}) ${parte1}-${parte2}`
    }
    if(textoAtual.length == 10){
        isTelefone = textoAtual.value;
        const partedd = textoAtual.slice(0,2);
        const parte1 = textoAtual.slice(2,6);
        const parte2 = textoAtual.slice(6,10);
        textoAjustado = `(${partedd}) ${parte1}-${parte2}`
    }
    // else {
    //     alert('DIGITE UM TELEFONE VÁLIDO!');
    // }
    telefone.value = textoAjustado;
}
