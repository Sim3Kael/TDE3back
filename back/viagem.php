<?php

class Viagem{
  private $ponto_partida;
  private $ponto_chegada;
  private $tempo_viagem;
  private $data_saida;
  private $data_retorno;
  private $distancia;
  private $rotas;

  public function __construct($ponto_partida, $ponto_chegada, $tempo_viagem, $data_saida, $data_retorno, $distancia, $rotas){
    $this->ponto_partida = $ponto_partida;
    $this->ponto_chegada = $ponto_chegada;
    $this->tempo_viagem = $tempo_viagem;
    $this->data_saida = $data_saida;
    $this->data_retorno = $data_retorno;
    $this->distancia = $distancia;
    $this->rotas = $rotas;
  }

  public function getPontoPartida(){
    return "Origem: " . $this->ponto_partida;
  }
  
  public function getPontoChegada(){
    return "Destino: " . $this->ponto_chegada;
  }
  
  public function getTempoViagem(){
    return "O tempo de viagem é de: " . $this->tempo_viagem . " horas";
  }
  
  public function getDataSaida(){
    return "A data de saída é: " . $this->data_saida;
  }

  public function getDataRetorno(){
    return "O ônibus retornará: " . $this->data_retorno;
  }

  public function getDistancia(){
    return "A distância é de aproximadamente: " . $this->distancia . "Km";
  }  

  public function getRotas(){
    echo "A rota a ser feita será:\n";
    return $this->rotas;
  } 

}
echo "\nInsira a cidade origem: ";
$PontoPartida = fgets(STDIN);

echo "Insira a cidade destino: ";
$PontoChegada = fgets(STDIN);

$DataSaida = "10/04/2022";
$DataRetorno = "20/04/2022";
$Rotas = ["Cidade_2", "Cidade_3", "Cidade_4", "Cidade_8"];
$TempoViagem = count($Rotas);
$Distancia = count($Rotas) * 50;

$viagem = new Viagem($PontoPartida, $PontoChegada, $TempoViagem, $DataSaida, $DataRetorno, $Distancia, $Rotas);

echo "\n".$viagem->getPontoPartida();
echo $viagem->getPontoChegada();
echo $viagem->getTempoViagem()."\n";
echo $viagem->getDataSaida()."\n";
echo $viagem->getDataRetorno()."\n";
echo $viagem->getDistancia()."\n";


$rotas = $viagem->getRotas();
foreach ($rotas as $rota) {
  echo $rota . "\n";
}

