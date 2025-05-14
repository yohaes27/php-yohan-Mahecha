<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto php gestion de almasenamiento de datos </title>
</head>
<body>
    
    <form action="registro.php" method="post">

    <h1>registro</h1>

        ingrese su nombre de usuario
        <input type="text" name="nombre"required>
        <br>

        ingrese su correo electronico
        <input type="email" name="mail" required>
        <br>

        ingrese su contraseña
        <input  type="password" name="contrasena" required>
        <br>

        confirma su contraseña
        <input type="password" name="confirmar" required>
        <br>

        <input type="submit" value="Registrar">
    
    </form>


    <?php
    // Conexión a la base de datos
        $conn = new mysqli('localhost', 'root', '', 'base2') or die ("problemas con la conexion");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $correo = $_POST['mail'];
            $contrasena = $_POST['contrasena'];
            $confirmar = $_POST['confirmar'];

            if ($contrasena !== $confirmar){
                echo "La contraseña no coincide";
                exit;
            }
 // Hashear la contraseña
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("insert into usuarios (nombre, correo,
            contrasena) values (?, ?, ? )");
            
            $stmt->bind_param("sss",$nombre, $correo, $hash);
            if ($stmt->execute()) {
                #echo "Usuario registrado con éxito.";
                header("Location: login.php");
                exit;

            }         
        
            else {
                if ($stmt->errno == 1062){
                    echo "El correo ya esta registrad.";
                }
                else{

                    echo "Error: " . $stmt->error;
                }
            }
            $stmt->close();
            $conn->close();
        }
?>


</body>
</html>