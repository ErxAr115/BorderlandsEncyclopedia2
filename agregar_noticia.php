<?php
    include("conexion.php");
    $link = Conectar();

    if($_POST){
        $InsertQuery = "INSERT INTO $tabla (titulo,autor,fecha,contenido,imagen) VALUES ('".$_POST['titulo']."','".$_POST['autor']."','".$_POST['fecha']."','".$_POST['contenido']."','".$_POST['imagen']."')";

        $result = mysqli_query($link, $InsertQuery);

        if($result) {
            echo "<script type='text/javascript'>alert('Los datos se insertaron correctamente.');</script>";
        } else {
            echo "<script type='text/javascript'>alert('No se insertaron los datos.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Logo_B.png">
    <title>Borderlands Encyclopedia</title>
</head>
<body>
    <a href="administracion.html">Volver al manejador</a>
</body>
</html>