<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicion 4</title>

    <link rel="stylesheet" href="../css/estiilo.css">
</head>
<body>

    <form action="ejercicio4.php" method="post" class="form">
        <label for="parcial1">Parcial 1:</label>
        <input type="number" name="parcial1" required>
        <br><br>

        <label for="parcial2">Parcial 2:</label>
        <input type="number" name="parcial2" required>
        <br><br>

        <label for="parcial3">Parcial 3:</label>
        <input type="number" name="parcial3" required>
        <br><br>

        <label for="examenfinal">Examen final:</label>
        <input type="number" name="examenfinal" required>
        <br><br>
        <label for="trabajofinal">Trabajoofinal:</label>
        <input type="number" name="trabajofinal" required>
        <br><br>
        <input type="submit" id="btn" value="Enviar">
        
    </form>
    

    
</body>
</html>

<?php

$nota1 = $_POST['parcial1']?? 0;
$nota2 = $_POST['parcial2']?? 0;
$nota3 = $_POST['parcial3']?? 0;
$exafin = $_POST['examenfinal']?? 0;
$trabafin = $_POST['trabajofinal']?? 0;

$promedio = ($nota1 + $nota2 + $nota3) / 3;
// $promedio = ($promedio / 3);
$nota_fin = ($promedio * 0.35) + ($exafin * 0.35) + ($trabafin * 0.30);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($nota_fin >= 3){
        echo "el estudiante aprobo la nota fue de:. $nota_fin .<br>" ;
    }
    else{
        echo "el estudiante no areprobo su nota fue  de: " . $nota_fin . "<br>";
    }
}

?>