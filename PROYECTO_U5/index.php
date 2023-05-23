<script src="./resources/validacion.js">
</script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="./css/estilosindex.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="/PROYECTO_U5/resources/css/estilos.css" />

</head>

<body>

<style>
    body{background-color: #feebed;}

</style>


  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fb9cbb; padding: 0px; margin: 0px;">
    <div class="titulo">
      <h3 style="text-align: center;">Muñecas Artesanales</h3>
    </div>
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./resources/img/log.jpg" alt="" width="50" height="50">
      </a>
      <a class="navbar-brand" href="./login.php" action="./usuario.php">Iniciar Sesión</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex">
                    <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">
                        Registrarse
                    </button>
                </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
       
      </div>
    </div>
  </nav>
   <div class="row">
    <h1 style="background-color:#afe4b0;">Muñecas más vendidas</h1>
    <?php
    include("db_connection.php");
    $query = "SELECT * FROM munecas_mas_vendidas";
    $resultado = $conn->query($query);
    while ($row = $resultado->fetch_assoc()) {
    ?>

      <div class="col-sm-6 col-md-3 " style="background-color: #afe4b0">
        <div class="card" style="width:18rem;">
          <img src="resources/img/<?php echo $row['imagen']; ?>">
          <div class="card-body" style="background-color: #f6de74">
            <h4><?php echo $row['nombre']; ?></h4>
            <p><?php echo $row['descripcion']; ?></p>
            <p>$<?php echo $row['precio']; ?>.00</p>
          </div>
        </div>
      </div>
    <?php

    }
    ?>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-login">
            <div class="modal-content modal-login">
                <div class="modal-header">
                    <h5 class="modal-title" text-align="center" aria-hidden="true" id="staticBackdropLabel">Registrar
                        Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <img src="/PROYECTO_U5/resources/img/usuarios.png" alt="160px" height="160px" />
                    </div>

                    <!-------------------------------------------------------- FORMULARIO -------------------------------------------------------------------------------------->

                    <form action="/PROYECTO_U5/validareinsertar.php" method="POST" class="d-flex flex-column" id="form-Login">

                        <!-------------------------------------------------------- Nombre Usuario -------------------------------------------------------------------------------------->
                        <div class="mb-2">
                            <div>
                                <label for="nombre" class="form-label"> Nombre(s) </label>
                                <input type="text" class="form-control" name="nombre" required id="nombre" value="" placeholder="Ingresar" />
                                <div class="valid-feedback">
                                    Formato válido
                                </div>
                                <div class="invalid-feedback">
                                    Formato inválido
                                </div>
                            </div>
                        </div>
                        <!-------------------------------------------------------- Apat Usuario -------------------------------------------------------------------------------------->
                        <div class="mb-2">
                            <div>
                                <label for="apat" class="form-label"> Apellido paterno </label>
                                <input type="text" class="form-control" name="apat" required id="apat" value="" placeholder="Ingresar" />
                                <div class="valid-feedback">
                                     Formato válido </div>
                                        <div class="invalid-feedback">
                                            Formato inválido
                                        </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------- Amat Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="amat" class="form-label"> Apellido materno </label>
                                    <input type="text" class="form-control" name="amat" required id="amat" value="" placeholder="Ingresar" />
                                    <div class="valid-feedback">
                                        Formato válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato inválido
                                    </div>
                                </div>
                            </div>


                            <!-------------------------------------------------------- FechaNac Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="fecha" class="form-label"> Fecha de nacimiento </label>
                                    <input type="date" class="form-control" required name="fecha" id="fecha" value="" placeholder="dd/mm/aaaa" />
                                    <div class="valid-feedback">
                                        Formato de fecha válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato de fecha inválido
                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------- Telefono Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="tel" class="form-label"> Teléfono </label>
                                    <input type="text" class="form-control" required name="tel" id="tel" value="" placeholder="Ingresar" />
                                    <div class="valid-feedback">
                                        Formato de teléfono válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato de teléfono inválido
                                    </div>
                                </div>
                            </div>


                            <!-------------------------------------------------------- Correo Usuario -------------------------------------------------------------------------------------->

                            <div class="mb-2">
                                <div>
                                    <label for="email" class="form-label"> Email</label>
                                    <input type="text" class="form-control" required name="email" id="email" value="" placeholder="ejemplo@gmail.com" />
                                    <div class="valid-feedback">
                                        Formato de correo válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato de correo inválido
                                    </div>
                                </div>
                            </div>


                            <!-------------------------------------------------------- Contraseña Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="password" class="form-label"> Contraseña
                                    </label>
                                    <input type="password" class="form-control" required name="password" id="password" placeholder="Ingresar contraseña" />
                                    <div class="valid-feedback">
                                        La contraseña cumple con las especificaciones requeridas
                                    </div>

                                    <div class="invalid-feedback">
                                        La contraseña debe contener mínimo 4 caracteres y máximo 15,
                                        al menos una letra mayúscula, al menos una letra minúscula,
                                        al menos un dígito, no debe haber espacios en blanco y al
                                        menos 1 caracter
                                        especial.
                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------- Validar Contraseña Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="validpass" class="form-label"> Validar contraseña</label>
                                    <input type="password" class="form-control" required name="validpass" id="validpass" placeholder="Volver a ingresar contraseña" />
                                    <div class="valid-feedback">
                                        Las contraseñas coinciden
                                    </div>
                                    <div class="invalid-feedback">
                                        Las contraseñas son distintas
                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------- Colonia Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="colonia" class="form-label"> Colonia </label>
                                    <input type="text" class="form-control" name="colonia" required id="colonia" value="" placeholder="Ingresar" />
                                    <div class="valid-feedback">
                                        Formato válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato inválido
                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------- Calle Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="calle" class="form-label"> Calle </label>
                                    <input type="text" class="form-control" name="calle" required id="calle" value="" placeholder="Ingresar" />
                                    <div class="valid-feedback">
                                        Formato válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato inválido
                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------- NUMINT Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="numi" class="form-label"> Número interior (opcional) </label>
                                    <input type="text" class="form-control" name="numi" id="numi" value="" placeholder="Ingresar" />
                                    <div class="valid-feedback">
                                        Formato válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato inválido
                                    </div>
                                </div>
                            </div>
                            <!-------------------------------------------------------- NUMEXT Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="nume" class="form-label"> Número exterior </label>
                                    <input type="text" class="form-control" name="nume" required id="nume" value="" placeholder="Ingresar" />
                                    <div class="valid-feedback">
                                        Formato válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato inválido
                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------- CP Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="cp" class="form-label"> Código postal </label>
                                    <input type="text" class="form-control" name="cp" required id="cp" value="" placeholder="Ingresar" />
                                    <div class="valid-feedback">
                                        Formato válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato inválido
                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------------------------- Referencias Usuario -------------------------------------------------------------------------------------->
                            <div class="mb-2">
                                <div>
                                    <label for="ref" class="form-label"> Referencias </label>
                                    <input type="text" class="form-control" name="ref" required id="ref" value="" placeholder="Ingresar" />
                                    <div class="valid-feedback">
                                        Formato válido
                                    </div>
                                    <div class="invalid-feedback">
                                        Formato inválido
                                    </div>
                                </div>
                            </div>
                            <!---------------------------------------------------------------------------------------------------------------------------------------------->

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

<?php 
include('includes/footer.php');
?>
  
</body>
</html>