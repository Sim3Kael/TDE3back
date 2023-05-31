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
    input[type="number"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    #vai {
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

    #vai:hover {
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

    <label for="nome">Nome do viajante</label>
      <input name="nome" type="text" id="nome" placeholder="Nome do cliente">

      <label for="passagem">Número da passagem</label>
      <input name="passagem" type="text" id="passagem" placeholder="Número de passagem">

      <label for="cpf">CPF do viajante</label>
      <input name="cpf" type="number" id="cpf" placeholder="CPF do cliente">

      <label for="poltrona">Poltrona dentro do busão</label>
      <input name="poltrona" type="number" id="poltrona" placeholder="Poltrona">

      <input id="vai" type="submit" name="inserirr" href="/front/main.php">

    </form>
  </div>
</body>

</html>

<?php

if (isset($_GET['inserirr'])) {
  $nome = $_GET['nome'];
  $passagem = $_GET['passagem'];
  $poltrona = $_GET['poltrona'];
  $cpf = $_GET['cpf'];

  $InsiraDados = $instance->prepare('INSERT INTO cliente(nome,passagem,poltrona,cpf) VALUES (?,?,?,?)');
  $InsiraDados->bindValue(1, $nome);
  $InsiraDados->bindValue(2, $passagem);
  $InsiraDados->bindValue(3, $poltrona);
  $InsiraDados->bindValue(4, $cpf);

  if ($InsiraDados->execute()) {
    echo "Inserido 👍";
  } else {
    echo "Erro 💀";
  }
}