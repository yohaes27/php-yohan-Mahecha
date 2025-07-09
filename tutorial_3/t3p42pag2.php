<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_REQUEST['nombre'];
        $queja = $_REQUEST['queja'];
        $fecha = date("d/m/Y");
        $hora = date("H:i:s");
        $linea = "Fecha: $fecha - Hora: $hora \n Nombre: $nombre \n Queja: $queja \n ------------------------------------------\n";
        $archivo = fopen("quejas.txt", "a");
        fwrite($archivo, $linea);
        fclose($archivo);
        echo "La queja fue registrada correctamente.";
    ?>
    <br>
    <a href="t3p42.php">Volver al formulario</a>
</body>
</html>