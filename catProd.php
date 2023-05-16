<?php
require 'consultas.php';
$consultas = new Consultas();
$datos;

$cols = 0;
$id = 0;
$existencia = -1;

$busca = $_POST['busca'];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosCatProd.css">
    <title>Categorias Productos</title>
</head>

<body class="container-fluid">
    <header id="header" class="row d-flex">
        <div class="col-2 offset-1 h-100 d-flex justify-content-center align-items-center">
            <img src="img/mainImage.svg" alt="" class="h-100">
        </div>
        <div class="col-8 p-0 d-flex align-items-center">
            <p class="w-100 m-0 text-left font-weight-bold" id="tituloPgina">
                Catálogo de Productos

            </p>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light row p-0" id="navBar">
        <button class="navbar-toggler offset-11 " type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-12 p-0 justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Iniciar Sesión</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        Registro
                    </a>
                </li>
                <li class="d-flex">
                    <img src="img/carrito.png" class="align-self-center" alt="">
                </li>
                <li class="nav-item dropdown active">
                    <img src="img/options.png" class="align-self-center p-1 nav-link dropdown-toggle" alt=""
                        role="button" data-toggle="dropdown">
                    <div class="dropdown-menu dropdown-menu-right p-0 m-0 rounded-0" id="menuDesplegable">
                        <a class="dropdown-item" href="#">Catálogo de productos</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
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
                            <div class="col-1"></div>
                            <?php
                    }
                    ?>
                        <div class="col-2 offset-1 munieca p-2" id="producto<?php echo $id; ?>">
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

    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilosCatProd.css">
</body>

</html>