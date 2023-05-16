<?php 
$servidor= "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="equipo_1";

$db = mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
if(!$db){
    die("la conexión fallo: " .mysqli_connect_error());
}
else{
    mysqli_query($db,"SET NAMES 'UTF8'");
}

?>