<?php
    include ("conecta.php");

    $id = $_POST['id'];
    $delete = ("DELETE FROM usuarios WHERE id = '$id'; ");
    $deletequery = mysqli_query($conecta, $delete) or die ("Não foi possivel conectar.");

?>