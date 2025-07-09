<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tabla="";
        for ($i=32; $i<=126; $i++) {
            $fila=sprintf("Código ASCII: %03d - Carácter: %c<br>", $i, $i);
            $tabla.=$fila;
        }
        echo $tabla;
    ?>
</body>
</html>