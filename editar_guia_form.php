<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Logo_B.png">
    <link rel="stylesheet" href="css/agr_noticia.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Borderlads Encyclopedia</title>
</head>
<body>
    <?php
        include("conexion.php");
        $link = Conectar();
        $num = $_GET["id"];
    ?>

<form action="cambios_guia.php?id=<?php echo $num?>" method="post">
    <?php
        $registros = mysqli_query($link, "SELECT * FROM guias where guia_id = $num");
        $row = mysqli_fetch_assoc($registros);
    ?>
        <h2>Editar Guía</h2>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?php echo $row['titulo'];?>">
        <label for="contenido">Contenido</label>
        <textarea name="contenido"><?php echo $row['contenido'];?></textarea>
        <label for="imagen">Enlace de imagen</label>
        <input type="text" name="imagen" value="<?php echo $row['imagen'];?>">
        <label for="video">Enlace de video</label>
        <input type="text" name="video" value="<?php echo $row['imagen'];?>">
        <input type="submit" value="Editar" class="boton">
    </form>

    <div class="enlace">
        <p><a href="administracion.html">Volver al manejador</a></p>
    </div>

</body>
</html>