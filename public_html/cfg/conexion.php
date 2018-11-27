<?php
    $server = "127.0.0.1";
    $usuario = "root";
    $db = "c9";

    $conexion = mysqli_connect($server, $usuario, "", $db);
        mysqli_set_charset($conexion, 'utf8');
    if (!$conexion) {
        die("No pudo conectarse:" . mysqli_error());
    }
    else{
       //echo 'Conectado  satisfactoriamente al servidor <br>';
    }
    mysqli_select_db($conexion, $db) or die(mysqli_error($conexion));
?>