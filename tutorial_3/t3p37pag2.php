<!DOCTYPE html>
<?php
        session_start();
        
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conexion=mysqli_connect("localhost", "root", "", "base1") or 
                                die("Problemas con la conexion");
        $registro=mysqli_query($conexion, "SELECT mail, nombre from alumnos where mail='$_REQUEST[campoemail]'") or
                                die("Problemas con el select: " .mysqli_error($conexion));
        while($reg=mysqli_fetch_array($registro)){
            $_SESSION['nombresesion']=$reg['nombre'];
        }
    ?>
    <a href="t3p37pag3.php">Ir a la tercer pagina donde se recuperaran las variables de sesion.</a>
</body>
</html>