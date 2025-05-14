<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 30</title>
</head>
<body>

<?php

$conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexion");

$registro = mysqli_query($conexion , "select cur.nombrecurso , count(alu.codigo) as cantidad , alu.codigo from alumnos as alu inner join cursos as cur on cur.codigo = alu.codigocurso") or die ("problemas en el select:" . mysqli_error($conexion));
while ($reg = mysqli_fetch_array($registro)){
    ?>
    
    <table border 2>
        <tr>
            <th>nombre curso</th>
            <th>cantidad de inscriptos</th>
            <th>todos los incritos</th>

        </tr>
        <tr>
            <td><?php echo ($reg['nombrecurso']) ?></td>
            <td><?php echo ($reg['cantidad'])?></td>
            <td><?php echo($reg['codigo'])  ?></td>
        </tr>
       

    </table>
   
<?php
        echo "nombre de curso: ".$reg['nombrecurso']."<br>";
        echo "la cacantidad de inscriptos: ".$reg  ['cantidad'] . "<br>";
        echo "todos los iscritos: ".$reg['codigo'];
}
// -------- ejemplo
// $registros = mysqli_query($conexion , "select count(alu.codigo) as cantidad , nombrecurso from alumnos  as alu inner join cursos as cur on cur.codigo = alu.codigocurso group by alu.codigocurso ") or die ("problemas con el select:".mysqli_error($conexion));

// while ($reg = mysqli_fetch_array($registros)) {
    // echo "nobre de curso: " . $reg['nombrecurso']. "<br>";
//     echo "cantidad de inscriptos: " . $reg['cantidad']. "<br>";
//     echo "<hr>";

// }
// -------------------------------

mysqli_close($conexion);
?>


</body>
</html>