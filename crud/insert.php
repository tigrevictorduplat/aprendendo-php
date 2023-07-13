<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados</title>
</head>
<body>
    <?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'] ;
$endereco = $_POST['endereco'] ;
$cep = $_POST['cep'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];


include("conexao.php");
mysqli_query( $con,"INSERT INTO cadastro (Nome, Telefone, Endereco, CEP) VALUES ('$nome','$telefone','$endereco','$cep')");
mysqli_query( $con,"INSERT INTO tb_login (`username`,`password`,`email`) VALUES ('$login','$senha','$email')");
mysqli_close($con);


echo("<p>Olá $nome. Suas infos: $telefone , $endereco , $cep . Foram inseridas com sucesso!</p>");
?>
<p><a href="inserir.php">Clique aqui para inserir outros valores</a></p>
<p>ou</p>
<p><a href="listar.php">Clique aqui para ver os valores existentes</a></p>
</body>
</html>