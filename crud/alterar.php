<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterando Dados</title>
</head>
<body>
<?php 
$id = $_GET["id"];
include("conexao.php");
$result = mysqli_query($con, "SELECT * from cadastro WHERE ID = '$id' ");
$row = mysqli_fetch_array ($result);
?>
<form name="form" action="update.php" method="$_GET">
    <label for="id">ID:</label>
    <input type="text" name="id" value="<?= $row["ID"]; ?>" readonly> <br>
    <label for="name">Nome:</label>
    <input type="text" name="nome" value="<?= $row["Nome"]; ?>"> <br>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" value="<?= $row["Telefone"]; ?>"> <br>

    <label for="endereco">Endereço: </label>
    <input type="text" name="endereco" value="<?= $row["Endereco"]; ?>"> <br>

    <label for="cep">CEP:</label>
    <input type="text" name="cep" value="<?= $row["CEP"]; ?>">
    <br>
    <br>
    <input type="submit" value="SALVAR">
</form>   
</body>
</html>


