<?php

require_once("models/AgendamentoModel.php");
require_once("models/Message.php");



class AgendamentoDAO implements AgendamentoDAOInterface
{

  private $conn;
  private $url;
  private $message;

  public function __construct(PDO $conn, $url)
  {
    $this->conn = $conn;
    $this->url = $url;
    $this->message = new Message($url);
  }
  public function buildAgendamento($data)
  {
    $agendamento = new Agendamento();


    // $data = $_POST['dataCasdastro'];
    $agendamento->id = $data["codagendamento"];
    $agendamento->hora = $data["hora"];
    $agendamento->dataag = $data["dataagenda"];
    $agendamento->totalserv = $data["totalserv"];
    $agendamento->Cod_clie_agenda = $data["Cod_clie_agenda"];
    $agendamento->Cod_func_agenda = $data["Cod_func_agenda"];
    $agendamento->Cod_servico_agenda = $data["Cod_servico_agenda"];

    return $agendamento;
  }

  public function carregarAgendamentos()
  {

    $stmt = $this->conn->query("SELECT * FROM tb_agendamento");
    $stmt->execute();

    $agendamento = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $agendamento;
  }

  public function carregarAgendamento()
  {

    $agendamentos = [];


    $query = "SELECT * FROM tb_agendamento ORDER BY codagendamento DESC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    $agendamentos =  $stmt->fetchAll(PDO::FETCH_ASSOC);
    $agendas = array();

    foreach ($agendamentos as $agendamento) {
      $agendas[] = $this->buildAgendamento($agendamento);
    }


    return $agendas;
  }

  public function BuscarAgendamentos($hora, $dataagenda)
  {

    $movies = array();

    $stmt = $this->conn->prepare("SELECT * FROM tb_agendamento
                                    WHERE dataagenda = :dataagenda AND hora = :hora");

    $stmt->bindParam(":hora", $hora);
    $stmt->bindParam(":dataagenda", $dataagenda);
  

    $stmt->execute();

    if ($stmt->rowCount() > 0) {

      $moviesArray = $stmt->fetchAll();

      foreach ($moviesArray as $agendamento) {
        $movies[] = $this->buildAgendamento($agendamento);
      }
    }

    return $movies;
  }

  public function SalvarAgendamento(Agendamento $agendamento)
  {

    $stmt = $this->conn->prepare("INSERT INTO tb_agendamento(dataagenda, hora, totalserv, tb_funcionario_codmatri, tb_cliente_codclie, tb_servico_codservico)
      VALUES(:dataagenda, :hora, :totalserv, :Cod_func_agenda, :Cod_clie_agenda, :Cod_servico_agenda)");

    // $stmt->bindParam(":codagendamento", $agendamento->id);

    $stmt->bindParam(":hora", $agendamento->hora);
    $stmt->bindParam(":dataagenda", $agendamento->dataag);
    $stmt->bindParam(":totalserv", $agendamento->totalserv);
    $stmt->bindParam(":Cod_func_agenda",  $agendamento->Cod_func_agenda);
    $stmt->bindParam(":Cod_clie_agenda",  $agendamento->Cod_clie_agenda);
    $stmt->bindParam(":Cod_servico_agenda", $agendamento->Cod_servico_agenda);

    $stmt->execute();

    // Mensagem de sucesso por adicionar Agendamento
    $this->message->setMessage("Agendamento realizado com sucesso!", "success", "index.php");
  }


  public function Atualizar(Agendamento $data)
  {

    $stmt = $this->conn->prepare("UPDATE tb_agendamento SET 
        hora = :hora,
        dataagenda = :dataagenda,
        totalserv = :totalserv,
        tb_funcionario_codmatri = :Cod_func_agenda, 
        tb_cliente_codclie = :Cod_clie_agenda, 
        tb_servico_codservico = :Cod_servico_agenda
        WHERE codagendamento = :codagendamento");

    $agendamento= new Agendamento();
    $agendamento->id = $data["codagendamento"];
    $agendamento->hora = $data["hora"];
    $agendamento->dataag = $data["dataagenda"];
    $agendamento->totalserv = $data["totalserv"];

    //INNER JOIN
    $agendamento->Cod_clie_agenda = $data["Cod_clie_agenda"];
    $agendamento->Cod_func_agenda = $data["Cod_func_agenda"];
    $agendamento->Cod_servico_agenda = $data["Cod_servico_agenda"];

    $stmt->execute();

    // Mensagem de sucesso por editar agendamento
    $this->message->setMessage("Agendamento atualizado com sucesso!", "success", "Page_MeusAgendamentos.php");
  }

  // public function destroy($id) {
  // public function ExcluirAgendamento($codag)
  // {

  //   $stmt = $this->conn->prepare("DELETE FROM tb_agendamento WHERE codagendamento = :codagendamento");

  //   $stmt->bindParam(":codagendamento", $codag);

  //   $stmt->execute();

  //   // Mensagem de sucesso por remover Agendamento
  //   $this->message->setMessage("Agendamento retirado com sucesso!", "success", "Page_InicioLog.php");
  // }
  public function ExcluirAgendamento($codagendamento)
{
    $stmt = $this->conn->prepare("DELETE FROM tb_agendamento WHERE codagendamento = :codagendamento");
    $stmt->bindParam(":codagendamento", $codagendamento);
    $stmt->execute();
}
}
