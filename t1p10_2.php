<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 10</title>
</head>
<body>
    
    <?php
    
    $nombre = $_REQUEST["nombre"];
    $occion = $_REQUEST["occion"];
    if ($occion == "primera"){
        echo "$nombre no tiene estudios "; 
    }
    elseif($occion == "segunda"){
        echo "$nombre tiene estudios primaria ";
    }
    else{
        echo "$nombre tiene estudios secundaria ";

    }
    
    ?>
    <br><br>
    
    <a href="t1p10.php">anterior</a>
</body>
</html>