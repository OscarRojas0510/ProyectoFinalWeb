<?php session_start();
include "Config.php";

$articulo = $_GET["articulo"];
$productos = $db->query("SELECT * FROM producto WHERE id_producto =".$articulo);
 while ($producto = $productos->fetch_assoc()) {
    $idpro = $producto['id_producto'];
    $nombre = $producto['nombre'];
    $descripcion = $producto['descripcion'];
    $precio = $producto['precio'];
    $existencia = $producto['existencia'];
    $imagen = $producto['imagen'];
    $categorias = $producto['id_entidad_federativa'];
    $cantidad="";
    while ($cat = $db->query("SELECT nombre_entidad FROM entidad_federativa WHERE id_entidad =".$categorias)->fetch_assoc()){
        $categoria = $cat ['nombre_entidad'];
        break;
    }

 }
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


<title>Detalles del producto</title>
</head>
<body>



<style>
    body{background-color: #feebed;}
.container_card{    margin: 0 auto;    padding:  0px 20px 20px 20px;    display: grid;    /* width: 800px; */    grid-template-columns: 1fr 1fr ;   grid-gap:1em;        /* grid-row-gap: 60px; */}
.blog-post{    position: relative;    margin-bottom: 15px;    margin: 30px;}
.blog-post img{    width: 100%;    height: 450px;    object-fit: cover;    border-radius: 10px;    }
.blog-post .category{    position: absolute;    top: 20px;    left: 20px;    padding: 10px 15px;  font-size: 14px;    text-decoration: none;    background-color: #e67e22;    color: #fff;    border-radius: 5px;    box-shadow: 1px 1px 8px rgba(0,0,0,0.1);    text-transform: uppercase;}
.text-content{    position: absolute;    bottom: -30px;    padding: 20px;    background-color: #fff;    width: calc(100% - 20px);    left: 50%;    transform: translateX(-50%);    border-radius: 10px;    box-shadow: 1px 1px 8px rgba(0,0,0,0.08);/* padding-top: 50px; */}
.text-content h2{    font-size: 20px;    font-weight: 400;    /* margin-bottom: 30px; */}
.text-content img{    height: 70px;    width: 70px;    border: 5px solid rgba(0,0,0,0.1);    border-radius: 50%;    position: absolute;    top: -35px;    left: 35px;}
.tags a{    color: #888;    font-weight: 700;    text-decoration: none;    margin-right: 15px;    transition: 0.3s ease;}
.tags a:hover{    color: #000;}
@media screen and (max-width: 1100px) {    .container_card{        grid-template-columns: 1fr 1fr;        grid-row-gap: 60px;    }}
@media screen and (max-width: 600px) {    .container_card{        grid-template-columns: 1fr;        grid-row-gap: 60px;    }}
</style>



<?php 

 
include("navbar.php"); 
include("modal.php");

?>
<br>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?php echo $nombre ?></h3>
            <h6 class="card-subtitle"><?php echo $categoria ?></h6>
<br>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center shadow p-3 mb-5 bg-white rounded"><img height="350" width="350" src="/Unidad5/resources/img/<?php echo $imagen ?>" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                   
                    <h4 class="box-title mt-5">Descripción</h4>
                    <p><?php echo $descripcion ?></p>
                    <h5>Disponibles: <?php echo $existencia ?> pzs</h5>
                    <h2 class="mt-5">
                        $<?php echo $precio ?><br>
                        <br>
                        <br>
                    </h2>
                    
                    <form id="formulario" name="formulario" method="post" action="carro.php">
                        <div class="blog-post ">
                        
                                <div class="text-content">
                                    <input name="idpro" type="hidden" id="idpro" value="<?php echo $idpro ?>" />                           
                                    <input name="precio" type="hidden" id="precio" value="<?php echo $precio ?>" />
                                    <input name="nombre" type="hidden" id="nombre" value="<?php echo $nombre ?>" />
                                    <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                                        <div class="card-body">
                                                <button class="btn btn-primary" type="submit" ><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
                                        </div>
                                </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>