<?php
    if($_REQUEST['direccion']<>"z80"){
        header("Location: t3p39.php?error=1");
    }
    else{
        echo "Bienvenido";
    }
    
?>