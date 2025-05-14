<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>problema 17</title>
</head>
<body>

    <?php

    $occion = $_REQUEST['ocion'];
    
    $regitro = array ('clave1' => '1311431' , 'clave2' => '2312424' , 'clave3' => '3124329' , 'clave4' => '423313212' , 'clave5' => '564435331');
    
    if ($occion == '1'){
        echo $regitro['clave1'];
    }
    elseif ($occion == "2"){
        echo $regitro['clave2'];
    }
    elseif ($occion == "3"){
        echo $regitro['clave3'];
    }
    elseif ($occion == "4"){
        echo $regitro['clave4'];
    }
    else {
        echo $regitro['clave5'];
    }
    
    ?>

    
</body>
</html>