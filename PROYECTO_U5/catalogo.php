
<?php session_start();
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<script src="../Alert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../Alert/sweetalert.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
 <link rel="stylesheet" href="../css/style_cp.css">

  <title>Muñecas más vendidas</title>
  <link rel="stylesheet" href="resources/css/stilos.css">
</head>

<body>

<?php 
include("navbar.php"); 
include("modal.php");
?>
<br>
  <h1 class="title">Catálogo</h1>
  <br>
  <form action="catalogo.php" method="POST" align-items: center>
    <input style="font-size: 20px; margin-left:200px; width:800px;" width="50px" type="text" name="nombre" placeholder="Nombre del producto"
      id="nombre" class="form-control input-user">
    <input style=" font-size: 20px; margin-left:200px; margin-top: 10px;" type="submit" value="Buscar">
    <div class="container" style="align-items: center;">
      <script>
        var variable = document.getElementsById("nombre").value;
      </script>
      <?php
      $valor = $_POST["nombre"];
      include("db_connection.php");
      if (isset($_POST['nombre'])) {
        $query = "SELECT nombre,imagen,id_producto,precio,entidad_federativa.nombre_entidad FROM producto INNER join entidad_federativa on producto.id_entidad_federativa=entidad_federativa.id_entidad
      WHERE nombre='$valor'";
        $resultado = $conn->query($query);

        while ($row = $resultado->fetch_assoc()) { ?>

          <div class="card">
            <div style="align-items: center;">
              <img style="width: 200px;height:200px" src="resources/img/<?php echo $row['imagen']; ?>">
            </div>
            <p><b>Nombre:</b>
              <?php echo $row['nombre']; ?>
            </p>
            <p>$
              <?php echo $row['precio']; ?>.00
            </p>

          </div>
        <?php }
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
            <p><b>Nombre:</b>
              <?php echo $row['nombre']; ?>
            </p>
               
            <p>$
              <?php echo $row['precio']; ?>.00
            </p>

            <?php $id= $row['id_producto']; ?>
            
            <a type="button" class="btn btn-primary" href="detalle.php?articulo=<?php echo $id ?>">Detalles</a>
            

          </div>
          <?php
        }
      }
      ?>
    </div>
  </form>
  <?php 
include('includes/footer.php');
?>
</body>

</html>