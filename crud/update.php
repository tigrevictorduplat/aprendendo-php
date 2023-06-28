<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando Dados</title>
</head>
<body>
<?php

$id = $_GET['id'];
$nome = $_GET['nome'];
$telefone = $_GET['telefone'] ;
$endereco = $_GET['endereco'] ;
$cep = $_GET['cep'] ;
  
include("conexao.php");
$result = mysqli_query($con, "SELECT * from cadastro WHERE ID = '$id' ");
$row = mysqli_fetch_array ($result);

mysqli_query($con,
"UPDATE cadastro SET Nome='$nome', Telefone='$telefone', Endereco='$endereco' , CEP='$cep' WHERE ID = '$id' ");
echo("Olá $nome. Suas infos: $telefone , $endereco , $cep . Foram atualizadas com sucesso!");
?>
<p><a href="inserir.php">Clique aqui para inserir outros valores</a></p>
<p>ou</p>
<p><a href="listar.php">Clique aqui para ver os valores existentes</a></p>
</body>
</html>