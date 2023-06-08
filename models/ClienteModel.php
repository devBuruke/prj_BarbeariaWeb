<?php

  class Cliente {

    public $id;
    public $nome;
    public $cpf;
    public $telefone;
    public $email;
    public $login;
    public $senha;
    public $sexo;
    
    //vou fazer depois dos problemas principais estiverem resolvidos
    // public $token;

  }

  interface ClienteDAOInterface {


    public function Const_cliente($cliente);
    public function criar_clie(Cliente $cliente);
    public function deletar_clie(Cliente $id);
    public function editar_cliente(Cliente $cliente);
    public function findByEmail($email);

  }