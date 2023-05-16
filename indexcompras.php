<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start();
    include "db_connection.php"; ?>
    <?php ($_GET["id_usuario"]);?>

    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Compras realizadas</title>
</head>

<body>
    <?php include "db_connection.php"; ?>
    <section id="container">
        <h1><i class="fas fa-comp"></i>Compras realizadas</h1>
        <table class="table table-hover table-dark">
            <tr>
                <th>Número de venta</th>
                <th>Número de cliente</th>
                <th>Tipo de pago</th>
                <th>ID producto</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
            <?php
            $query = "Select usuario.id_usuario, venta.id_venta,tipo_pago.nombre_metodo,producto.id_producto,producto.nombre,detalle_venta.cantidad, venta.subtotal
            from usuario
            INNER join 
            venta
            on usuario.id_usuario=venta.id_usuario
            INNER join
            tipo_pago
            on venta.id_tipo_pago=tipo_pago.id_tipo_pago
            INNER join
            detalle_venta
            on venta.id_venta=detalle_venta.id_venta
            INNER join
            producto
            on detalle_venta.id_producto=producto.id_producto
            WHERE usuario.id_usuario=$usuario";
            $resultado = $conn->query($query);
            while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td>
                        <?php echo $row["id_venta"]; ?>
                    </td>
                    <td>
                        <?php echo $row["id_usuario"]; ?>
                    </td>
                    <td>
                        <?php echo $row["nombre_metodo"]; ?>
                    </td>
                    <td>
                        <?php echo $row["id_producto"]; ?>
                    </td>
                    <td>
                        <?php echo $row["nombre"]; ?>
                    </td>
                    <td>
                        <?php echo $row["cantidad"]; ?>
                    </td>
                    <td>
                        <?php echo $row["subtotal"]; ?>
                    </td>
                </tr><?php } ?>
        </table>
    </section>
</body>
<?php session_destroy();
?>

</html>