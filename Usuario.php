<?php

class Usuario Extends Permissao{

  public $telefone;
  public $dataCadastro;
  public $nome;

  function __contruct() {
    return $this;
  }

  public function cadastrar() {
    if (is_null($this->nome)) {
      throw new Exception('Nome não está preenchido, ou inválido.');
    }
    if (is_null($this->telefone)) {
      throw new Exception('Telefone não está preenchido, ou inválido.');
    }
    if (is_null($this->getNivel())) {
      throw new Exception('Nível permissão não está preenchido, ou inválido.');
    }
    $this->dataCadastro =  date('d/m/Y H:i:s ');
  }

  public function preencherDados($nome,  $telefone, $nivel) {
    if (is_string($nome)) {
      $this->nome = $nome;
    }
    if(is_string($telefone)) {
      $this->telefone = $telefone;
    }
    if (is_numeric($nivel)) {
     $this->setNivel($nivel);
    }
  }

  public function getTelefone() {
    return $this->telefone;
  }

  public function getDataCadastro(){
    return $this->dataCadastro;
  }

  public function getNome() {
    return $this->nome;
  }

}