<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 28</title>
</head>
<body>
    
    <?php

        $conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexiom");

        $registros = mysqli_query($conexion , "select count(*)  as cantidad from cursos") or die ("problemas en el select:" . mysqli_error($conexion));
        $reg = mysqli_fetch_array($registros);
        echo "cantida total de cursos :". $reg['cantidad']."<br><br>";

        $registrocursos = mysqli_query($conexion , "select cur_nombre from cursos") or die ("problemas en el select:" . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($registrocursos)){
            echo "nombre ". $reg['cur_nombre']. "<br><br><br>";
        }
    
    mysqli_close($conexion);
    ?>

</body>
</html>