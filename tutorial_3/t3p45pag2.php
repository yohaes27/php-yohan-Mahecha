<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_REQUEST['nombre'];
        $email = $_REQUEST['email'];
        $importe = $_REQUEST['importe'];
        printf("Gracias %s, por donar %s dolares.", $nombre, "$" . sprintf("%07d", $importe));
    ?>
</body>
</html>