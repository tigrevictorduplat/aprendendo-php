<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Dados</title>
</head>
<body>
<?php 
$id = $_GET["id"];
include("conexao.php");
$result = mysqli_query($con, "SELECT * from cadastro WHERE ID = '$id' ");
$row = mysqli_fetch_array ($result);
?>

<p>Deseja deletar essas informações?</p>

<table>
    <form name="form" action="delete.php" method="$_GET">
        <tr>
            <td><label for="id">ID:</label></td>
            <td><input type="text" name="id" value="<?= $row["ID"]; ?>" readonly></td>
        </tr>
        <tr>
            <td><label for="name">Nome:</label></td>
            <td><input type="text" name="nome" value="<?= $row["Nome"]; ?>" readonly ></td>
        </tr>
        <tr>
            <td><label for="telefone">Telefone:</label></td>
            <td><input type="text" name="telefone" value="<?= $row["Telefone"]; ?>" readonly ></td>
        </tr>
        <tr>
            <td><label for="endereco">Endereço: </label></td>
            <td><input type="text" name="endereco" value="<?= $row["Endereco"]; ?>" readonly ></td>
        </tr>
        <tr>
            <td><label for="cep">CEP:</label></td>
            <td><input type="text" name="cep" value="<?= $row["CEP"]; ?>" readonly ></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" value="DELETAR" >
            </td>
        </tr>
    </form>
</table>
</body>
</html>