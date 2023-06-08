<?php

require_once("models/ClienteModel.php");
require_once("models/Message.php");
require_once("globals.php");



class ClienteDao implements ClienteDAOInterface
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

  public function Const_cliente($cliente)
  {

    $usuario = new Cliente();

    $usuario->id = $cliente["codclie"];
    $usuario->nome = $cliente["nome"];
    $usuario->cpf = $cliente["cpf"];
    $usuario->telefone = $cliente["telefone"];
    $usuario->email = $cliente["email"];
    $usuario->login = $cliente["login"];
    $usuario->senha = $cliente["senha"];
    $usuario->sexo = $cliente["sexo"];

    return $usuario;
  }

  public function findByEmail($email) {

    if($email != "") {

      $result = $this->conn->prepare("SELECT * FROM tb_cliente WHERE email = :email");

      $result->bindParam(":email", $email);

      $result->execute();

      if($result->rowCount() > 0) {

        $data = $result->fetch();
        $user = $this->Const_cliente($cliente);
        
        return $user;

      } else {
        return false;
      }

    } else {
      return false;
    }

  }


  public function authenticateUser($login, $password)
  {

    $retorno = array();

    $query = "SELECT codclie, nome, cpf, telefone, email, login, senha, sexo
              FROM tb_cliente
              WHERE login = :login AND senha = :senha";

    $result = $this->conn->prepare($query);

    $result->bindParam(":login", $login);
    $result->bindParam(":senha", $password);
    $result->execute();

    $user = $result->fetch(PDO::FETCH_ASSOC);

    if (!empty($user)) {

      $retorno['erro'] = false;
      $retorno['usuario'] = $user;

    } else {

      $retorno['erro'] = true;
    }

    return $retorno;
  }


  public function criar_clie(Cliente $cliente)
  {


    $novo = $this->conn->prepare("INSERT INTO tb_cliente (
        nome, cpf, telefone, email, login, senha, sexo
      ) VALUES (
        :nome, :cpf, :telefone, :email, :login, :senha, :sexo
      )");

    $novo->bindParam(":nome", $cliente->nome);
    $novo->bindParam(":cpf", $cliente->cpf);
    $novo->bindParam(":telefone", $cliente->telefone);
    $novo->bindParam(":email", $cliente->email);
    $novo->bindParam(":login", $cliente->login);
    $novo->bindParam(":senha", $cliente->senha);
    $novo->bindParam(":sexo", $cliente->sexo);

    $novo->execute();

    $novoid =  $this->conn->lastInsertId();

    if ($novoid > 0) {
      //TER ATENÇÂO COMO DEIXAR ENTRAR DO LOGIN DIRETO PRA CONTA DELE ASSIM Q LOGAR.
      $this->message->setMessage("Cliente adicionado com sucesso!", "success", "Page_InicioLog.php");
    }
  }
  public function deletar_clie(Cliente $id)
  {


    $novo = $this->conn->prepare("DELETE FROM tb_cliente WHERE codclie = :codclie");

    $novo->bindParam(":codclie", $id);

    $novo->execute();

    // Mensagem de sucesso por remover filme
    $this->message->setMessage("Cliente removido com sucesso!", "success", "arquivo.php");
  }


  public function editar_cliente(Cliente $cliente)
  {
      


    $mudar = $this->conn->prepare("UPDATE tb_cliente SET
        nome = :nome,
        telefone = :telefone,
        email = :email,
        login = :login,
        senha = :senha,
        sexo = :sexo
        WHERE codclie = :codclie;       
      ");

    $mudar->bindParam(":nome", $cliente->nome);
// $mudar->bindParam(":cpf", $id->cpf);
    $mudar->bindParam(":telefone", $cliente->telefone);
    $mudar->bindParam(":email", $cliente->email);
    $mudar->bindParam(":login", $cliente->login);
    $mudar->bindParam(":senha", $cliente->senha);
    $mudar->bindParam(":sexo", $cliente->sexo);
    $mudar->bindParam(":codclie", $cliente->id);

    

    $mudar->execute();

    // Mensagem de sucesso por editar o dados 
    $this->message->setMessage("Cliente atualizado com sucesso!", "success", "Page_editar");
  }
}
