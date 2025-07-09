<?php
$nom = $_REQUEST['nombre'];
if (isset($nom) ){
    setcookie("nombre" , $nom , time() + 60*60*24*365 ,"/" );
    
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 34</title>
</head>
<body>
    <h1>se creo la cookie</h1>

    <a href="t3p34_3.php">Ir al pagina anterior </a>
</body>
</html>