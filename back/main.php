<?php

require_once 'viagem.php';
require_once 'rodoviaria.php';
require_once 'cliente.php';
require_once 'conexao.php';


$cliente = new Cliente();
$cliente->setNome();
$cliente->setPassagem(readline());
$cliente->setPoltrona(43);
$cliente->setCPF("12345678910");

$clienteDAO = new ClienteDAO();
$clienteDAO->delete(3);
$clienteDAO->read();
foreach($clienteDAO->read() as $cliente){
    echo $cliente['passagem']."<br>".$cliente["poltrona"]."<br>".$cliente['CPF']."<br>";
}

$rodoviaria = new Rodoviaria();
$rodoviaria->setCompanhia("Smarturismo");
$rodoviaria->setPortao(120);
$rodoviaria->setLotacao("");
$rodoviaria->setClasse("");

$rodoviariaDAO = new RodoviariaDAO();
$rodoviariaDAO->delete(4);
$rodoviariaDAO->read();
foreach($rodoviariaDAO->read() as $rodoviaria){
    echo $rodoviaria['companhia']."<br>".$rodoviaria["portao"]."<br>".$rodoviaria['lotacao']."<br>".$rodoviaria['classe']."<br>";
}

$viagem = new Viagem();
$viagem->setPontoPartida("");
$viagem->setPontoChegada(readline(""));
$viagem->setTempoViagem("");
$viagem->setDataSaida("");
$viagem->setDataRetorno("");

$viagemDAO = new ViagemDAO();
$viagemDAO->delete(3);
$viagemDAO->read();
foreach($viagemDAO->read() as $viagem){
    echo $viagem['ponto_Partida']."<br>".$viagem["ponto_chegada"]."<br>".$viagem['tempo_viagem']."<br>".$viagem["data_saida"]."<br>".$viagem['data_retorno']."<br>";
}
