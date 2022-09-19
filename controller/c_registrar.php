<?php  

    include('../conexion/BD.php');
    if(!empty($_POST["registro"])){
    if(empty($_POST["nombrec"]) or empty($_POST["correo"]) or empty($_POST["usuario"]) or empty($_POST["contraseña"])){
       
        echo '<script>
        Swal.fire({
        position: "top-end",
         icon: "error",
         title: "¡Existen campos vacios!",
         showConfirmButton: false,
         timer: 1500
         });
        </script>';

    }
    else{
        $nombrec=$_POST["nombrec"];
        $correo=$_POST["correo"];
        $usuario=$_POST["usuario"];
        $clave=$_POST["contraseña"];
        $sql=$conexion->query("insert into tb_usuarios(nombre_completo, correo, usuario, contraseña, token)values('$nombrec','$correo','$usuario','$clave','vacio')");

        if( $sql==0){


        echo '<script>
        Swal.fire({
        position: "top-end",
         icon: "error",
         title: "¡El usuario no se pudo registrar!",
         showConfirmButton: false,
         timer: 1500
         });
        </script>';
        }
        else{
            echo '<script>
        Swal.fire({
        icon: "success",
        title: "¡Usuario creado correctamente!",
        showConfirmButton: false,
        timer: 2500,
        }).then(function (result) {
        if (true) {
        window.location = "login.php";
        }
        });
        </script>';
        }
    }
} 

?>



