<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 26</title>
</head>
<body>
    
    <?php

        $conexion = mysqli_connect ("localhost" , "root" , "" , "base1") or die  ("problemas con la coneccion");

        mysqli_query($conexion , "insert into alumnos (nombre , mail , codigocurso)values('$_REQUEST[nombre]' , '$_REQUEST[mail]' , '$_REQUEST[codigocuso]')") or die ("problemas en el select:".mysqli_error($conexion));

        echo "El alucno fue dado de alta.";
    
    
    
    
    ?>


</body>
</html>