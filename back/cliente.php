<?php

class Cliente {
  protected $passagem;
  public $poltrona;
  protected $CPF;

  public function __construct($passagem, $poltrona, $CPF) {
    $this->passagem = $passagem;
    $this->poltrona = $poltrona;
    $this->CPF = $CPF;
  }

  public function getCliente() {
    if (strlen($this->CPF) === 11) {
      echo "CPF válido 👍 \n";
       return $this->CPF;
    } else {
      echo "Número de CPF inválido, tente novamente \n";
    }
  }

  public function getPoltrona() {
    if ($this->poltrona < 1 || $this->poltrona > 60){
      echo "Número de poltrona inválido! Só existem poltronas entre 1 e 60! \n";
    }
    else{
      echo "Número de poltrona válido 👍 \n";
      return $this->poltrona;
    }
  }
  
  public function getPassagem(){
    echo "Obrigado pela compra da passagem! Agradecemos a preferência 🍻😎 \n";
    return $this->passagem;
  }
}

$cliente = new Cliente(3, 9, 12);
echo "Compra realizada! 
Passagem número: " . $cliente->getPassagem() . " 
Poltrona número: " . $cliente->getPoltrona() . " 
CPF do cliente: " . $cliente->getCliente();

