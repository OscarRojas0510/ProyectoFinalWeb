<?php
$sname = "localhost";
$unmae = "root";
$password = "root";
$db_name = "equipo_1";


$conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
} else {
    mysqli_query($conn, "SET NAMES 'UTF8'");
}
