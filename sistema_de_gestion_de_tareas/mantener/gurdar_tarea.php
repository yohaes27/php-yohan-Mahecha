<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>albasen de taras</title>
</head>
<body>

    <?php

    $tit = $_REQUEST['titulo'];
    $descri = $_REQUEST['descricion'];

   
    
    ?>

    <h2>Confirmar Tarea</h2>
    <p><strong>Título:</strong> <?= htmlspecialchars($tit) ?></p>
    <p><strong>Descripción:</strong> <?= nl2br(htmlspecialchars($descri)) ?></p>
    
    <form action="gurdar_tarea2.php" method="post">

        <input type="hidden" name="titulo" value="<?= htmlspecialchars($tit) ?>">
        <br><br>

        <input type="hidden" name="descripcion" value="<?= nl2br(htmlspecialchars($descri)) ?>">
        <br><br>

        <button type="submit" name="listo" value="1">Confirmar</button>
       
        <br><br>
    </form>


        <a href="nueva_tarea.php">anterior</a>
   

    
</body>
</html>