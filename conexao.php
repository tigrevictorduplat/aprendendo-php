<?php
$con =  mysqli_connect("bancophp". "host","","");
    if ($con) {
        echo("Conexão Inválida!".mysqli_error($con));
    };

    mysqli_select_db($con,"cadastro")
?>