<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "db_connection.php";
$e = $_SESSION['user']; ?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Compras realizadas</title>
</head>

<body>
    <?php include "db_connection.php"; ?>
    <section id="container">
        <h1 style="background: rgb(70, 130, 180); text-align:center; font-size:3em;"><i class="fas fa-comp"></i>Compras realizadas</h1>
        <p style="font-size: 2em;">Cliente: <b><?php
                                                $query = "Select usuario.nombre, usuario.a_pat, usuario.a_mat from usuario WHERE usuario.correo='$e'";
                                                $resultado = $conn->query($query);
                                                while ($row = $resultado->fetch_assoc()) {
                                                ?>
                    <?php echo $row["nombre"]; ?>
                    <?php echo $row["a_pat"]; ?>
                    <?php echo $row["a_mat"]; ?><?php } ?></b></p>

        <div>
            <table style="height: auto; width:800px;margin:0 auto;border-collapse: collapse; border-radius: 1em;
  overflow: hidden;" class="table table-hover table-responsive table-bordered ">
                <tr style="background: rgb(70, 130, 180); width:100px">
                    <th>Número de venta</th>
                    <th>Número de cliente</th>
                    <th>Tipo de pago</th>
                    <th>Identificador del producto</th>
                    <th>Nombre</th>
                    <th>Imagen del producto</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
                <?php
                $query = "Select usuario.id_usuario, venta.id_venta,tipo_pago.nombre_metodo,producto.id_producto,producto.nombre,producto.imagen,detalle_venta.cantidad, venta.subtotal
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
            WHERE usuario.correo='$e'";
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
                            <img style="width: 100px; height:auto;" src="resources/img/<?php echo $row['imagen']; ?>">
                        </td>
                        <td>
                            <?php echo $row["cantidad"]; ?>
                        </td>
                        <td>
                            <p>$<?php echo $row["subtotal"]; ?>.00</p>
                        </td>
                    </tr><?php } ?>
            </table>

        </div>
        <div class="form-group">
            <div class="d-flex justify-content-center mt-3 login_container">
                <a class="btn login_btn" style="background: rgb(70, 130, 180);"href="index.php">Regresar</a>
            </div>
        </div>
    </section>
</body>

</html>