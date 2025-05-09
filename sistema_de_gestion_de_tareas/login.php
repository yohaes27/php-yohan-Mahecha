<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // Conexión a la base de datos
        $conn = new mysqli('localhost', 'root', '', 'base2') or die ("problemas con la conexion");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $correo = $_POST['mail'];
            $contrasena = $_POST['contraseña'];
 // Hashear la contraseña
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("insert into usuarios (nombre, correo,
            contrasena) values (?, ?, ? )");
            
            $stmt->bind_param("sss",$nombre, $correo, $hash);
            if ($stmt->execute()) {
                echo "Usuario registrado con éxito.";
        ?>
            <form action="tareas.php">
            
                <h1>login</h1>

                correo electronico
                <input type="mail" name="mail">
                <br>

                contraseña
                <input type="password" name ="contrasena">
                <br>

                <input type="submit" value="Realizar">

        


            </form>




            <?php
        
        
        } 
            else {
            echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
?>


 
    <?php
        session_start();
        $conn = new mysqli('localhost', 'root', '', 'base2');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo = $_POST['mail'];
            $contrasena = $_POST['contrasena'];
            $stmt = $conn->prepare("SELECT id, nombre, contrasena from usuarios
            WHERE correo = mail");
            $stmt->bind_param("s", $correo);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result && $row = $result->fetch_assoc()) {
                if (password_verify($contrasena, $row['contrasena'])) {
 // Contraseña vál

                $_SESSION['usuario_id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                echo "Login exitoso. Bienvenido, " . $_SESSION['nombre'];
                // Redirigir a la página de tareas
                header("Location: tareas.php");
                exit;
            } else {
                echo "Contraseña incorrecta.";
            }
            } else {
            echo "Usuario no encontrado.";
            }
            $stmt->close();
        }   
?>


</body>
</html>