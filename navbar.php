<?php

if (isset($_SESSION['carrito'])) {
  $carrito_mio = $_SESSION['carrito'];
}

// contamos nuestro carrito
if (isset($_SESSION['carrito'])) {
  for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
    if (isset($carrito_mio[$i])) {
      if ($carrito_mio[$i] != NULL) {
        if (!isset($carrito_mio['cantidad'])) {
          $carrito_mio['cantidad'] = '0';
        } else {
          $carrito_mio['cantidad'] = $carrito_mio['cantidad'];
        }
        $total_cantidad = $carrito_mio['cantidad'];
        $total_cantidad++;
        if (!isset($totalcantidad)) {
          $totalcantidad = '0';
        } else {
          $totalcantidad = $totalcantidad;
        }
        $totalcantidad += $total_cantidad;
      }
    }
  }
}

//declaramos variables
if (!isset($totalcantidad)) {
  $totalcantidad = '';
} else {
  $totalcantidad = $totalcantidad;
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilosNavbar.css">
<header id="header" class="row d-flex ">
  <div class="col-2 offset-1 h-100 d-flex justify-content-center align-items-center">
    <img src="img/mainImage.svg" alt="" class="h-100">
  </div>
  <div class="col-8 p-0 d-flex align-items-center">
    <p class="w-100 m-0 text-left font-weight-bold" id="tituloPgina">
      Catálogo de Productos

    </p>
  </div>
</header>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light row p-0" id="navBar">
  <button class="navbar-toggler offset-11 " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: black; cursor:pointer;">
          <img src="img/carrito.png">
          <?php echo $totalcantidad; ?>
        </a>
      </li>
      <li class="nav-item dropdown active">
        <img src="img/options.png" class="align-self-center p-1 nav-link dropdown-toggle" alt="" role="button"
          data-toggle="dropdown">
        <div class="dropdown-menu dropdown-menu-right p-0 m-0 rounded-0" id="menuDesplegable">
          <a class="dropdown-item" href="catProd.php">Catálogo de productos</a>
        </div>
      </li>

    </ul>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- END NAVBAR -->