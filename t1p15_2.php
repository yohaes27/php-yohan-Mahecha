<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 15</title>
</head>
<body>
    
    <?php
    
    $ar = fopen("datos.txt" , "a") or die("problemas en la creacio");
    fputs($ar , $_REQUEST['nombre']);
    fputs($ar , "\n");
    fputs($ar , $_REQUEST['pedido']);
    fputs($ar , "\n");
    fputs($ar , "-----------------------");
    fputs($ar , "\n");
    fclose($ar);
    echo "los datos se guardaron <br><br>";
    
    ?>

    <a href="t1p15.php"> anterior </a>
    
    <br><br>

    <a href="index.php"> inicio </a>


</body>
</html>