<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema</title>
</head>
<body>

    <h1>Alta de alumnos</h1>
    <br><br>
    <form action="t2p20_2.php" method="post">

        <h2>Ingrese el nombre</h2>
        <br> <br>
        <input type="text" name="nombre">
        <br><br>

        <h2> Ingrese mail: </h2>
        <br><br>
        <input type="email" name="mail">
        <br><br>

        <h2> Seleccione el curso </h2>
        <br><br>
        <select name="codigocurso">
            <option value="1">PHP</option>
            <option value="2">ASP</option>
            <option value="3">JSP</option>
        </select>
        <br><br>

       
        <input type="submit" value="Registrar">



    </form>

    <a href="index.php">inicio </a>


    
</body>
</html>