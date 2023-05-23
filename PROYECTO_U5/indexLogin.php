<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="resources/css/styles.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0634d8726a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="resources/img/muneca.png" class="brand_logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="login.php" method="post" id="form">
                        <h1 style="text-align: center;">Login</h1>
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error" style="font-size:20px;"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="email" placeholder="Email" id="email" class="form-control input-user" required>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" placeholder="Password" id="password" class="form-control input-pass" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me</label>
                            </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button type="submit" name="button" id="login" class="login_btn">Iniciar sesión</button>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-center links"> ¿Aún no tienes cuenta?
                                    <a href="" class="m1-2" style="color:white;"><u> Regístrate</u> </a>
                                </div>
                            </div>
                        </div>
                        <p class="warnings" id="warnings"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>