<?php 
$id = $_GET["id"];
include("conexao.php");
$result = mysqli_query($con, "SELECT * from cadastro WHERE ID = '$id' ");
$row = mysqli_fetch_array ($result);
?>

<p>Deseja deletar essas informações?</p>
<form name="form" action="delete.php" method="$_GET">
    
    <label for="id">ID:</label>
    <input type="text" name="id" value="<?= $row["ID"]; ?>" readonly> <br>
    <label for="name">Nome:</label>
    <input type="text" name="nome" value="<?= $row["Nome"]; ?>" readonly > <br>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" value="<?= $row["Telefone"]; ?>" readonly > <br>

    <label for="endereco">Endereço: </label>
    <input type="text" name="endereco" value="<?= $row["Endereco"]; ?>" readonly > <br>

    <label for="cep">CEP:</label>
    <input type="text" name="cep" value="<?= $row["CEP"]; ?>" readonly >
    <br>
    <br>
    <input type="submit" value="DELETAR">
</form>