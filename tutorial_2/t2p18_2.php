<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 18 function_exists</title>
</head>
<body>
    
    <?php
    
    function login($c,$n){
        if ($c == $n){
            echo " <h style=\"text-aling:center\"> ";
            echo "las claves coinsiden </h1>";
        }
        else {
            echo "las claves no coinciden ";
        }

    }

    $nom = $_REQUEST['nombre'];
    $contra = $_REQUEST['contraseña'];
    $confi = $_REQUEST['confirmacio'];
    $r = login($contra , $confi);
    echo $r;


    ?>

</body>
</html>