<?php

$hostname = "localhost";
$bancoDeDados = "clientes";

$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancoDeDados);

if($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
}

else {
    echo "Conectando ao Banco de Dados";
 }