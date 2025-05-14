<?php
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

// Conectar a la base de datos
$conn = new mysqli('localhost', 'root', '', 'base2');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener ID de la tarea desde la URL
$tarea_id = $_GET['id'] ?? null;
$usuario_id = $_SESSION['usuario_id'];
$error = '';
$titulo = '';
$descripcion = '';

// Si no hay ID, redirige
if (!$tarea_id) {
    header("Location: tareas.php");
    exit;
}

// Obtener datos de la tarea
$stmt = $conn->prepare("SELECT * FROM tareas WHERE id = ? AND usuario_id = ?");
$stmt->bind_param("ii", $tarea_id, $usuario_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $error = "Tarea no encontrada o no autorizada.";
} else {
    $tarea = $result->fetch_assoc();
    $titulo = $tarea['titulo'];
    $descripcion = $tarea['descripcion'];
}

// Procesar el formulario si se envió
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevo_titulo = $_T['titulo'] ?? '';
    $nueva_descripcion = $_T['descripcion'] ?? '';

    $update = $conn->prepare("UPDATE tareas SET titulo = ?, descripcion = ? WHERE id = ? AND usuario_id = ?");
    $update->bind_param("ssii", $nuevo_titulo, $nueva_descripcion, $tarea_id, $usuario_id);
    if ($update->execute()) {
        header("Location: tareas.php");
        exit;
    } else {
        $error = "Error al actualizar la tarea.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarea</title>
</head>
<body>

    <h1>Editar Tarea</h1>

    <?php if ($error): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="titulo">Título:</label><br>
        <input type="text" name="titulo" value="<?= htmlspecialchars($titulo) ?>" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" rows="5" cols="30" required><?= htmlspecialchars($descripcion) ?></textarea><br><br>

        <input type="submit" value="Guardar Cambios">
        <a href="tareas.php" >Cancelar</a>
    </form>

</body>
</html>
