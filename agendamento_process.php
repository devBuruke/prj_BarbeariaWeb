<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/AgendamentoModel.php");
    require_once("dao/AgendamentoDAO.php");
    require_once("models/Message.php");
    require_once("DAO/ServicoDAO.php");

    $message = new Message($BASE_URL);
    $agendamentoDAO = new AgendamentoDAO($conn, $BASE_URL);


    $dadosag = $_POST;

    //RESGATA QUAL É O TIPO DO FORMULÁRIO
    //filter_input Função que filtra os dados inseridos no INPUT
    $type = filter_input(INPUT_POST, "type");

    //VERIFICANDO/DIFERENCIANDO O TIPO DO FORMULÁRIO
    if($type === "register"){
        //MAPEANDO OS DADOS DO FORMULÁRIO
        $hora = filter_input(INPUT_POST, "horario");
        $dataag = filter_input(INPUT_POST, "data");
        $Cod_clie_agenda = filter_input(INPUT_POST, "idclie");
        $Cod_servico_agenda = filter_input(INPUT_POST, "servico");
        $Cod_func_agenda =  filter_input(INPUT_POST, "func");

         $agendamento = new Agendamento();

        $agendamento->hora = $hora;
        $agendamento->dataag = $dataag;
        $agendamento->totalserv = 10;
        $agendamento->Cod_clie_agenda = $Cod_clie_agenda;
        $agendamento->Cod_servico_agenda = filter_input(INPUT_POST, "servico");
        $agendamento->Cod_func_agenda =  $Cod_func_agenda;
      
       
      
                $agendamentoDAO->SalvarAgendamento($agendamento);
                $message->setMessage("Agendamento realizado", "sucess", "Page_MeusAgendamentos.php");

    }elseif ($type === "delete") {
        $codagendamento = $_POST['ID'];
        $agendamentoDAO->ExcluirAgendamento($codagendamento);
        $message->setMessage("Agendamento excluido", "sucess", "Page_MeusAgendamentos.php");
    }else {
      
         $message->setMessage("Horário já agendado, tente outro horário.", "error", "auth.php");
    }

?>