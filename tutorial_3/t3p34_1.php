<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 34</title>
</head>
<body>
    
    <?php
    if (isset($_COOKIE['color'])){
        echo "style=\"background:"$_COOKIE['color']\""
    }
    ?>
    <form action="t3p34_2.php" method="post">
        <label for="">Seleccione de que coror desea que sea la pagina de ahora en mas:</label><br>
        <input type="radio" value="rojo"name ="radio"><br>

        <input type="radio" value="verde" name="radio"><br>
        
        <input type="radio" value="azul" name="radio"><br>
        
        <input type="submit" value="creaar Cookie">
    </form>


</body>
</html>