$(document).ready(function () {
	$('table#horario tbody tr:odd').addClass('impar');
	$('table#horario tbody tr:even').addClass('par');
	$('table#horario tbody tr').hover(
		function () {
			$(this).addClass('destacar');
		},
		function () {
			$(this).removeClass('destacar');
		});
});

function ServBtn(){
	var comboServ = document.getElementById("id_servicos");
	if(document.getElementById("id_servicos").options[3].selected){
		comboServ.selectedIndex = 2;
		window.location.replace("Page_Agendamento.php");
	}
	else
	{
		alert('Selias')
	}
}
function Agendar(){
	
	// document.querySelector("#servicos").innerHTML = "Barba";
	// window.location.replace("Page_Agendamento.html");
		window.location.replace("Page_Agendamento.php");
		var comboServ = document.getElementById("id_servicos");
		comboServ.selectedIndex = 2;
		
	
}
function AgendarBarba(){
	
	// document.querySelector("#id_servicos").text = Barba;
	window.location.replace("Page_Agendamento.php");
	var comboServ = document.getElementById("id_servicos");
	comboServ.value = 2;
	comboServ.text= "Barba"



}
