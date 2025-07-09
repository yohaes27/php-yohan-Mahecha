
    <?php

    if ($_POST['radio'] == "rojo"){
        setcookie("color" , "#ff0000" , time()+ 60 * 60 *24 * 365 , "/");
    }
    elseif ($_POST['radio'] == "verde"){
        setcookie("color" , "#00ff00" , time()+ 60 * 60 *24 * 365 , "/");
    }
    elseif ($_POST['radio'] == "azul"){
        setcookie("color" , "#0000ff" , time()+ 60 * 60 *24 * 365 , "/"); 
    }

    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 34 2</title>
</head>
<body>

se cro la cookie <br>

<a href="tutorial_3/t3p34_1.php">Ir a la otra pagina</a>
    
</body>
</html>