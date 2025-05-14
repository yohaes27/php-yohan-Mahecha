<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario 3</title>

    <link rel="stylesheet" href="stilo.css">

</head>
<body>

 <form action="form3.php" method="post">
        <label for="nombre">Nombre del paciente</label>
        <input type="text"  name="nombre" required><br><br>

        <label for="peso">Peso en kilogramos:</label>
        <input type="number" name ="peso" required><br><br>

        <label for="metro">estatura en metros</label>
        <input type="number" step="any" name="metro" required>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    function calcularimc($p , $e){
        return $p / ($e * $e);
         
    }
    
    $nombre = $_REQUEST['nombre'];
    $peso = floatval($_REQUEST['peso']);
    $estaturametro = floatval( $_REQUEST['metro']);
    
    $imc = calcularimc($peso , $estaturametro);
    
    if ($imc <= 18.5){
        echo $nombre . "esta bajo de peso" .$imc;
    }
    elseif ($imc >= 18.5 and $imc <= 24.9){
        echo $nombre . "estado saludable".$imc;
    }
    elseif ($imc >= 25.0 and $imc <= 29.9){
        echo $nombre . "estado en sobrepeso".$imc;
    }
    elseif ($imc >= 30.0 and $imc <=39.9){
        echo $nombre . "Estado en Obesidad".$imc; 
    }
    elseif ($imc >= 40){
        echo $nombre . "Estado en Obesidad morbida".$imc;
    }


}


?>