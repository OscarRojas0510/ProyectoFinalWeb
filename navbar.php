<?php 

if(isset($_SESSION['carrito'])){
$carrito_mio=$_SESSION['carrito'];
}

// contamos nuestro carrito
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if(isset($carrito_mio[$i])){
        if($carrito_mio[$i]!=NULL){ 
        if(!isset($carrito_mio['cantidad'])){$carrito_mio['cantidad'] = '0';}else{ $carrito_mio['cantidad'] = $carrito_mio['cantidad'];}
        $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    if(!isset($totalcantidad)){$totalcantidad = '0';}else{ $totalcantidad = $totalcantidad;}
    $totalcantidad += $total_cantidad;
    }}}
}

    //declaramos variables
     if(!isset($totalcantidad)){$totalcantidad = '';}else{ $totalcantidad = $totalcantidad;}

?>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #fb9cbb">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="./resources/img/log.jpg" alt="" width="50" height="50">
    </a>
    <a class="navbar-brand" href="#">Inicio </a>

      <a class="navbar-brand" href="catalogo.php">Catálogo</a>
      


      
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="color: green; cursor:pointer;"><i class="fas fa-shopping-cart"></i> <?php echo $totalcantidad; ?></a>
        </li>
      </ul>
    </div>
    <form action="./index.php" autocomplete="off" id="contactForm">
        <button href="./index.php" action="./index.php" class="btn-sm btn-outline-danger" type="botton">Cerrar Sesion</button>
      </form>
      <br><br>
  </div>
</nav>
<!-- END NAVBAR -->