<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 23
    </title>
</head>
<body>
    
    <?php
    
    $conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexion");

    $registros = mysqli_query($conexion , "select nombre from cursos where nombre = '$_REQUEST[nombre]'") or die ("problemas en el select:".mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)){

        mysqli_query($conexion , "delete from cursos where nombre = '$_REQUEST[nombre]'") or die ("problemas en el select:".mysqli_error($conexion));
        
        echo "se efectuo el borrado del curso con dicho nombre. ";
    }
    else {
        echo "no existe un curso con este nombre";
    }

    mysqli_close($conexion)


    ?>


</body>
</html>