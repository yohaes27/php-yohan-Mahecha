<?php
    $ancho=100;
    $alto=30;
    $imagen=imagecreate($ancho, $alto);
    $color=Imagecolorallocate($imagen, 100, 149, 237);
    $blanco=Imagecolorallocate($imagen, 255, 255, 255);
    imagefilledrectangle($imagen, 10, 10, $ancho-10, $alto-10, $color);
    ImageString($imagen, 5, 48, 12, "Boton", $blanco);
    header("content-type: image/jpeg");
    imagejpeg($imagen);
    imagedestroy($imagen);
?>