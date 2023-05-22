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

  <h1 class="title">Catálogo</h1>
  <form action="catalogo.php" method="POST">
    <input style="font-size: 20px; margin-left:50px;" type="text" name="nombre" placeholder="Nombre del producto" id="nombre" class="form-control input-user">
    <input type="submit" value="Buscar">
    <div class="container" style="align-items: center;">
      <script>
        var variable = document.getElementsById("nombre").value;
      </script>
      <?php
      $valor = $_POST["nombre"];
      include("db_connection.php");
      if (isset($_POST['nombre'])) {
        $query = "SELECT nombre,imagen,id_producto,descripcion,precio,entidad_federativa.nombre_entidad FROM producto INNER join entidad_federativa on producto.id_entidad_federativa=entidad_federativa.id_entidad
      WHERE nombre='$valor'";
        $resultado = $conn->query($query);
        while ($row = $resultado->fetch_assoc()) { ?>
          <div class="card">
            <div style="align-items: center;">
              <img style="width: 200px;height:200px" src="resources/img/<?php echo $row['imagen']; ?>">
            </div>
            <p><b>Nombre:</b><?php echo $row['nombre']; ?></p>
            <p><b>Descripción:</b> <?php echo $row['descripcion']; ?></p>
            <p>$<?php echo $row['precio']; ?>.00</p>
            <p>Entidad:<?php echo $row['nombre_entidad']; ?></p>
          </div><?php               }
            }
            $isEmpty = empty($valor);
            if ($isEmpty) {
              $query = "SELECT nombre,imagen,id_producto,descripcion,precio,entidad_federativa.nombre_entidad FROM producto INNER join entidad_federativa on producto.id_entidad_federativa=entidad_federativa.id_entidad;";
              $resultado = $conn->query($query);
              while ($row = $resultado->fetch_assoc()) { ?>
          <div class="card">
            <div style="align-items: center;">
              <img style="width: 200px;height:200px" src="resources/img/<?php echo $row['imagen']; ?>">
            </div>
            <p><b>Nombre:</b><?php echo $row['nombre']; ?></p>
            <p><b>Descripción:</b> <?php echo $row['descripcion']; ?></p>
            <p>$<?php echo $row['precio']; ?>.00</p>
            <p>Entidad:<?php echo $row['nombre_entidad']; ?></p>
          </div><?php
              }
            }
                ?>
    </div>
  </form>
</body>

</html>