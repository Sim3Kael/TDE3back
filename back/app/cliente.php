<?php

namespace app;

class Cliente {
  private $id;
  private $nome;
  protected $passagem;
  public $poltrona;
  protected $CPF;

  public function __construct($id, $nome, $passagem, $poltrona, $CPF) {
    $this->id = $id;
    $this->nome = $nome;
    $this->passagem = $passagem;
    $this->poltrona = $poltrona;
    $this->CPF = $CPF;
  }

  public function getId(){
    return $this->id;
  }
  public function getNome(){
    return $this->nome;
  }
  
  public function getCliente() {
       return $this->CPF;
  }

  public function getPoltrona() {
      return $this->poltrona;
    }
  
  public function getPassagem(){
    return $this->passagem;
  }
}
