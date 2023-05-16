<?php
include "includes/header.php";
$precio = $_GET["precio"];
$articulo=$_GET["articulo"];
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



<div class="container">
    <h1 class="h3 mb-5">Pagar</h1>
    <div class="row">
      <!-- Esto es la izquierda -->
      <div class="col-lg-9">
        <div class="container padding-bottom-3x mb-1">
            </div>

        <div class="accordion" id="accordionPayment">
          
          <div class="accordion-item mb-3">
            <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
              <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCC" aria-expanded="false">
                <input class="form-check-input" type="radio" name="payment" id="payment1">
                <label class="form-check-label pt-1" for="payment1">
                  Pagar con tarjeta
                </label>
              </div>
              <span>
                <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="nonzero" fill="#333840">
                    <path d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z"></path>
                    <path d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z"></path>
                  </g>
                </svg>
              </span>
            </h2>
            <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment" style="">
              <div class="accordion-body">
                <div class="mb-3">
                  <label class="form-label">Tarjeta</label>
                  <input id="tarjeta" type="number" maxlength="16" minlength="16" class="form-control" placeholder="" pattern="[0-9]*" autocomplete="off">
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Nombre en la tarjeta</label>
                      <input id="nombre" type="text" class="form-control" placeholder="" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Expiración</label>
                      <br>
                      <span class="expiration">
    <input id="mes" type="text" name="month" placeholder="MM" maxlength="2" size="2" autocomplete="off" />
    <span>/</span>
    <input id="anio" type="text" name="year" placeholder="YY" maxlength="2" size="2" autocomplete="off"/>
</span>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">CVV</label>
                      <input id="cvv" type="password" class="form-control" autocomplete="off" maxlength="3" minlength="3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Derecha -->
      <div class="col-lg-3">
        <div class="card position-sticky top-0">
          <div class="p-3 bg-light bg-opacity-10">
            <h6 class="card-title mb-3">Detalle</h6>
            <div class="d-flex justify-content-between mb-1 small">
              <span>Subtotal</span> <span>$<?php echo $precio ?></span>
            </div>
            <div class="d-flex justify-content-between mb-1 small">
              <span>Envio</span> <span>$0.00</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-4 small">
              <span>TOTAL</span> <strong class="text-dark">$<?php echo $precio ?></strong>
            </div>
            <button id="pagar" class="btn btn-black w-100 mt-2" style="background-color:#FB96F7";>Ordenar y pagar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
    $("#pagar").on('click',function(){
      if($("#tarjeta").val()<16){
        alert("La tarjeta debe tener 16 dígitos");
    }else{
      if($("#nombre").val()<=1){
        alert("Coloca el nombre completo, tal como aparece en la tarjeta");
    }else{
      if($("#mes").val()>5 && $("#mes")<12){
        alert("El mes seleccionado es invalido");
    }else{
      if($("#anio").val()<23){
        alert("El año seleccionado es invalido");
    }else{
      if($("#cvv").val().length <3){
        alert("El CVV solo debe contener 3 dígitos");
    }else{
      window.location.href="procesarPago.php?total=<?php echo $precio ?>&articulo=<?php echo $articulo ?>&cvv="+$("#cvv").val();
    }
  }
}
    }
  }
    });
  });
    
  </script>
