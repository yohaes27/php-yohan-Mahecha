<!DOCTYPE html>
<?php 
session_start();
session_destroy();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="t3p37pag2.php " method="post">
        Ingrese mail de usuario:
        <input type="text" name="campoemail">
        <br>
        <input type="submit" value="confirmar">
    </form>
</body>
</html>