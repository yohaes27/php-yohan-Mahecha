
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 34 </title>
    
</head>
<body>

    <?php
    if (isset($_COOKIE['nombre'])) echo "<script> alert(' $_COOKIE[nombre]'); </script>";
    
    ?>
    
    

    <form action="t3p34_4.php" method="post">
        <label for="nombre">Escriba su nombre</label>
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>



</body>
</html>