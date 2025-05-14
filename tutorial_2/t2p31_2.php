<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 31</title>
</head>
<body>

<?php




if (isset ($_REQUEST['codigocurso'] ) ){
    $codigo = (int)$_GET['codigocurso'];
    $conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexion");

    $curso = mysqli_query($conexion,
        "SELECT nombrecurso FROM cursos WHERE codigo = $codigo")
        or die("Problemas con el select del curso: " . mysqli_error($conexion));   
 
    
    if ($cur = mysqli_fetch_array($curso)) {
        echo "<h2>Alumnos inscriptos al curso: <strong>{$cur['nombrecurso']}</strong></h2>";
    }
       $reg = mysqli_query($conexion,
        "SELECT nombre, mail FROM alumnos WHERE codigocurso = $codigo")
        or die("problemas con el select: " . mysqli_error($conexion));
        

    if (mysqli_num_rows($reg) > 0) {

        echo "<ul>";

        while ($alumno = mysqli_fetch_array($reg)) {
            echo "<li>{$alumno['nombre']} - {$alumno['mail']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay alumnos inscriptos en este curso.</p>";
    }

    mysqli_close($conexion);
} else {
    echo "<p>No se recibió ningún código de curso.</p>";
}



// echo "listado de la tabla del ". $_REQUEST['tabla'] . " <br> ";

// for ($f=1; $f<=10; $f++){
//     $valor = $f * $_REQUEST['tabla'];
//     echo $valor. "-" ;
// }


?>
    
</body>
</html>