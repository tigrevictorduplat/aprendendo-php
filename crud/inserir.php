<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Dados</title>
</head>
<style>
    .container{
        margin: 25px 30px;
    }
    .container td {
        padding: 0.25em;
    }
</style>
<body>
    <div class="container">
    <table>
    <form name="form" action="insert.php" method="$_GET">
        <tr>
            <td><label for="name">Nome:</label></td>
            <td><input type="text" name="nome"></td>
        </tr>
        <tr>
            <td><label for="telefone">Telefone:</label></td>
            <td><input type="text" name="telefone"></td>
        </tr>
        <tr>
            <td><label for="endereco">Endereço: </label></td>
            <td><input type="text" name="endereco"></td>
        </tr>
        <tr>
            <td><label for="cep">CEP:</label></td>
            <td><input type="text" name="cep"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" value="SALVAR" >
            </td>
        </tr>
    </form>
</table>
</div>
</body>
</html>

