<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 29 nobedades</title>
</head>
<body>
    
    <?php

        $conexion = mysqli_connect ("localhost" , "root" , "" ,"base1") or die ("problemas con la conexion ");

        $registros = mysqli_query ($conexion , "select from alumnos WHERE amil = '$_REQUEST[mail]' and nombre = '$_REQUEST[nombre]' and ") or die ("problemas con el select:" . mysqli_error($conexion) );
        
        if ($regalu = mysqli_fetch_array($registros)){    
    ?>
        <form action="t2p29_3.php" method="post">
            <input type="mail" name="mailviejo" value="<?php echo $regalu['mail'] ?>">
            <select name="codigocurso" id="">
                <?php   
                    $registros = mysqli_query ($conexion , "select * from cursos") or die ("problemas en el select:" . mysqli_error($registros));
                    while($reg= mysqli_fetch_array($registros) ){
                        if ($regalu['codigocurso'] == $reg['codigo']){
                            echo "<optio value=\"$reg[codigo]\" selected> $reg[cur_nombre]</option>";

                        }
                        else{
                            echo "<option value=\"$reg[cidigo]\"> $reg[cur_nombre]</option>";
                        }
                        
                    }
                ?>

            </select>
            <br>
            <input type="submit" value="modificar">
        </form>
        <?php
            }
            else {
                echo "no existe alumno con dicho mail ";
            }
        
        ?>

</body>
</html>