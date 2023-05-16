<?php

include("conexion.php");

session_start();
$_SESSION['inicio'] = false;
$conn = conexion();
$nombre = $_POST["nombre"] ?? NULL;
$apat = $_POST["apat"] ?? NULL;
$amat = $_POST["amat"] ?? NULL;
$fecha = $_POST["fecha"] ?? NULL;
$telefono = $_POST["tel"] ?? NULL;
$email = $_POST["email"] ?? NULL;
$pass = $_POST['password'] ?? NULL;
$colonia = $_POST["colonia"] ?? NULL;
$calle = $_POST["calle"] ?? NULL;
$numi = $_POST['numi'] ?? NULL;
$nume = $_POST["nume"] ?? NULL;
$cp = $_POST["cp"] ?? NULL;
$ref = $_POST['ref'] ?? NULL;

// $userLogeado="";

$sql = "Select correo from usuario where correo = '" . $email . "';";
$correoen = mysqli_query($conn, $sql);
$infoCorreo = mysqli_fetch_array($correoen);

if ($infoCorreo) {

    if ($infoCorreo['correo'] == $email) {
        echo "<script>alert('¡El correo ingresado ya se ha registrado antes!'); window.location='index.php';</script>";
    }
} else {

    $sql = "Select telefono from usuario where telefono = '" . $telefono . "';";
    $telen = mysqli_query($conn, $sql);
    $infoTel = mysqli_fetch_array($telen);

    if ($infoTel) {

        if ($infoTel['telefono'] == $telefono) {
            echo "<script>alert('¡El teléfono ingresado ya se ha registrado antes!'); window.location='index.php';</script>";
        }
    } else {

        $sql = "INSERT INTO `usuario` (`nombre`, `a_pat`, `a_mat`, `fecha_nacimiento`, `Telefono`, `correo`, `contraseña`) VALUES
        ('$nombre', '$apat', '$amat', '$fecha', '$telefono', '$email', sha('$pass'));";

        if (mysqli_query($conn, $sql)) {

            $sql = "select id_usuario from usuario where correo='$email';";
            $id = mysqli_query($conn, $sql);
            $obtenerid = mysqli_fetch_array($id);
            $idus = "";

            if ($obtenerid) {

                $idus = $obtenerid['id_usuario'];
                $sql = "INSERT INTO `direccion` (`id_usuario`,`colonia`, `calle`, `num_interior`, `num_exterior`, `cp`, `referencia`) VALUES
                ('$idus','$colonia', '$calle', '$numi', '$nume', '$cp', '$ref');";
                if (mysqli_query($conn, $sql)) {
                    
                    echo "<script>alert('¡Usuario registrado correctamente! ¡Bienvenido  $nombre!'); window.location='index.php';</script>";
                }
            }
        }
    }
}
mysqli_close($conn);
