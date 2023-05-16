<?php
include "Config.php";
include "includes/header.php";
$articulo = $_GET["articulo"];
$productos = $db->query("SELECT * FROM producto WHERE id_producto =".$articulo);
 while ($producto = $productos->fetch_assoc()) {
    $nombre = $producto['nombre'];
    $descripcion = $producto['descripcion'];
    $precio = $producto['precio'];
    $existencia = $producto['existencia'];
    $imagen = $producto['imagen'];
    $categorias = $producto['id_entidad_federativa'];
    while ($cat = $db->query("SELECT nombre_entidad FROM entidad_federativa WHERE id_entidad =".$categorias)->fetch_assoc()){
        $categoria = $cat ['nombre_entidad'];
        break;
    }

 }
 if(isset($_GET["pago"])){
    if($_GET["pago"]=='true'){
        echo '<div class="alert alert-success" role="alert">
        Gracias por tu compra, tu pago se realizo con éxito.
        </div>';
    }else{
       echo' <div class="alert alert-danger" role="alert">
 Lo sentimos, tu pago no fue procesado.
</div>';
    }
 }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?php echo $nombre ?></h3>
            <h6 class="card-subtitle"><?php echo $categoria ?></h6>
<br>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center shadow p-3 mb-5 bg-white rounded"><img height="430" width="430" src="././img/<?php echo $imagen ?>" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5">Descripción</h4>
                    <p><?php echo $descripcion ?></p>
                    <h5>Disponibles: <?php echo $existencia ?> pzs</h5>
                    <h2 class="mt-5">
                        $<?php echo $precio ?>
                    </h2>
                    
                    <button class="btn btn-black btn-rounded mr-1" style="background-color:#FCD6EF"; data-toggle="tooltip" title="Agregar al carrito" data-original-title="Agregar al carrito">
                      Agregar al carrito <i class="fa fa-shopping-cart"></i>
                    </button>
                    <a href="Pago.php?precio=<?php echo $precio ?>&articulo=<?php echo $articulo ?>"><button class="btn btn-black btn-rounded" style="background-color:#FB96F7";>Comprar ahora</button></a>
                    <h3 class="box-title mt-5">Con nosotros tu compra:</h3>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i>Es segura.</li>
                        <li><i class="fa fa-check text-success"></i>Tiene los mejores precios.</li>
                        <li><i class="fa fa-check text-success"></i>Tienes envío gratis.</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>