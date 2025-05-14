<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form4_2.php" method="post">
        <label for="cedula">Cedula de cliente</label>
        <input type="number" name="cedula" required>
        <br><br>

        <label for="nombre">Nombre del cliente</label>
        <input type="text" name="nombre" required>
        <br><br>

        <label for="monto">Monto del credito</label>
        <input type="number" name="monto" required><br><br>

        <label for="interesmensual">Tasa de interes mensual</label>
        <input type="number" name="interesmensual" required><br><br>

        <label for="pazomes">Plazo en meses</label>
        <input type="number" name="pazomes" required><br><br>

        <input type="submit" value="enviar">
    </form>
</body>
</html>