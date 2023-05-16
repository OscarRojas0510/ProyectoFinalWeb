<?php
session_start();
require 'consultas.php';
$consultas = new Consultas();
$datos;

$cols = 0;
$id = 0;
$existencia = -1;
$busca;
if (isset($_POST['busca'])) {
    $busca = $_POST['busca'];
}
$isEmpty = empty($busca);
if ($isEmpty) {
    $datos = $consultas->lista("SELECT * from producto order by nombre");
} else {
    $datos = $consultas->lista("SELECT * from producto where nombre LIKE '%$busca%' order by nombre");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="icon" href="img/mainImage.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/estilosCatProd.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <title>Categorias Productos</title>
</head>

<body class="container-fluid">
    <?php


    include("navbar.php");
    include("modal.php");

    ?>
    <section class="row d-flex flex-row align-items-center align-content-center p-0" id="section1">
        <div class="col-2 offset-1  align-self-stretch d-flex flex-row justify-content-start p-0">
            <p class=" align-self-center m-0 font-weight-bold">
                <?php
                if ($isEmpty) {
                    ?>
                    Todos los productos:
                    <?php
                } else {
                    ?>
                    Coincidencias para &quot;
                    <?= $busca ?>&quot;
                    <?php
                }
                ?>

            </p>
        </div>
        <div class="col-5 align-self-stretch d-flex flex-row align-items-center p-0">
            <form class="form-inline m-0" action="catProd.php" method="POST">
                <button type="submit" class="btn">
                    <img src="img/search.png" alt="">
                </button>
                <div class="form-group mx-sm-3">
                    <input name="busca" type="text" class="form-control" id="inputBusca"
                        placeholder="Buscar por nombre">
                </div>
            </form>
        </div>
    </section>
    <main class="row">
        <div class="container-fluid">
            <?php
            if (sizeOF($datos) != 0) {
                foreach ($datos as $producto) {
                    $id = $producto['id_producto'];
                    $existencia = $producto['existencia'];
                    if ($cols == 0) {
                        ?>
                        <div class="row mb-5">
                            <div class="col-1 "></div>
                            <?php
                    }
                    ?>
                        <div class="col-2 offset-1 munieca p-2" id="producto<?php echo $id; ?>"
                            onclick="enviarFormulario('<?php echo $id; ?>')">
                            <div>
                                <p class="">
                                    <?= $producto['nombre'] ?>
                                </p>
                            </div>
                            <div class="imagenMunieca d-flex justify-content-center">
                                <img src="img/<?php echo $id; ?>.png" alt="" class="h-100">
                            </div>
                            <div>
                                <?php
                                if ($existencia > 0) {
                                    ?>
                                    <span class="badge badge-pill badge-success">Disponible</span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="badge badge-pill badge-dark">Agotado</span>
                                    <?php
                                }
                                ?>
                            </div>
                            <div>
                                <p class="">
                                    $
                                    <?= $producto['precio'] ?>.00 MXN
                                </p>
                            </div>
                        </div>
                        <?php
                        $cols = $cols + 1;
                        if ($cols == 3) {
                            $cols = 0;
                            ?>
                        </div>
                        <?php
                        }
                }
            }
            ?>
        </div>
        <form id="myForm" action="detalle.php" method="GET">
            <input type="hidden" id="divIdInput" name="articulo">
        </form>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="css/estilosCatProd.css">
    <script src="js/scriptsCatProd.js"></script>
</body>

</html>