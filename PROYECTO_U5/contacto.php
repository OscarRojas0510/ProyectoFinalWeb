<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="./resources/css/estiloscontac.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container-form">
        <div class="info-form">
            <h2>Contáctanos</h2>
            <p></p>
            <a href="#"><i class="fa fa-phone"></i> 729-293-6385</a>
            <a href="#"><i class="fa fa-envelope"></i> munecasequipo1@gmail.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Metepec,México </a>
        </div>
        <form action="./index.php" autocomplete="off" id="contactForm">
            <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre" class="campo">
            <input type="emal" name="email" id="email" placeholder="Tu Email" class="campo">
            <textarea name="mensaje" id="mensaje" placeholder="Tu Mensaje..."></textarea>
            <input   action="./index.php"href="./index.php" type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
        </form>
    </div>

    <script >
        document.getElementById("contactForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Get input field values
  var name = document.getElementById("nombre").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("mensaje").value;

  // Perform validation checks
  if (name === "") {
    alert("Ingrese nombre");
    return;
  }

  if (email === "") {
    alert("Ingrese su email email.");
    return;
  }

  if (message === "") {
    alert("Ingrese su mensaje para que pueda ser atendido");
    return;
  }
  else{
window.location.href='index.php';
  }

}

);

    </script>
</body>
</html>