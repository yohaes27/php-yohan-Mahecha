<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #$in = (0);

    echo "ciclo for <br> <br>";
    $dos = (2);
    for($d = 1; $d <= 10; $d++ )
    {
        #$in =$in + 1;
        echo "$dos x $d = " , $dos * $d ;
        echo "<br> <br>";

    }

    echo "ciclo while <br> <br>";

    
    $ini = (0);
    $nu = (2);
    while ($ini <= 9)
    {
        $ini ++ ;
        echo "$nu x $ini = ", $nu * $ini;
        echo "<br> <br>";
    }

    echo "ciclo do pro realisar";

    ?>
    <br>
    <a href="index.php">Pagina principal</a>
</body>
</html>
