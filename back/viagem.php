<?php

class Viagem{
  private $id;
  private $ponto_partida;
  private $ponto_chegada;
  private $data_saida;
  private $data_retorno;
/*
  public function __construct($ponto_partida, $ponto_chegada, $tempo_viagem, $data_saida, $data_retorno, $distancia, $rotas){
    $this->ponto_partida = $ponto_partida;
    $this->ponto_chegada = $ponto_chegada;
    $this->tempo_viagem = $tempo_viagem;
    $this->data_saida = $data_saida;
    $this->data_retorno = $data_retorno;
    $this->distancia = $distancia;
    $this->rotas = $rotas;
  }
*/
public function setId($id){
    $this->id = $id;
}

public function setPontoPartida($ponto_partida){
  $this->ponto_partida = $ponto_partida;
}

public function setPontoChegada($ponto_chegada){
  $this->ponto_chegada = $ponto_chegada;
}


public function setDataSaida($data_saida){
  $this->data_saida = $data_saida;
}

public function setDataRetorno($data_retorno){
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