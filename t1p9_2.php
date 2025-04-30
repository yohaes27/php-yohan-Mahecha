<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cactura de datos en el form</title>
</head>
<body>
    
    <?php
    
    $re_nom = $_REQUEST["nombre"];
    $re_edad = $_REQUEST["edad"];

    if ($re_edad>= 18 and $re_edad <= 100){
        echo "$re_nom tiene $re_edad; es mayo de edad";
    }
    elseif ($re_edad < 18 and $re_edad >=1){
        echo "$re_nom tiene $re_edad; es menor de edad ";
    }
    else{
        echo "error";
    }
    ?>
    <br>
<a href="index.php">Pagina principal</a>
<br>
<a href="t1p9.php">anterior</a>
<br>

</body>
</html>