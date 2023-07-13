<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    $option = $_GET['option'];
    ?>


    <table>
    <form action="confirmacao.php" method="post">
    <tr>
        <input hidden disabled type="text" name="id"  value="<?= $id ?>">
        <input hidden disabled type="text" name="option" value="<?= $option ?>">
    </tr>
    <tr>
            <td><label for="login">Login:</label></td>
            <td><input type="text" name="login" required></td>
        </tr>
        <tr>
            <td><label for="senha">Senha:</label></td>
            <td><input type="password" name="senha" maxlength="20" minlength="8" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <input type="submit" value="CONFIRMAR" >
            </td>
        </tr>

    </form>
</table>
</body>
</html>