<?php

require_once 'viagem.php';
require_once 'viagemDAO.php';
require_once 'cliente.php';
require_once 'clienteDAO.php';
require_once 'conexao.php';


 $viagem = new Viagem();
 $viagem->setPontoPartida();
 $viagem->setPontoChegada();
 $viagem->setDataSaida();
 $viagem->setDataRetorno();

 $viagemDAO = new ViagemDAO();
 $viagemDAO->delete(1);
 $viagemDAO->read();
 foreach($viagemDAO->read() as $viagem){
     echo $viagem['ponto_Partida']."<br>".$viagem["ponto_chegada"]."<br>".$viagem["data_saida"]."<br>".$viagem['data_retorno']."<br>";
}

$cliente = new Cliente();
$cliente->setNome();
$cliente->setPassagem();
$cliente->setPoltrona();
$cliente->setCPF();

$clienteDAO = new ClienteDAO();
$clienteDAO->delete(1);  
$clienteDAO->read();
foreach($clienteDAO->read() as $cliente){
    echo $cliente["nome"]."<br>".$cliente["passagem"]."<br>".$cliente["poltrona"]."<br>".$cliente["CPF"]."<br>";
}

