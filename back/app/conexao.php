<?php

try {
    $instance = new PDO('mysql:host=localhost;dbname=tde', 'root', '');
} catch (Exception $erro) {
    echo $erro->getMessage();
}

#INSERT

if (isset($_POST['inserir'])) {
    $nome = $_POST['nome'];
    $passagem = $_POST['passagem'];
    $poltrona = $_POST['poltrona'];
    $CPF = $_POST['cpf'];
    
    $inserir_cliente = $instance->prepare('INSERT INTO cliente(nome, passagem, poltrona, CPF) VALUES (?,?,?,?)');
    $inserir_cliente->bindValue(1, $nome);
    $inserir_cliente->bindValue(2, $passagem);
    $inserir_cliente->bindValue(3, $poltrona);
    $inserir_cliente->bindValue(4, $CPF);
    
    if ($inserir_cliente->execute()) {
        echo "Inserido";
    } else {
        echo "Erro";
    }
}
elseif(isset($_POST['bota'])) {
 $ponto_partida = $_POST['ponto_partida'];
 $ponto_chegada = $_POST['ponto_chegada'];
 $data_saida = $_POST['data_saida'];
 $data_retorno = $_POST['data_retorno'];

 $inserir_viagem = $instance->prepare('INSERT INTO viagem(ponto_partida, ponto_chegada, data_saida, data_retorno) VALUES (?,?,?,?)');
 $inserir_viagem->bindValue(1, $ponto_partida);
 $inserir_viagem->bindValue(2, $ponto_chegada);
 $inserir_viagem->bindValue(3, $data_saida);
 $inserir_viagem->bindValue(4, $data_retorno);

    if ($inserir_viagem->execute()) {
        echo "Inserido";
    } else {
        echo "Erro";
    }
}

