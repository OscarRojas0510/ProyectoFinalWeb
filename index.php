<?php
$id = $_POST['divId'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=~, initial-scale=1.0">
    <link rel="icon" href="img/mainImage.svg" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <p>
        El div seleccionado fue:
        <?= $id ?>
    </p>
</body>

</html>