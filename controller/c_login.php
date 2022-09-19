<?php  

session_start();
    include('../conexion/BD.php');
  
    if(!empty($_POST["btn_ingresar"]))
{
    if(!empty($_POST["usuario"]) or !empty($_POST["pass"]))
    {
        $usuario=$_POST["usuario"];
        $clave=$_POST["pass"];
        $sql=$conexion->query("select * from tb_usuarios where usuario='$usuario' and contraseña='$clave'");
        if($datos=$sql->fetch_object())
        {
        $_SESSION["id"]=$datos->id;
        $_SESSION["nombrec"]=$datos->nombre_completo;

        echo '<script>
        Swal.fire({
        icon: "success",
        title: "Verificación Correcta",
        showConfirmButton: false,
        timer: 1000,
        }).then(function (result) {
        if (true) {
        window.location = "inicio.php";
        }
        });
        </script>';
        }
        else
        {
            
        echo '<script>
        Swal.fire({
        position: "top-end",
         icon: "error",
         title: "Usuario o contraseña invalido!",
         showConfirmButton: false,
         timer: 1500
         });
        </script>';

        }
    }
    else
    {
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
    }  

?>



