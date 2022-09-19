<?php
session_start();
?>
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
include('../controller/c_nuevacontra.php');
?>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="password" placeholder="Nueva Contraseña"></div>
            <div class="form-group"><input class="btn btn-primary btn-block" type="submit" name="reset" value= "Cambiar contraseña"></input></div>
          </form>
    </div>
</body>
</html>

