<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
session_start();
$conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexio");

$registros = mysqli_query($conexion , "update alumnos set nombre = '$_REQUEST[nombre]' , mail = '$_REQUEST[mail]' , codigocurso = '$_REQUEST[codigocurso]' where codigo = '$_REQUEST[codigo]'") or die ("problemas con el select:".mysqli_error($conexion));

echo "el curso fue modificado con exito";



?>
    


</body>
</html>