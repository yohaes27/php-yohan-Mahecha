<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $celula = $_REQUEST['cedula'];
    $nombre = $_REQUEST['nombre'];
    $montocredito = $_REQUEST['monto'];
    $interesmensual =$_REQUEST['interesmensual'];
    $plazomes = $_REQUEST['pazomes'];
    
    $cuota_fija = $montocredito * ($interesmensual * pow(1 + $interesmensual , $plazomes )) /(pow(1 + $interesmensual ,$plazomes) -1 );

    $saldo = $montocredito;
    $cuota = [];

    for ($i = 1; $i <= $plazomes; $i++){
        $interes = $saldo * $interesmensual;
        $abono_capital = $cuota_fija - $interes;
        $nuevo_saldo = $saldo - $abono_capital;

        $cuota[]=[

            'numero' => $i,
            'saldo_anterior' => number_format($saldo, 2),
            'cuota_fija' => number_format($cuota_fija, 2),
            'interes' => number_format($interes, 2),
            'abono_capital' => number_format($abono_capital, 2),
            'nuevo_saldo' => number_format($nuevo_saldo, 2)


        ];

        $saldo = $nuevo_saldo;

    }






}



?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablla  formulario 4</title>
</head>
<body>
    <table>
        <tr>
            <th>No.cuenta</th>
            <th>Saldo Anterior</th>
            <th>Valor Cuenta Fija</th>
            <th>Abono Interes</th>
            <th>Abono Capital</th>
            <th>Nuevo Saldo</th>
        </tr>
        <?php  foreach($cuota as $fila): ?>
        <tr>
            <td><?php echo htmlspecialchars($fila['numero'])?></td>
            <td><?php echo htmlspecialchars($fila['saldo_anterior'])  ?></td>
            <td><?php echo htmlspecialchars($fila['cuota_fija'])  ?> </td>
            <td><?php echo htmlspecialchars($fila['interes'])  ?></td>
            <td><?php echo htmlspecialchars($fila['abono_capital'])  ?></td>
            <td><?php echo htmlspecialchars($fila['nuevo_saldo'])  ?></td>

        </tr>

            <?php endforeach;  ?>

    </table>
    
</body>
</html>