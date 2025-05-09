<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROBLEMA 24</title>
</head>
<body>
    
    <?php
    $occion = $_REQUEST['occion'];
    $conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexion");

    if ($occion == 'si') {
        mysqli_query($conexion , "delete from cursos") or die ("pproblemas en el select:".mysqli_error($conexion));

        echo "Se efectuo el borrado de todos los cursos.";
    }

    else{
        echo "No se efectuo el borrado <br>";
    }

    
    ?>

    <a href="t2p24.php">Anterior</a>

    <br><br>
    <a href="../index.php">Inicio</a>



</body>
</html>