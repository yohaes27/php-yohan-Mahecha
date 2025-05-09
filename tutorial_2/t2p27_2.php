<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 27</title>
</head>
<body>
    
    <?php

        $conexion = mysqli_connect("localhost" , "root" , "" , "base1") or die ("problemas con la conexion");

        if (isset($_REQUEST['codigo'])){
            $codigo = intval($_REQUEST['codigo']); #este valor llega o viene como string incluso si es un numero
        

            $registros = mysqli_query($conexion , "select alu.alu_codigo , alu.nombre , alu.mail , cur.cur_codigo , cur.cur_nombre from alumnos as alu inner join cursos as cur on alu.alu_codigo=cur.cur_codigo where alu.alu_codigo = $codigo") or die ("problemas en el select:" . mysqli_error($conexion));
         
            while ($reg = mysqli_fetch_array($registros)){

                echo "nombre:". $reg['nombre']."<br>";
                echo "mail:" . $reg['mail']. "<br>";            
                echo "codigo:". $reg['alu_codigo']."<br>";
                echo "curso:" . $reg['cur_nombre']. "<br>";
        }}
    
        mysqli_close($conexion);            
    
    ?>

</body>
</html>