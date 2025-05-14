<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>solucio de formulario</title>
</head>
<body>
    <?php
    $su = (0);
    #if (isset($_REQUEST['futbol'])){
     #   echo "$_REQUESR['valor1'] ";
      #  $su +1
    #}
    #elseif (isset($_REQUEST['basket'])){
     #   $su +1
    #}
    #else{
    #    $su +1
    #}
    #if (isset($_REQUEST['futbol'] and $_REQUEST['basket'] ))

    if (isset($_REQUEST['futbol'])){
        $su ++ ;
        echo "<br>";
    }
    
    if (isset($_REQUEST['basket'])){
        $su ++;
        echo "<br>";
    }
    
    if (isset($_REQUEST['voley'])){
        $su ++;
        echo "<br>";

    }
    if (isset($_REQUEST['tennis'])){
        $su ++ ;
        echo "<br>";
    }
    
    if (isset($_REQUEST['valor1'])){
        $nom = $_REQUEST['valor1'];
        echo "$nom practica $su deportes <br><br>";
    }
    else{
        echo "Nombre no proporcionado";
    }

    ?>
    <a href="t1p11.php"> anterior </a>
    
    <br><br>

    <a href="index.php"> inicio </a>

        <br><br>
</body>
</html>