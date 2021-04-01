<?php 

    $banco = "Santander";
    $cliente = true;
    $cuenta_cliente = 123;
    $saldo_cliente = 120000;
    $banco_destino = "Galicia";
    $cuenta_destino = true;
    $hora_transferencia = rand(0,24);
    $monto = 110000;
    $costo = "";


    if($cliente && $cuenta_destino){
        
        if($saldo_cliente > $monto){
            echo "Hay suficiente dinero<br>";
        }else{
            echo "No puedes tranferir<br>";
        }

       echo $banco == $banco_destino? $monto = 0 . "<br>": $monto = 100 . "<br>";

        if($hora_transferencia >= 9 && $hora_transferencia <= 12 || $hora_transferencia >= 15 && $hora_transferencia <= 20 ){
            echo "La hora es " . $hora_transferencia . " y estás a horario<br>";
        }else{
            echo "La hora es " . $hora_transferencia . " y no estás a horario<br>";
        }
        
    }else{
        echo "Hasta que no esté  verificado el cliente, la cuenta destino y estés en horario hábil para tranferir no podrás hacer esta transaccíon";
    }
   
?> 