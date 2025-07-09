<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 22 de consulta mail</title>
</head>
<body>


    <?php 

    $conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problema con la conexion");

    $registro = mysqli_query($conexion , "select codigo from alumnos where nombre ='$_REQUEST[nombre]'") or die ("problemas en el select:".mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registro)){

        mysqli_query($conexion , "delete from alumnos where nombre ='$_REQUEST[nombre]'") or die ("problemas en el select:".mysqli_error($conexion));
        echo "Se efectuo el borrado del alumno con dicho nombre.";
    }
    else{
        echo "no existe un alumno  con ese nombre";
    }
    mysqli_close($conexion);
    ?>


</body>
</html>