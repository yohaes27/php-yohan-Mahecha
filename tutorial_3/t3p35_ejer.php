

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 35</title>
</head>

<body>

    <form action="t3p35_ejer2.php" method="post">
        Ingrese su mail:
        <input type="text" name="mailusuario"
            value="<?php if (isset($_COOKIE['mail'])) echo $_COOKIE['mail']; ?>">
        <br>
        <input type="radio" name="opcion" value="recordar">
        Recordar en esta computadora el mail ingresado.
        <br>
        <input type="radio" name="opcion" value="norecordar">
        No recordar.
        <br>
        <input type="submit" value="confirmar">
    </form>

</body>

</html>