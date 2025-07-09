<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="t3p44pag2.php" method="post">
        Ingrese nombre:
        <input type="text" name="nombre">
        <br>
        Ingrese email:
        <input type="text" name="email">
        <br>
        Ingrese fecha de nacimiento:
        <br>
        <select name="dia">
            <?php
            for ($i = 1; $i <= 31; $i++){
                echo "<option value='$i'>$i</option>"; 
            }
            ?>
        </select>
        <select name="mes">
            <?php
            for ($i = 1; $i <= 12; $i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <select name="ano">
            <?php
            for ($i = 1900; $i <= 2015; $i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <br>
        Seleccione el curso:
        <select name="codigocurso">
            <?php
            $conexion=mysqli_connect("localhost", "root", "", "base1") or
                                    die("Problemas con la conexión");
            $registros=mysqli_query($conexion, "SELECT codigo, nombrecurso from cursos") or
                                    die("Problemas en el select:" . mysqli_error($conexion));
            while ($reg=mysqli_fetch_array($registros)) {
                echo "<option value=$reg[codigo]>$reg[nombrecurso]</option>";
            }
            mysqli_close($conexion);
            ?>
        </select>
        <br>
        <input type="submit" value="Registrar">
    </form>
    <br>
    <a href="t3p44pag3.php">Ver listado de alumnos</a>
</body>
</html>