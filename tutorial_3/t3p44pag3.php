<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexion");
        $registros = mysqli_query($conexion, "SELECT codigo, nombre, mail, fechanac, codigocurso
        FROM alumnos AS alu")
            or die("Problemas en el select:" . mysqli_error($conexion));
        while ($reg = mysqli_fetch_array($registros)) {
            echo "Codigo: " . $reg['codigo'] . "<br>";
            echo "Nombre: " . $reg['nombre'] . "<br>";
            echo "Email: " . $reg['mail'] . "<br>";
            echo "Fecha de Nacimiento: " . $reg['fechanac'] . "<br>";
            echo "Curso: " . $reg['codigocurso'] . "<br>";
            echo "<hr>";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>