<?php
    $id = $_POST['id'];
    $option = $_POST['option'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    include("conexao.php");
    $result = mysqli_query($con, "SELECT * from tb_login WHERE ID = '$id' ");
    $row = mysqli_fetch_array ($result);

    if (!($login == $row['username'])) {
        echo("O login está incorreto");
        $login = false ;
    }
    if (!($senha == $row['password'])) {
        echo("A senha está incorreto");
        $senha = false;
    }

    if (($login) && ($senha) ) { ?>
        <p>Suas credenciais estão corretas!</p>
        <a href="<?=$option?>?id=<?= $row["ID"]?>">CONTINUAR</a>
    <?php } else { ?>
        <p>Suas credenciais estão incorretas!</p>
        <a href="listar.php">RETORNAR</a>
        <?php } ?>
    