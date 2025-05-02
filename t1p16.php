<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 16</title>
</head>
<body>
    
    <?php
    
    $ar = fopen("datos.txt" , "r") or die("no se pudo abrir el archivo");
    while (!feof($ar)){
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
    }
    fclose($ar);
    
    ?>
    <a href="index.php
    ">Inicio</a>

</body>
</html>