
<?php

if(isset($_POST['submit'])) {
 include_once( "../back/conexao.php");
  //Parte de viagem
  $ponto_chegada =$_POST["destino"];
  $ponto_origem =$_POST["origem"];
  $data_saida =$_POST["dataIda"];
  $data_retorno =$_POST["dataVolta"];

  $result = mysqli_query($conexao, "INSERT INTO viagem(destino,origem,dataIda,dataVolta) 
  VALUES('$ponto_chegada','$ponto_origem','$data_saida','$data_retorno')");

 //Parte dos cliente
 $nome =$_POST["nome"];
 $cpf =$_POST["CPF"];
 $passagem = $_POST["passagem"];
 $poltrona = $_POST["poltrona"];

 $result = mysqli_query($conexao, "INSERT INTO cliente(nome,CPF,passagem,poltrona) 
 VALUES('$nome','$cpf','$passagem','$poltrona')");
}
?>

<!DOCTYPE html>
<html>
<head>
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
      color:#FF4B2B;
    }

    input[type="text"],
    input[type="date"],
    input[type="checkbox"],
    input[type="text"],
    input[type="number"]  {
      width: 100%;
      padding: 12px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      border-radius: 4px;
    }

    button {
      margin-top:20px ;
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

    button:hover {
        background-color: #9c2d1a;
        padding: 16px 24px;
    }

    #checkIda{
        color: #45a049;
    }
  </style>
</head>
<body>
  <div>
    <h2>Rodoviária</h2>
<form action="index.php" method="POST">
  <label for="destino"> Pra onde tu vai?</label>
    <input type="text" id="destino" placeholder="Destino da viagem">

    <label for="origem"> De onde tu vai?</label>
    <input type="text" id="origem" placeholder="Origem da viagem">

    <label for="dataIda">Data de ida</label>
    <input type="date" id="dataIda">
    
    <label for="dataVolta">Data de volta</label>
    <input type="date" id="dataVolta">


        <label for="nome">Nome Completo</label>
        <input type="text" id="nome" placeholder="Nome do cliente">

        <label for="cpf">CPF do cliente</label>
        <input type="number" id="cpf" placeholder="CPF do cliente">

        <label for="poltrona"> Poltrona desejada</label>
        <input type="number" id="poltrona" placeholder="Poltrona">

        <label for="passagem">Passagem</label>
        <input type="number" id="passagem" placeholder="Número de passagem">
    
        <button type="submit"> FINALIZAR COMPRA</button>
</form>
  </div>
</body>
</html>