<?php

function conexion()
{
    $servidor = "localhost";
    $usuarioBD = "root";
    $pwdBD = "";
    $nomBD = "equipo_1";

    $db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);

    if ($db) {
        mysqli_query($db, "SET NAMES 'UTF8'");
        
        return $db;
    } else {
        die("La conexión falló: " . mysqli_connect_error());
    }
}
?>