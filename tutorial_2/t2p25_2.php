<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 25</title>
</head>
<body>

    <?php
    
    $conexion = mysqli_connect("localhost" , "root" , "" , "base1" ) or die ("problemas con la conexion");

    $registros = mysqli_query ($conexion , "select * from cursos where nombre = '$_REQUEST[nombre]'") or die ("problemas con el select:".mysqli_fetch_array($registros));

    if ($reg = mysqli_fetch_array($registros)){

    ?>

    <form action="t2p25_3.php" method="post">
        ingrese nuebo nombre

        <input type="text" name="nombrenuevo" value="<?php echo $reg['nombre'] ?>">
        <br>
        
        
        <input type="hidden" name="nobreviejo" value="<?php echo $reg['nombre']   ?>">
        <br>

        <input type="submit" value="Modificar">

    </form>

    <?php
    }
    else{
        echo "No existe alumno con dicho mail";
    }
    
    ?>


</body>
</html>