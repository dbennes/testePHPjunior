<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "phpjuniorteste";
    $conecta = mysqli_connect( $servidor, $usuario, $senha, $banco) or die ("Não foi possivel se conectar ao banco de dados.");
    mysqli_set_charset($conecta, 'utf8');
?>