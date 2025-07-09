<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 25</title>
</head>
<body>
    
    <?php
    
    $conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexion");

    mysqli_query ($conexion , "update cursos set nombrecurso = '$_REQUEST[nombrenuevo]' where nombrecurso = '$_REQUEST[nobreviejo]'") or die ("problemas en el select:".mysqli_error($conexion)); 

    echo "el el nombre fue modificado";
    
    ?>

</body>
</html>