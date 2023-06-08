<?php
  require_once("globals.php");
  require_once("models/FuncionarioModel.php");
  require_once("models/Message.php");

  class FuncionarioDAO implements FuncionarioDAOInterface {

    private $conn;
    private $url;
    private $message;

    public function __construct(PDO $conn, $url) {
      $this->conn = $conn;
      $this->url = $url;
      $this->message = new Message($url);
    }

    public function buildFunc($dataFunc) {

      $func = new Funcionario();

      $func->codmatri = $data["codmatri"];
      $func->nome = $data["nome"];
      $func->cpf = $data["cpf"];
      $func->telefone = $data["telefone"];
      $func->email = $data["email"];
      $func->rua = $data["rua"];
      $func->bairro = $data["bairro"];
      $func->cidade = $data["cidade"];
      $func->cep = $data["cep"];
      $func->login = $data["login"];
      $func->senha = $data["senha"];
      $func->sexo = $data["sexo"];

      return $func;

    }
    public function carregarFuncionarios(){
  
      $stmt = $this->conn->query("SELECT * FROM tb_funcionario");
      $stmt->execute();
  
      $funcionario = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
      return $funcionario;
    }

  }