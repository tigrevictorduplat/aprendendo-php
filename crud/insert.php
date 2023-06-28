<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados</title>
</head>
<body>
    <?php
$nome = $_GET['nome'];
$telefone = $_GET['telefone'] ;
$endereco = $_GET['endereco'] ;
$cep = $_GET['cep'] ;

echo("<p>Olá $nome. Suas infos: $telefone , $endereco , $cep . Foram inseridas com sucesso!</p>");
include("conexao.php");
mysqli_query( $con,"INSERT INTO cadastro (Nome, Telefone, Endereco, CEP) VALUES ('$nome','$telefone','$endereco','$cep')");
mysqli_close($con);
?>
<p><a href="inserir.php">Clique aqui para inserir outros valores</a></p>
<p>ou</p>
<p><a href="listar.php">Clique aqui para ver os valores existentes</a></p>
</body>
</html>