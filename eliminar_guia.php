<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borderlands Encyclopedia</title>
</head>
<body>
    <?php
        include("conexion.php");
        $link = Conectar();

        if($_GET){
            $num = $_GET["id"];
            $queryDelete = "Delete from $tablaG where guia_id = '$num'";

            $resultDelete = mysqli_query($link, $queryDelete);

            if($resultDelete) {
                echo "<strong>Se borro el regsitro con exito</strong>";
            } else {
                echo "No se borro el registro.<br>";
            }
        }
    ?>
    <a href="administracion.html">Volver al manejador</a>
</body>
</html>