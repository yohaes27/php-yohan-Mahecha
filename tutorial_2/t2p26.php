<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>probblema 26</title>
</head>
<body>
    
    <form action="t2p26_2.php" method="post">

        ingrese nombre:
        <input type="text" name="nombre"><br><br>

        ingrese mail:
        <input type="email" name="mail"><br><br>

        seleccione un curso:
        <select name="codigocuso">
            <?php
            
                $conexion = mysqli_connect ("localhost" , "root" , "" , "base1") or die ("problemas con la coneccion");

                $registros = mysqli_query ($conexion , "select codigo , nombre from cursos") or die ("problemas con el select:".mysqli_error($registros));

                while ($reg = mysqli_fetch_array($registros)){
                    echo "<option values=\"$reg[codigo]\">$reg[nombrecurso]</option>";
                }
            ?>

        </select>
        <br><br>
                
        <input type="submit" value="Registrar">
    </form>

</body>
</html>