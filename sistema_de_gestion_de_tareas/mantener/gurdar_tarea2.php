<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    
    
    $tit = $_POST['titulo'] ?? '';
    $descri = $_POST['descripcion'] ?? '';
    $listo = $_POST['listo'] ?? '';
    $usuario_id = $_SESSION['usuario_id'] ?? null;

    if ($usuario_id === null){
        echo "usuario no autenticado";
    }

    if ($listo == '1' ){
        
        $ar = fopen("tarea.txt" , "a") or die("problemas en la creacion");
        fputs($ar , $tit );
        fputs($ar , "\n");
        fputs($ar , $descri);
        fputs($ar , "\n");
        fputs($ar , "-------------------------------");
        fputs($ar , "\n");
        fclose($ar);

        $conexion = mysqli_connect("localhost" , "root" , "" , "base2") or die ("problemas con la coneccion");
        
        $fecha = date("Y-m-d");

        $registro = mysqli_query($conexion , "insert into tareas(usuario_id , titulo , descripcion , fecha_creacion , completada) values ('$usuario_id' ,   '$tit' , '$descri' , '$fecha' , now(),  0)") or die ("problemas en el select:".mysqli_error($conexion));

        mysqli_close($conexion);
        echo "se guardo la tarea <br><br>";
    }

    
    ?>
 
</body>
</html>