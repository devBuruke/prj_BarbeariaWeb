function imprimir(){
    var botao = document.getElementById('botao');
    var resultado = confirm("Deseja imprimir a página?");
    var vrbotao = document.querySelector("#botao")
    if (resultado == true) {
        // document.getElementById("botao").disabled = true;
        botao.style.background = '#252525';
        botao.style.border = 'none';
        vrbotao.value = ""
        window.print();

    }
    else{
        alert("Você desistiu de excluir o item " + itemSelecionado + " da lista!");
       
    }
}   

