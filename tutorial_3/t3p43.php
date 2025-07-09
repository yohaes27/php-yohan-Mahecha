<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="t3p43pag2.php" method="post">
        Seleccione una fecha:<br>
        Día:
        <select name="dia">
            <?php
                for ($d = 1; $d <= 31; $d++){
                    echo "<option value=\"$d\">$d</option>";
                }
            ?>
        </select>
        Mes:
        <select name="mes">
            <?php
                for ($m = 1; $m <= 12; $m++){
                    echo "<option value=\"$m\">$m</option>";
                }
            ?>
        </select>
        Año:
        <select name="ano">
            <?php
                for ($a = 2020; $a <= 2030; $a++){
                    echo "<option value=\"$a\">$a</option>";
                }   
            ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Validar">
    </form>
</body>

</html>