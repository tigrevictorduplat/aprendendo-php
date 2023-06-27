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
"DELETE FROM cadastro  WHERE ID = '$id' ");
echo("Olá $nome. Suas infos: $telefone , $endereco , $cep . Foram excluidos com sucesso!");
?>