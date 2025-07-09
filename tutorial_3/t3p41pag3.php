<?php
    $puntos = $_REQUEST['puntos'];
    $ancho = 120;
    $alto = 40;
    $imagen = imageCreate($ancho, $alto);
    $blanco = imageColorAllocate($imagen, 255, 255, 255);
    $verde = imageColorAllocate($imagen, 0, 255, 0);
    for ($i = 0; $i < $puntos; $i++) {
        $x = 10 + ($i * 20);
        $y = 20;
        imageFilledEllipse($imagen, $x, $y, 15, 15, $verde);
    }
    header("Content-type: image/png");
    imagePNG($imagen);
    imageDestroy($imagen);
?>