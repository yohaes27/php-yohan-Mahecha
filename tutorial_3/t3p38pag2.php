<?php
    function retornarConexion(){
        $conexion=mysqli_connect("localhost", "root", "", "base1") or 
                                die("Problemas con la conexion");
        $registro=mysqli_query($conexion, "select * from alumnos") or
                                die("Problemas con el select: " .mysqli_error($conexion));
        while($reg=mysqli_fetch_array($registro)){
            echo "Codigo: ".$reg['codigo']."<br>";
            echo "Nombre: ".$reg['nombre']."<br>";
            echo "Mail: ".$reg['mail']."<br>";
            echo "Curso: ";
            switch ($reg['codigocurso']){
                case 1:echo "PHP";
                break;
                case 2:echo "ASP";
                break;
                case 3:echo "JSP";
                break;
            }
            echo "<br>";
            echo "<hr>";
        }
        mysqli_close($conexion);
    }
?>