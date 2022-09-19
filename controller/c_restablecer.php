<?php  
    include('../conexion/BD.php');
    if(isset($_POST["recover"])){
        if(empty($_POST["email"])){
        echo '<script>
        Swal.fire({
        position: "top-end",
        icon: "error",
        title: "¡Ingrese el correo!",
        showConfirmButton: false,
        timer: 1500
        });
        </script>';
    }
        else {
        $email = $_POST["email"];
        $sql = mysqli_query($conexion, "SELECT * FROM tb_usuarios WHERE correo='$email'");
        $query = mysqli_num_rows($sql);
        $fetch = mysqli_fetch_assoc($sql);

            if(mysqli_num_rows($sql) <= 0){
        echo '<script>
        Swal.fire({
        position: "top-end",
        icon: "error",
        title: "¡No se encontro el correo!",
        showConfirmButton: false,
        timer: 1500
        });
        </script>';

    
        }else{
            $token = bin2hex(random_bytes(60));
            require "../mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

            // h-hotel account
            $mail->Username='neryalexandercastillo2018@gmail.com';
            $mail->Password='kgcokmybofrtkifs';

            // send by h-hotel email
            $mail->setFrom('neryalexandercastillo2018@gmail.com', 'Restablecer Password');
            $mail->addAddress($_POST["email"]);
            $mail->isHTML(true);
            $mail->Subject="Restablecer Password";
            $mail->Body="<h3>Para poder restrablecer sus password copie el siguiente token de veificacián y peguelo en el campo que se solicita dentro del sistema</h3>
            <b>TOKEN:</b>
            <p>$token</p>";
     
            if(!$mail->send()){
                ?>
                <script>
                alert("<?php echo " La cuenta de email no funcina "?>");
                </script>
                <?php
            }else{
                $sqlT = mysqli_query($conexion, "UPDATE tb_usuarios SET token='$token' WHERE correo='$email'");
                if($sqlT==1){

        echo '<script>
        Swal.fire({
        icon: "success",
        title: "Se envio un token de verificación a su correo",
        showConfirmButton: false,
        timer: 2400,
        }).then(function (result) {
        if (true) {
        window.location = "verificar.php";
        }
        });
        </script>';

                }
                else{
                    echo '<script>
                    Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Error al guardar el token!",
                    showConfirmButton: false,
                    timer: 1500
                    });
                    </script>';

                }
            }
        }
    }

}

?>