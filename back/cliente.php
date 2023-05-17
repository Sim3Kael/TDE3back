<?php

class Cliente {
  private $id;
  private $nome;
  private $passagem;
  public $poltrona;
  private $CPF;
/*
  public function __construct($nome,$passagem, $poltrona, $CPF) {
    $this->nome = $nome;
    $this->passagem = $passagem;
    $this->poltrona = $poltrona;
    $this->CPF = $CPF;
  }
*/
  public function setId($id){
    $this->id = $id;
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function setNome($nome){
    $this->nome = $nome;
  }
  
  public function getNome(){
    return $this->nome;
  }

public function setPassagem($passagem){
  $this->passagem = $passagem;
}

public function getPassagem(){
  return $this->passagem;
}

public function setPoltrona($poltrona){
  $this->poltrona = $poltrona;
}

public function getPoltrona() {
    return $this->poltrona;
  }
public function setCPF($CPF){
  $this->CPF = $CPF;
}
  
  public function getCPF() {
       return $this->CPF;
  }

}
