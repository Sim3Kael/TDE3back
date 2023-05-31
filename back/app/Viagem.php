<?php

namespace app;

class Viagem{
  private $id;
  private $ponto_partida;
  private $ponto_chegada;
  private $data_saida;
  private $data_retorno;

  public function __construct($id,$ponto_partida, $ponto_chegada, $data_saida, $data_retorno){
    $this->id = $id;
    $this->ponto_partida = $ponto_partida;
    $this->ponto_chegada = $ponto_chegada;
    $this->data_saida = $data_saida;
    $this->data_retorno = $data_retorno;
  }

  public function getId(){
    return $this->id;
  }
  

  public function getPontoPartida(){
    return $this->ponto_partida;
  }
  
  public function getPontoChegada(){
    return $this->ponto_chegada;
  }
  
  public function getDataSaida(){
    return $this->data_saida;
  }

  public function getDataRetorno(){
    return $this->data_retorno;
  }
}