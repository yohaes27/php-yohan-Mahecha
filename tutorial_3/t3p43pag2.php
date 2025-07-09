<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dia = $_REQUEST['dia'];
    $mes = $_REQUEST['mes'];
    $ano = $_REQUEST['ano'];
    if (checkdate($mes, $dia, $ano)){
        echo "La fecha ingresada es correcta";
    }   
    else{
        echo "La fecha no es válida";
    }  
    ?>
</body>

</html>