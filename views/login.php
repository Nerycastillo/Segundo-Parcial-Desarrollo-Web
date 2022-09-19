
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="../public/css/Estilos.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" >
        <?php
        include('../controller/c_login.php');
       ?>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuario"></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" id="pass" placeholder="Contraseña"></div>
            <div class="form-group"><input class="btn btn-primary btn-block" type="submit" name="btn_ingresar" value= "Iniciar Sesión"></input></div>
            <a href="../views/restablecer.php"class="forgot">¿Ha olvidado su contraseña?</a>
            <a href="../views/registrar.php" class="forgot">Registrarse</a>
          </form>
    </div>
</body>
</html>
