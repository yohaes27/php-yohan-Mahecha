<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $valor = rand(1,3);
    if ($valor == 1){
        echo "string; uno";
    }
    elseif ($valor ==2 ){
        echo "string; dos";
    }
    else
    {
        echo "string; tres";
    }

    ?>
    <br>
    <a href="index.php">Pagina principal</a>
</body>
</html>