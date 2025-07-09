<?php
$titular = $_COOKIE['tipo_titular'] ?? 'todos'; // Si no hay cookie, mostrar todos

$titulares = [
    'Noticia política' => '¡Crisis ministerial desata debate en el Congreso!',
    'Noticia económica' => 'El dólar rompe récord histórico frente al peso.',
    'Noticia deportiva' => 'El Sapo FC gana invicto la copa nacional.'
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PERIÓDICO EL SAPO</title>
</head>
<body>
    <h1>📰 Portada - El Sapo</h1>

    <?php
    if ($titular === 'todos') {
        foreach ($titulares as $tipo => $texto) {
            echo "<h2>$tipo</h2><p>$texto</p>";
        }
    } else {
        echo "<h2>$titular</h2><p>{$titulares[$titular]}</p>";
    }
    ?>

    <hr>
    <a href="t3p35_2.php">🛠️ Configurar titular</a><br>
    <a href="t3p35_3.php">🗑️ Borrar preferencia</a>
</body>
</html>
</html>