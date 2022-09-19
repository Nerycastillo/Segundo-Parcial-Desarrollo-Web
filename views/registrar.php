<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="../public/css/Estilos.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" >
        <?php
        include('../controller/c_registrar.php');
       ?>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="nombrec" id="nombrec" placeholder="Nombre Completo"></div>
            <div class="form-group"><input class="form-control" type="text" name="correo" id="correo" placeholder="Correo"></div>
            <div class="form-group"><input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuario"></div>
            <div class="form-group"><input class="form-control" type="password" name="contraseña" id="contraseña" placeholder="Contraseña"></div>
            <div class="form-group"><input class="btn btn-primary btn-block" type="submit" name="registro" value= "Crear Usuario"></input></div>
         
            <a href="../views/login.php" class="forgot"><i class="fas fa-arrow-left"></i></a>
          </form>
    </div>
</body>
</html>
