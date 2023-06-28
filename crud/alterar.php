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
<table>
<form name="form" action="update.php" method="$_GET">
    <tr>
        <td><label for="id">ID:</label></td>
        <td><input type="text" name="id" value="<?= $row["ID"]; ?>" readonly></td>
    </tr> 
    <tr>
        <td><label for="name">Nome:</label></td>
        <td><input type="text" name="nome" value="<?= $row["Nome"]; ?>"> </td>
    </tr>
    <tr>
        <td><label for="telefone">Telefone:</label></td>
        <td><input type="text" name="telefone" value="<?= $row["Telefone"]; ?>"> </td>
    </tr>
    <tr>
        <td><label for="endereco">Endereço: </label></td>
        <td><input type="text" name="endereco" value="<?= $row["Endereco"]; ?>"> </td>
    </tr>
    <tr>
        <td><label for="cep">CEP:</label></td>
        <td><input type="text" name="cep" value="<?= $row["CEP"]; ?>"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="SALVAR"></td>
    </tr>    
</form>
</table>   
</body>
</html>


