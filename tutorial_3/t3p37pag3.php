<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION['nombresesion'])){
            echo "Nombre del usuario recuperado de la variable sesion: " .$_SESSION['nombresesion'];
        }
        else{
            echo "No hay ningun email que concuerde con el ingresado";
        }
        
    ?>
</body>
</html>