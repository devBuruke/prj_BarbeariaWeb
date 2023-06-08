<?php

require_once("models/ServicoModel.php");
require_once("models/Message.php");
require_once("globals.php");


class ServicoDAO implements ServicoDAOInterface
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

  public function buildServico($data)
  {

    $servico = new Servico();

    $servico->codservico = $data["codservico"];
    $servico->nomeserv = $data["nomeserv"];
    $servico->precoserv = $data["precoserv"];
    $servico->Codcateg_categoria = $data["tb_categoria_codcateg"];

    return $servico;
  }

  public function SalvarServ(Servico $servico)
  {

    $stmt = $this->conn->prepare("INSERT INTO tb_servico (
           nomeserv, precoserv, tb_categoria_codcateg
      ) VALUES ( :nomeserv, :precoserv, :Codcateg_categoria
      )");

    $stmt->bindParam(":nomeserv", $servico->nomeserv);
    $stmt->bindParam(":precoserv", $servico->precoserv);
    $stmt->bindParam(":Codcateg_categoria", $servico->Codcateg_categoria);

    $stmt->execute();

    // Redireciona e apresenta mensagem de sucesso
    $this->message->setMessage("Servico adicionado!", "success", "index.php");
  }

  public function Atualizar(Servico $servico)
  {

    $stmt = $this->conn->prepare("UPDATE tb_servico SET 
        nomeserv = :nomeserv,
        precoserv = :precoserv
        tb_categoria_codcateg = :Codcateg_categoria
        WHERE codservico = :codservico
      ");

    $stmt->bindParam(":codservico", $servico->codservico);
    $stmt->bindParam(":nomeserv", $servico->nomeserv);
    $stmt->bindParam(":precoserv", $servico->precoserv);
    $stmt->bindParam(":Codcateg_categoria", $servico->Codcateg_categoria);

    $stmt->execute();

    // Redireciona e apresenta mensagem de sucesso
    $this->message->setMessage("Servico atualizado com sucesso!", "success", "index.php");
  }

  public function ExcluirServ($codservico)
  {

    $stmt = $this->conn->prepare("DELETE FROM tb_servico WHERE codservico = :codservico");

    $stmt->bindValue(":codservico", $codservico);

    $stmt->execute();

    // Redireciona e apresenta mensagem de sucesso
    $this->message->setMessage("Servico removido!", "success", "index.php");
  }

  public function carregarServicos()
  {

    $stmt = $this->conn->query("SELECT * FROM tb_servico");
    $stmt->execute();

    $servico = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $servico;
  }
}
