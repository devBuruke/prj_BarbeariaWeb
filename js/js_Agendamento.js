function valida_campos(){
    var valorserv = document.querySelector("#id_servicos").value;
    var valorfunc = document.querySelector("#funcionarios").value;
    
    if(document.getElementById("nome").value==""){
        alert('Por favor, preencha o campo nome');
        document.getElementById("nome").focus();
        return false
    }
    if(valorserv == "op1"){
        alert('Por favor, Selecione o SERVIÇO desejado!');
        return false;
    }
    if(document.getElementById("data").value==""){
        alert('Por favor, Selecione a DATA desejada!');
        return false;
    }
    if(document.getElementById("horario").value==""){
        alert('Por favor, Selecione o HORÁRIO desejado!');
        return false;
    }
    if(valorfunc == "op1"){
        alert('Por favor, Selecione o FUNCIONÁRIO desejado!');
        return false;
    }
    else{
        window.open("Page_Confirmacao.php", "Imprima a confirmação de horário")
    }
}   