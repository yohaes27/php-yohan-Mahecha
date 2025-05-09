<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 21</title>
</head>
<body>
    
    <?php
    
    $conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexion");

    $registros = mysqli_query($conexion , "select codigo, nombre from cursos") or die ("problemas en el select:".mysqli_error($conexion));

    while ($reg=mysqli_fetch_array($registros)){
        echo "Codigo ".$reg['codigo']."<br>";
        echo "Nombre ".$reg['nombre']."<br>";
        #switch ($reg['codigocurso']){
         #   case 1: echo
        #}
    }
    echo "<br>";
    echo "<hr>";
    
    ?>


</body>
</html>