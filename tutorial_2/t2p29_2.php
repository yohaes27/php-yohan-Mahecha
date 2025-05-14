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

        $codigo = $_POST['codigo'];
        $registros = mysqli_query ($conexion , "select * from alumnos WHERE codigo = '$codigo'") or die ("problemas con el select:" . mysqli_error($conexion) );
        
        if ($regalu = mysqli_fetch_array($registros)){    
    ?>
    <h1>modifica los datos</h1>
        <form action="t2p29_3.php" method="post">
            <label for="">codigo</label>
            <input type="nombre" name="codigo" value="<?php echo $regalu['codigo'] ?>"><br>

            <label for="">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $regalu['nombre']  ?> "required>
            <br>

            <label for="">email</label>
            <input type="email" name="mail" value="<?php echo $regalu['mail']  ?>" required><br>

            <label for="">curso</label>
            
            <select name="codigocurso">
                <?php   
                    $registros = mysqli_query ($conexion , "select * from cursos") or die ("problemas en el select:" . mysqli_error($registros));

                    while($reg= mysqli_fetch_array($registros) ){
                        if ($regalu['codigocurso'] == $reg['codigo']) {
                            echo "<option value=\"$reg[codigo]\" selected> $reg[nombrecurso]</option>";
                            

                        }
                        else{
                            echo "<option value=\"$reg[codigo]\"> $reg[cur_nombre]</option>";
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
                echo "no existe alumno con dicho codigo ";
            }
            mysqli_close($conexion);
        
        ?>

</body>
</html>