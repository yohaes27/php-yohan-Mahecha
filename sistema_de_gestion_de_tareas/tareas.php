
 <?php
 session_start();
 if (!isset($_SESSION['usuario_id'])){
    header("location: login.php");
    exit;
 }

$conn = new mysqli('localhost', 'root', '', 'base2');
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// fuccion para agregar tara

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titulo']) ){

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $usuario_id = $_SESSION['usuario_id'];
    $stmt = $conn->prepare("INSERT INTO tareas (usuario_id, titulo, descripcion, completada) VALUES (?, ?, ?, 0)");
    $stmt->bind_param("iss", $usuario_id, $titulo, $descripcion);
    $stmt->execute();
    $stmt->close();

}

// Función para eliminar una tarea
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $stmt = $conn->prepare("DELETE FROM tareas WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Función para marcar una tarea como completada
if (isset($_GET['completar'])) {
    $id = $_GET['completar'];
    $stmt = $conn->prepare("UPDATE tareas SET completada = 1 WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Obtener las tareas del usuario
$usuario_id = $_SESSION['usuario_id'];
$stmt = $conn->prepare("SELECT id, titulo, descripcion, completada FROM tareas WHERE usuario_id = ?");
$stmt->bind_param("i", $usuario_id);
$stmt->execute();
$result = $stmt->get_result();
$tareas = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();

        // if (isset($_REQUEST['nuevas'])){

        //     header("Location: nueva_tarea.php");
        
        // }

        // if (isset($_REQUEST['editar'])){

        //     header("Location: editar_tarea.php");
         
        // }

        // if (isset($_REQUEST['eliminar'])){
        //     echo "eliminar";

        //     #mostrar un listado y desidir que tarea borar

        // }

        // if ( isset($_REQUEST['completado'])){

            
        // }
    
        
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de tareas</title>
</head>
<body>

<h1>Bienvenido ,  <?= htmlspecialchars($_SESSION['nombre']) ?> </h1>
  <a href="logout.php">Cerrar sesión</a>
  
    
    <form action="tareas.php" method="post">


         <input type="text" name="titulo" placeholder="Título" required><br>
        
         <textarea name="descripcion" placeholder="Descripción" required></textarea><br>

        <button type="submit">Agregar Tarea</button>


        
        <!-- <h1>tareas</h1>
        
        Añadir nuevas tareas <input type="submit" name="nuevas" value="Realizar">
        <br>
        
        editar <input type="submit" name="editar" value="Realizar">
        <br>
        
        eliminar <input type="submit" name="eliminar" value="Realizar">
        <br>
        
        Marcar como conpletado <input type="submit" name="" value="Realizar"> 
        <br> -->
    </form>


    
    <h2>Mis Tareas</h2>
    <table border="2">
        <thead>
            <tr>
                <th>Id </th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tareas as $tarea): ?>
                <tr>
                    <td> 
                        <?= htmlspecialchars($usuario_id) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($tarea['titulo']) ?>
                    </td>
                    <td>
                        <?= htmlspecialchars($tarea['descripcion']) ?>
                    </td>
                    <td>
                        <?= $tarea['completada'] ? 'Completada' : 'Pendiente' ?>
                    </td>
                    <td>
                        <?php 
                        if (!$tarea['completada']): ?>
                            <a href="tareas.php?completar=<?= $tarea['id'] ?>">completada</a>
                        <?php endif; ?>
                        <a href="editar_tarea.php?id=<?= $tarea['id'] ?>">Editar</a>
                        <a href="tareas.php?eliminar=<?= $tarea['id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        


    
   
        
    


    

</body>
</html>

<?php
$conn->close();
?>