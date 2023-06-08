<?php

  class Agendamento {

    public $codagendamento;
    public $hora;
    public $dataag;
    public $totalserv;
    public $Cod_clie_agenda;
    public $Cod_func_agenda;
    public $Cod_servico_agenda;

    // public function imageGenerateName() {
    //   return bin2hex(random_bytes(60)) . ".jpg";
    // }

  }

  interface AgendamentoDAOInterface {

    public function buildAgendamento($agendamento);
    // public function findAll();
    public function carregarAgendamento();
    public function BuscarAgendamentos($hora, $dataagenda);
    public function SalvarAgendamento(Agendamento $dataag);
    public function Atualizar(Agendamento $agendamento);
    public function ExcluirAgendamento($codagendamento);
    public function carregarAgendamentos();
    // public function carregarServicos();
  }

