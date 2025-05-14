<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 2</title>

    <link rel="stylesheet" href="scc/stilo.css">
</head>
<body>
    
    <form action="ejercicio_form2.php" method="post">
        <label for="vendedor">Nombre del vendedor</label>
        <input type="text"  name="vendedor" required><br><br>

        <label for="autos">Cantidad automoviles vendidos:</label>
        <input type="text" name ="autos" required><br><br>

        <label for="presiototal">presio total automoviles vendidos</label>
        <input type="number" name="presiototal" required>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    $autoventa = $_POST['autos'];
    $valortotal = $_POST['presiototal'];
 

    function ola($a , $p){
        
        $salariobase = 737000;
        $comisiones = 50000 * $a;
        $comisionvariable = 0.05 * $p;
        
        $salariototal = $salariobase + $comisiones + $comisionvariable;
        return $salariototal;
        
    }
    
    
    $salario = ola($autoventa , $valortotal);
    
    echo "El salario es de: $" . $salario;
}
// else{
//     echo "No se han enviado datos del formulario";
// }

?>