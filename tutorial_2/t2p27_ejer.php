<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema  27</title>
</head>
<body>

    <?php
    
    $conexion = mysqli_connect ("localhost" , "root" , "" , "base1") or die ("problemas con la coneccion");

    $registros = mysqli_query($conexion , "select alu.codigocurso as alu_codigo  , alu.nombre as alu_nombre , alu.mail , cur.cur_codigo , cur.cur_nombre from alumnos as alu inner join cursos as cur on cur.cur_codigo = alu.codigocurso ") or die ("problemas en el select:".mysqli_error($conexion));

    while ($reg=mysqli_fetch_array($registros)){

        echo "Codigo:".$reg['alu_codigo']."<br>";
        echo "Nombre:".$reg['alu_nombre']."<br>";
        echo "Mail:".$reg['mail']."<br>";
        echo "curso:".$reg['cur_nombre']."<br>";
        echo "<hr>";
    }
    
    mysqli_close($conexion);
    
    
    ?>

</body>
</html>