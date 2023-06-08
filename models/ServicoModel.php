<?php

class Servico
{

  public $codservico;
  public $nomeserv;
  public $precoserv;
  public $Codcateg_categoria;
}

interface ServicoDAOInterface
{

  public function buildServico($data);
  public function SalvarServ(Servico $servico);
  public function Atualizar(Servico $servico);
  public function ExcluirServ($codservico);
  public function carregarServicos();
}
