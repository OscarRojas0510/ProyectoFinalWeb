<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/PROYECTO_U5/resources/css/estilos.css" />
</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/Unidad5/resources/img/1.jpg" class="d-block w-100" alt="100px" height="100px">
            </div>
            <div class="carousel-item">
                <img src="/Unidad5/resources/img/2.jpg" class="d-block w-100" alt="100px" height="100px">
            </div>
            <div class="carousel-item">
                <img src="/Unidad5/resources/img/3.jpg" class="d-block w-100" alt="100px" height="100px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/U5/resources/img/logo.png" alt="" width="115" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item item-nav">
                        <a class="nav-link" aria-current="page" href="#Home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active item-nav" href="#Nosotros">Nosotros</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">
                        Registrarse
                    </button>
                </form>
            </div>
        </div>
    </nav>


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
                        <img src="/Unidad5/resources/img/usuarios.png" alt="160px" height="160px" />
                    </div>

                    <!-------------------------------------------------------- FORMULARIO -------------------------------------------------------------------------------------->

                    <form action="/Unidad5/validareinsertar.php" method="POST" class="d-flex flex-column" id="form-Login">

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