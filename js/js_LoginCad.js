
var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

var body = document.querySelector("body");


btnSignin.addEventListener("click", function () {
   body.className = "sign-in-js"; 
});

btnSignup.addEventListener("click", function () {
    body.className = "sign-up-js";
})

function valida_campos(){
    if(document.getElementById("nome").value==""){
        alert('Por favor, preencha o campo NOME!');
        document.getElementById("nome").focus();
        return false;
    }
    if(document.getElementById("email").value==""){
        alert('Por favor, preencha o campo EMAIL!');
        document.getElementById("email").focus();
        return false;
    }
    if(document.getElementById("senha").value==""){
        alert('Por favor, preencha o campo SENHA!');
        document.getElementById("SENHA").focus();
        return false;
    }
    else
    {
        alert('CADASTRO EFETUADO COM SUCESSO!');
        window.open("index.html");
        return true;
    }

}
function valida_coluna2(){
    if(document.getElementById("email2").value==""){
        alert('Por favor, preencha o campo EMAIL!');
        document.getElementById("email2").focus();
        return false;
    }
    if(document.getElementById("senha2").value==""){
        alert('Por favor, preencha o campo SENHA!');
        document.getElementById("senha2").focus();
        return false;
    }
    else
    {
        window.open("index.html");
        return true;
    }

}
// funcao para mostrar tela de carregamento forçado
// var i = setInterval(function () {
//     clearInterval(i);

//     // O código desejado é apenas isto:
//     document.getElementById("load").style.display = "none";
//     document.getElementById("conteudo").style.display = "block";

// }, 2000);
function loading(){
    $('#load').css('display','none');
}