<?php
if ($_REQUEST['opcion'] == "recordar") {
    setcookie("mail", $_REQUEST['mailusuario'], time() + (60 * 60 * 24 * 365), "/");
} elseif ($_REQUEST['opcion'] == "norecordar") {
    setcookie("mail", "", time() - 1000, "/");
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parte 2</title>
</head>

<body>
    <?php
    if ($_REQUEST['opcion'] == "recordar")
        echo "cookie creada";
    elseif ($_REQUEST['opcion'] == "norecordar")
        echo "cookie eliminada";
    ?>
    <br>
    <a href="t3p35_ejer.php">Ir a la otra página</a>


</body>

</html>