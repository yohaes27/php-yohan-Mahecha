<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de tareas</title>
</head>
<body>
    
    <form action="gurdar_tarea.php" method="post">
        
        <label for="titulo">titulo</label>
        <input type="text" name="titulo">
        <br>

        <label for="descricion">Descrición</label> 
        <textarea name="descricion" rows="10" cols="20">

        </textarea>

        <br><br>
        <input type="submit" value="Registrar">

    </form>




</body>
</html>