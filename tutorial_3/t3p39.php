<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['error'])){
            echo "Ingreso clave incorrecta";
        }
        else{
            ?>
            <form action="t3p39pag2.php" method="post">
                Ingrese la clave:
                <input type="text" name="direccion" size="30">
                <br>
                <input type="submit" value="Redireccionar">
            </form>
        <?php
        }
        ?>
</body>
</html>