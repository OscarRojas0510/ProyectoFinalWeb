<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) {?>
        <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <img id="muneca" src="resources\img\muneca.png">
        <label>Email: </label>
        <input type="text" name="email" placeholder="Email">
        <label>Password: </label>
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Iniciar sesión</button>
    </form>

</body>

</html>