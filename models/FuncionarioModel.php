<?php

  class Funcionario {

    public $codmatri;
    public $nome;
    public $cpf;
    public $telefone;
    public $email;
    public $rua;
    public $bairro;
    public $uf;
    public $cidade;
    public $cep;
    public $login;
    public $senha;
    public $sexo;

  }

  interface FuncionarioDAOInterface {



    public function buildFunc($dataFunc);
    public function carregarFuncionarios();

  }