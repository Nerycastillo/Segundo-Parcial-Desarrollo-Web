<?php  


    include('../conexion/BD.php');
    if(isset($_POST["verificar"])){
        $token = $_POST["verificar_token"];
        $sqlTo = mysqli_query($conexion, "SELECT * FROM tb_usuarios WHERE token='$token'");
      if(mysqli_num_rows($sqlTo) <= 0){   
        echo '<script>
        Swal.fire({
         icon: "error",
         title: "¡Verificación Incorrecta!",
         text: "Ingrese correctamente el token",
         showConfirmButton: true,
         timer: 2400
         });
        </script>';
            }
            else{

                $_SESSION['token'] = $_POST["verificar_token"];

            echo '<script>
            Swal.fire({
            icon: "success",
            title: "Verificacion Correcta",
            showConfirmButton: false,
            timer: 2400,
            }).then(function (result) {
            if (true) {
            window.location = "remplazar_contraseña.php";
            }
            });
            </script>';

    }
}



?>



