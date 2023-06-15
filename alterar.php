<?php 
$id = $_GET['id'];
include("conexao.php");
$result = mysqli_query($con, "SELECT * from cadastro WHERE ID = '$id' ");
?>
<form name="form" action="listar.php" method="$POST">
    
    <label for="name">Nome:</label>
    <input type="text" name="nome" placeholder="<?= $row["Nome"]; ?>"> <br>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" placeholder="<?= $row["Telefone"]; ?>"> <br>

    <label for="endereco">Endereço: </label>
    <input type="text" name="endereco" placeholder="<?= $row["Endereco"]; ?>"> <br>

    <label for="cep">CEP:</label>
    <input type="text" name="cep" placeholder="<?= $row["CEP"]; ?>">
    <br>
    <br>
    <input type="submit" value="SALVAR">
</form>