<?php
include "db_connection.php";
if (isset($_POST['email']) && isset($_POST['password'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = validar($_POST['email']);
    $password = validar($_POST['password']);
    if (empty($email)) {
        header("Location: index.php?error=Email is required");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM usuario WHERE correo='$email' AND contraseña='$password'";
        $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)===1) {
        $row = mysqli_fetch_assoc($result);
        echo "Usuario encontrado";
        }else{
        header("Location: index.php?error=Incorrect user or password");
        exit();
    }  }
} else {
    header("Location: index.php");
    exit();
}
