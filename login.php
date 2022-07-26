<?php
    $correo = $_POST["correo"];
    $password = $_POST["pass"];
    session_start();
    $_SESSION["correo"] = $correo;

    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $_POST['g-recaptcha-response'];
    $secretkey = "6Ld5ASIhAAAAABjic7lFKF5nLnJdpjFIIuF1yeRg";

    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

    $atributos = json_decode($respuesta, TRUE);

    $conexion = mysqli_connect("localhost","root","","proyecto");
    $consulta = "SELECT * FROM usuarios WHERE correo = '$correo' AND password = '$password'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    // if (!$atrubutos['success']){
    //     echo "<script type='text/javascript'>alert('Verificar Captcha');</script>";
    // }
    //header("location:administracion.html");

    if ($filas) {
        if (!$atributos['success']){
            echo "<script type='text/javascript'>alert('Verificar Captcha');</script>";
            echo "<a href='login_form.php'>Volver al formulario</a>";
        } else {
            header("location:administracion.html");
        }
    } else {
    ?>
        <?php
        include("login_form.php");
        ?>
        <script type="text/javascript">alert('Error de autenticación.');</script>
    <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);