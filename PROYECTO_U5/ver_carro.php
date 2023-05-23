<?php session_start();
include("conexion.php");
$j = 0;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../Alert/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="../Alert/sweetalert.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <link rel="stylesheet" href="../css/style_cp.css">


    <title>Detalles del carrito</title>
</head>

<body>
    <style>

body{
    background-color: #feebed;
}

        .container_card {
            
            margin: 0 auto;
            padding: 0px 20px 20px 20px;
            display: grid;
            /* width: 800px; */
            grid-template-columns: 1fr 1fr;
            grid-gap: 1em;
            /* grid-row-gap: 60px; */
        }

        .blog-post {
            position: relative;
            margin-bottom: 15px;
            margin: 30px;
        }

        .blog-post img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 10px;
        }

        .blog-post .category {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 15px;
            font-size: 14px;
            text-decoration: none;
            background-color: #e67e22;
            color: #feebed;
            border-radius: 5px;
            box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
        }

        .text-content {
            position: absolute;
            bottom: -30px;
            padding: 20px;
            background-color: #fff;
            width: calc(100% - 20px);
            left: 50%;
            transform: translateX(-50%);
            border-radius: 10px;
            box-shadow: 1px 1px 8px rgba(0, 0, 0, 0.08);
            /* padding-top: 50px; */
        }

        .text-content h2 {
            font-size: 20px;
            font-weight: 400;
            /* margin-bottom: 30px; */
        }

        .text-content img {
            height: 70px;
            width: 70px;
            border: 5px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            position: absolute;
            top: -35px;
            left: 35px;
        }

        .tags a {
            color: #888;
            font-weight: 700;
            text-decoration: none;
            margin-right: 15px;
            transition: 0.3s ease;
        }

        .tags a:hover {
            color: #000;
        }

        @media screen and (max-width: 1100px) {
            .container_card {
                grid-template-columns: 1fr 1fr;
                grid-row-gap: 60px;
            }
        }

        @media screen and (max-width: 600px) {
            .container_card {
                grid-template-columns: 1fr;
                grid-row-gap: 60px;
            }
        }
    </style>


    <?php

    include("navbar.php");
    include("modal.php");

    ?>


    <div class="center mt-5">
        <div class="card pt-3">
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;" text-center>Detalles del carrito</p>
            <div class="container-fluid p-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col"> </th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Total</th>
                            <th scope="col">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <div class="container_card">

                            <?php
                            if (isset($_SESSION['carrito'])) {
                                $total = 0;
                                for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                                    if (isset($carrito_mio[$i])) {
                                        if ($carrito_mio[$i] != NULL) {
                                            ?>
                                            <?php if ($carrito_mio[$i]['ref'] != 'p') { ?>
                                                <tr>

                                                    <th scope="row" style="vertical-align: middle;">
                                                        <?php echo $i; ?>
                                                    </th>

                                                    <td style="vertical-align: middle;">
                                                        <?php echo $carrito_mio[$i]['nombre'] ?>
                                                    </td>

                                                    <td>
                                                        <img src="resources/img/<?php echo $carrito_mio[$i]['ref']; ?>.png" alt=""
                                                            width="100px">
                                                    </td>
                                                    <td style="vertical-align: middle;">
                                                        <form id="form2" name="form1" method="post" action="carro.php">
                                                            <input name="id" type="hidden" id="id" value="<?php print $i; ?>"
                                                                class="align-middle" />
                                                            <input name="cantidad" type="text" id="cantidad" style="width:50px;"
                                                                class="align-middle text-center"
                                                                value="<?php print $carrito_mio[$i]['cantidad']; ?>" size="1"
                                                                maxlength="4" />
                                                            <input type="image" name="imageField3" src="/PROYECTO_U5/resources/img/check.png"
                                                                value="" class="btn btn-sm btn-primary btn-rounded" />
                                                        </form>
                                                    </td>

                                                    <td style="vertical-align: middle;">$
                                                        <?php echo $carrito_mio[$i]['precio'] ?>
                                                    </td>
                                                    <td style="vertical-align: middle;">$
                                                        <?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']; ?>
                                                    </td>
                                                    <td style="vertical-align: middle;">
                                                        <form id="form3" name="form2" method="post" action="carro.php">
                                                            <input name="id2" type="hidden" id="id2" value="<?php print $i; ?>" />
                                                            <button type="image" name="imageField3" class="btn-lg bg-danger text-white "
                                                                style="border:0px;" data-toggle="tooltip" data-placement="top"
                                                                title="Remove item"><i class="fas fa-trash-alt"></i> Borrar
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <?php
                                            $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                        }
                                    }
                                }
                            }
                            ?>

                    </tbody>
                </table>


                <li class="list-group-item d-flex justify-content-between">
                    <span style="text-align: left; color: #000000;"><strong>Total (MXN)</strong></span>
                    <strong style="text-align: left; color: #000000;">$
                        <?php
                        if (isset($_SESSION['carrito'])) {
                            $total = 0;
                            for ($i = 0; $i <= count($carrito_mio) - 1; $i++) {
                                if (isset($carrito_mio[$i])) {
                                    if ($carrito_mio[$i] != NULL) {
                                        $total = $total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                                    }
                                }
                            }
                        }
                        if (!isset($total)) {
                            $total = '0';
                        } else {
                            $total = $total;
                        }
                        echo number_format($total, 2, ',', '.'); ?>
                    </strong>
                </li>



            </div>
        </div>
        <br>
        <center>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>

            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

            <div class="container">                
                <div class="column">
                    <div class="col-lg-8">
                        <div class="container padding-bottom-3x mb-1">
                        </div>
                        <div class="accordion" id="accordionPayment">
                            <div class="accordion-item ">
                                <h2
                                    class="h5 px-4 py-3 accordion-header d-flex justify-content-center align-items-center">
                                    <div class="form-check w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCC" aria-expanded="false">
                                        <input class="form-check-input" type="radio" name="payment" id="payment1"
                                            align-items-center>
                                        <label class="form-check-label pt-1" for="payment1">
                                            Pago con tarjeta
                                        </label>
                                    </div>
                                    <span>
                                        <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                                            <g fill-rule="nonzero" fill="#333840">
                                                <path
                                                    d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z">
                                                </path>
                                                <path
                                                    d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </h2>
                                <div id="collapseCC" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionPayment" style="">
                                    <div class="accordion-body" align-items-center>
                                        <div class="mb-3">
                                            <label class="form-label" >Número de la tarjeta</label>
                                            <input placeholder="16 digitos" id="tarjeta" type="number" maxlength="16" minlength="16"
                                                class="form-control" placeholder="" pattern="[0-9]*" autocomplete="off">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" >Titular</label>
                                                    <input placeholder="Nombre" id="nombre" type="text" class="form-control" placeholder=""
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label">Expiración</label>
                                                    <br>
                                                    <span class="expiration">
                                                        <input id="mes" type="text" name="month" placeholder="MM"
                                                            maxlength="2" size="2" autocomplete="off" />
                                                        <span>/</span>
                                                        <input id="anio" type="text" name="year" placeholder="YY"
                                                            maxlength="2" size="2" autocomplete="off" />
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label">CVV</label>
                                                    <input id="cvv" type="password" class="form-control"
                                                    placeholder="Se encuntra en la parte trasera de la tarjeta" autocomplete="off" maxlength="3" minlength="3">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">

                                            <div class="p-3 bg-light bg-opacity-10">

                                                <button id="pagar" class="btn btn-black w-100 mt-2" 
                                                    style="background-color: #40CFFF" ;><strong>Realizar pago</strong>
                                                    <a href="index.php">
                                                </button>
                                        
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>

    <br><br><br>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#pagar").on('click', function () {
                if ($("#tarjeta").val() < 16) {
                    alert("Ingrese los 16 dígitos de la tarjeta");
                } else {
                    if ($("#nombre").val() <= 1) {
                        alert("Falta el nombre del titular");
                    } else {
                        if ($("#mes").val() > 5 && $("#mes") < 12) {
                            alert("El mes seleccionado es invalido");
                        } else {
                            if ($("#anio").val() < 23) {
                                alert("El año seleccionado es invalido");
                            } else {
                                if ($("#cvv").val().length < 3) {
                                    alert("El CVV debe contener 3 dígitos");
                                } else {
                                    
                                alert('¡Pago Exitoso! ¡Gracias por su compra!');
                                 window.location='catalogo.php';
                                   
                                    
                                }
                            }
                        }
                    }
                }
            });
        });

    </script>
    </center>

    </div>
    </div>

    <?php 
include('includes/footer.php');
?>

</body>

</html>