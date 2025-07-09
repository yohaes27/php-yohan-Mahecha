<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['usu']))
        echo "Cookie de sesión creada. Su valor es $_COOKIE[usu]";
    else
        echo "No existe cookie de sesión";
    ?>
    <br>
    <a href="t3p36_ejer2.php">Crear cookie de sesión</a>
</body>

</html>