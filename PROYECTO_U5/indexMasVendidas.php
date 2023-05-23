<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muñecas más vendidas</title>
    <link rel="stylesheet" href="resources/css/stilos.css">
</head>

<body>
    <h1 class="title">Muñecas más vendidas</h1>
    <div class="container">
        <?php
        include("db_connection.php");
        $query = "SELECT * FROM munecas_mas_vendidas";
        $resultado = $conn->query($query);
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <div class="card">
                <div style="align-items: center;"><img src="resources/img/<?php echo $row['imagen']; ?>"></div>
                <h4><?php echo $row['nombre']; ?></h4>
                <p><?php echo $row['descripcion']; ?></p>
                <p>$<?php echo $row['precio']; ?>.00</p>
            </div>
        <?php

        }
        ?>
    </div>
</body>

</html>
