<?php

try {
    $instance = new PDO('mysql:host=localhost;dbname=tde', 'root', '');
} catch (Exception $erro) {
    echo $erro->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rodoviária</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    div {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #dddddd;
      border-radius: 4px;
      margin-top: 100px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 18px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #FF4B2B;
    }

    input[type="text"],
    input[type="date"],
    input[type="checkbox"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    #continue {
      margin-top: 20px;
      background-color: #FF4B2B;
      color: #ffffff;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      transition: 0.5s;
      margin-bottom: 10px;
      border-radius: 18px;
    }

    #continue:hover {
      background-color: #9c2d1a;
      padding: 16px 24px;

    }

    #checkIda {
      color: #45a049;
    }
  </style>
</head>

<body>
  <div>
  <h2>RODOVIÁRIA 🍺</h2>
  <form method="GET" action="">
      <label for="ponto_partida">Destino</label>
      <input name="ponto_partida" type="text" id="destino" placeholder="Destino da viagem" >

      <label for="ponto_chegada">Origem</label>
      <input name="ponto_chegada" type="text" id="origem" placeholder="Origem da viagem">

      <label >Data de ida</label>
      <input name="data_saida" type="date" id="dataIda" action="viagem.php" required>

      <label >Data de volta</label>
      <input name="data_retorno" type="date" id="dataVolta" action="viagem.php" required>

      <input id="continue" type="submit" name="inserir" href="/front/confirm.php">
    </form>
  </div>
   
</body>
</html>
<?php
if (isset($_GET['inserir'])) {
  $ponto_partida = $_GET['ponto_partida'];
  $ponto_chegada = $_GET['ponto_chegada'];
  $data_saida = $_GET['data_saida'];
  $data_retorno = $_GET['data_retorno'];


  $InsiraDados = $instance->prepare('INSERT INTO viagem(ponto_partida,ponto_chegada,data_saida,data_retorno) VALUES (?,?,?,?)');
  $InsiraDados->bindValue(1, $ponto_partida);
  $InsiraDados->bindValue(2,  $ponto_chegada);
  $InsiraDados->bindValue(3, $data_saida );
  $InsiraDados->bindValue(4,  $data_retorno);

  if ($InsiraDados->execute()) {
    echo "Inserido 👍";
  } else {
    echo "Erro 💀";
  }
}