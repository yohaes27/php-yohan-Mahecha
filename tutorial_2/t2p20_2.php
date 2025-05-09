<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 20</title>
</head>
<body>

    <?php
    
    $conexion = mysqli_connect("localhost" , "root" ,"", "base1") or die("Problemas con la coneccio");

    mysqli_query($conexion,"insert into alumnos(nombre , mail , codigocurso) values('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[codigocurso]')") or die ("problemas en le select".mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El alumno fue dado de alta. ";

    
    ?>

    
</body>
</html>