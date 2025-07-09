<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo'])) {
    setcookie('tipo_titular', $_POST['tipo'], time() + (86400 * 30), "/");
    header('Location: portada.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Elegir titular</title>
</head>
<body>
    <h1>🛠️ Configuración de titular</h1>
    <form action="t3p35_2.php" method="post">
        <input type="radio" name="tipo" value="Noticia política" required> Política<br>
        <input type="radio" name="tipo" value="Noticia económica"> Económica<br>
        <input type="radio" name="tipo" value="Noticia deportiva"> Deportiva<br><br>
        <button type="submit">Guardar preferencia</button>
    </form>
    <a href="t3p35.php">← Volver</a>
</body>
</html>