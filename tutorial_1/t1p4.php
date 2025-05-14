<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       # $dia=date("d/m/Y h:i:s");
        #echo $dia;
        #if ($dia<=10)
        #{
         #   echo " sito activo";
        #}
        #else
        #{
         #   echo " sitio fuera de servisio";
        #}

        $num=rand(1,100);
        echo "El numero es: " , $num , "<br>";
        if ($num<=50)
        {
            echo "el numero es menor o igual que 50";
        }
        else
        {
            echo "el numero mayor 50";
        }

    ?> 
    <br>
    <a href="index.php">Pagina principal</a>
    
</body>
</html>