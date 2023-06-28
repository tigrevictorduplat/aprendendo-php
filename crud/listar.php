<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Dados</title>
</head>
<style>
    .container{
        margin: 25px 30%;
    }
    .container td {
        padding: 0.25em;
    }
    table {
        background-color: lightgray;
        text-align: center;
    }
</style>
<body>    
<?php
include ("conexao.php");
$result = mysqli_query($con, "SELECT * from cadastro");
?>
<div class="container">
<table >
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>ENDERECO</th>
        <th>CEP</th>
</tr>
<?php while ($row =mysqli_fetch_array ($result)){
    ?>
    <tr>
    <td> <?= $row ["ID"]; ?> </td>
        <td> <?= $row ["Nome"]; ?> </td>
        <td> <?= $row ["Telefone"]; ?> </td>
        <td> <?= $row ["Endereco"]; ?> </td>
        <td> <?= $row ["CEP"]; ?> </td>
        <td><a href="alterar.php?id=<?= $row["ID"] ?>">ALTERAR</a></td>
        <td><a href="deletar.php?id=<?= $row["ID"] ?>">DELETAR</a></td>
</tr>
<?php } 
?>
    <tr style="text-align:center;">
        <td colspan="7"><a href="inserir.php">INSERIR NOVOS DADOS</a></td>
    </tr>
</table>
</div>
</body>
</html>
