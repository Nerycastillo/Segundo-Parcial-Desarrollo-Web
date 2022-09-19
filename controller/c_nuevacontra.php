<?php  

    include('../conexion/BD.php');
    if(isset($_POST["reset"])){
        $nuevapsw = $_POST["password"];
        $token = $_SESSION['token'];

        if($token){
            mysqli_query($conexion, "UPDATE tb_usuarios SET contraseña='$nuevapsw' WHERE token='$token'");
            mysqli_query($conexion, "UPDATE tb_usuarios SET token='vacio' WHERE contraseña='$nuevapsw'");

            echo '<script>
        Swal.fire({
        icon: "success",
        title: "Se cambio la contraseña correctamente",
        showConfirmButton: false,
        timer: 3000,
        }).then(function (result) {
        if (true) {
        window.location = "inicio.php";
        }
        });
        </script>';

        }else{

            echo '<script>
        Swal.fire({
         icon: "error",
         title: "¡No se puede cambiar la contraseña!",
         text: "Ingrese la contraseña",
         showConfirmButton: true,
         confirmButtonText: "Cerrar"
         });
        </script>';
            }
    }
?>



