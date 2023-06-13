<?php
$nome = $_GET['nome'];
$telefone = $_GET['telefone'] ;
$endereco = $_GET['endereco'] ;
$cep = $_GET['cep'] ;

echo("Olá $nome. Suas infos são: $telefone , $endereco , $cep .");
include("conexao.php");
mysqli_query("INSERT INTO cadastro (Nome, Telefone, Endereco, CEP) VALUES ('$nome','$telefone','$endereco','$cep')");
mysqli_close($con);

?>