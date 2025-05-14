<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 30</title>
</head>
<body>

    <?php
    $d= (0);
    
    $conexion = mysqli_connect("localhost" , "root" , "" ,"base1") or die ("problemas con la conexion");

    $registro = mysqli_query($conexion , "select cur.codigo , cur.nombrecurso from cursos as cur") or die ("problemas con el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registro)){
        $d ++;
        echo "nombre de curso $d <br>"; //. $reg['nombrecurso']. "<br>";
        
        ?>
        <a href="t2p31_2.php?codigocurso=<?php  $reg['codigo'] ?>"><?php
        
        echo $reg['nombrecurso']. "<br>";
    
         ?>
         </a>

        <?php
    
        }

    mysqli_close($conexion);
    
    ?>
    <!-- <a href="t2p31_2.php?tabla=2">Tabla del 2</a><br>

    <a href="t2p31_2.php?tabla=3">Tabla del 3</a><br>
    
    <a href="t2p31_2.php?tabla=5">Tabla del 5</a> -->

</body>
</html>