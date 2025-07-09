<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dia = $_REQUEST['dia'];
    $mes = $_REQUEST['mes'];
    $ano = $_REQUEST['ano'];
    if (checkdate($mes, $dia, $ano)) {
        $fechanac = $ano . "-" . $mes . "-" . $dia;
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexion");
        mysqli_query($conexion, "insert into alumnos(nombre, mail, codigocurso, fechanac) values 
                        ('$_REQUEST[nombre]', '$_REQUEST[email]', $_REQUEST[codigocurso], '$fechanac')") or
            die("Problemas en el insert:" . mysqli_error($conexion));
        mysqli_close($conexion);
        echo "El alumno fue dado de alta correctamente.";
    } else {
        echo "La fecha ingresada no es valida.";
    }
    ?>
    <br>
    <a href="t1p44.php">Volver</a>
</body>

</html>