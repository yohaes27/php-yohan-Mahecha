<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if (file_exists("quejas.txt")) {
            $contenido = file_get_contents("quejas.txt");
            echo nl2br($contenido);
        } else {
            echo "No hay quejas registradas.";
        }
    ?>

    <br><br>
    <a href="t3p42.php">Volver al formulario</a>
</body>

</html>